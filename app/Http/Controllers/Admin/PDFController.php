<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpFoundation\Response;
use App\Classes\Logger;
use App\Models\Ativitie;
use App\Models\BedroomStudent;
use App\Models\Log;
use App\Models\Schoolyear;
use App\Models\Student;
use App\Models\TeacherSubjectClasseRuleSchoolyear;
use Illuminate\Support\Facades\App;
use App\Models\TeacherClasseCourseGradeSubjetc as Exam;
use App\Models\Transport;
use App\Models\TransportPay;
use App\Models\Tuition;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function registration(Request $request)
    {
        $data = $request->validate([
            'schoolyear' => 'required',
            'classe' => 'required',
        ], [
            'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
            'classe.required' => 'O campo Turma é obrigatório.',
        ]);
        $response = [
            'schoolyear' => $request->schoolyear,
            'classe' => $request->classe
        ];

        //$exists = CourseClasseGradeStudentSchoolyear::find($id);
        $schoolyear = $data['schoolyear'];
        $classe = $data['classe'];

        $response['studentSchoolYear'] = CourseClasseGradeStudentSchoolyear::join('schoolyears', 'registrations.fk_schoolyears_id', '=', 'schoolyears.id')
            ->join('classes', 'registrations.fk_classes_id', '=', 'classes.id')
            ->where('schoolyears.name', $schoolyear)
            ->where('classes.name', $classe)
            ->whereNull('registrations.deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.registration.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }



    public function contract(Request $request)
    {
        $data = $request->validate([
            'schoolyear' => 'required',
        ], [
            'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
        ]);

        //$exists = CourseClasseGradeStudentSchoolyear::find($id);
        $schoolyear = $data['schoolyear'];

        $response['teacherSchoolYear'] = TeacherSubjectClasseRuleSchoolyear::join('schoolyears', 'contracts.fk_schoolyears_id', '=', 'schoolyears.id')
            ->where('schoolyears.name', $schoolyear)
            ->whereNull('contracts.deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.contract.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    public function exam()
    {
        $response['exams'] = Exam::OrderBy('id', 'Desc')->get();

        $pdf = PDF::loadview('pdf.exam.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    public function ativitie()
    {
        $response['ativities'] = Ativitie::OrderBy('id', 'Desc')->get();

        $pdf = PDF::loadview('pdf.ativitie.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }


    public function student(Request $request)
    {
        $data = $request->validate([
            'schoolyear' => 'required',
        ], [
            'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
        ]);

        $response['schoolyear'] = $data['schoolyear'];

        $response['students'] = Student::where('schoolyear', $response['schoolyear'])
            ->whereNull('deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.student.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    public function bedroomStudent(Request $request)
    {
        $data = $request->validate([
            'schoolyear' => 'required',
        ], [
            'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
        ]);

        $schoolyear = $data['schoolyear'];

        $response['bedroomStudents'] = BedroomStudent::join('schoolyears', 'bedroom_students.fk_schoolyears_id', '=', 'schoolyears.id')
            ->where('schoolyears.name', $schoolyear)
            ->whereNull('bedroom_students.deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.bedroomStudent.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    /** tuition */

    public function tuition(Request $request)
    {
        $data = $request->validate([
            'schoolyear' => 'required',
            'month' => 'required',
        ], [
            'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
            'month.required' => 'O campo Mês é obrigatório.',
        ]);

        $response = [
            'schoolyear' => $request->schoolyear,
            'month' => $request->month,
            'pay' => $request->pay,
            'cancel' => $request->cancel,
            'pending' => $request->pending,
        ];


        $schoolyear = Schoolyear::where('name', $response['schoolyear'])->first();

        $response['tuitions'] = Tuition::where('fk_schoolyears_id', $schoolyear->id)
            ->where('month', $response['month'])
            ->whereNull('deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.tuition.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }


    /** TuitionStudent */

    public function tuitionStudent($id)
    {

        $response['tuition'] = Tuition::find($id);

        $pdf = PDF::loadview('pdf.tuitionStudent.index', $response);

        $this->Logger->log('info', 'Factura da Propina do Aluno');
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    public function transportPay(Request $request)
    {
        $data = $request->validate([
            'schoolyear' => 'required',
            'month' => 'required',
        ], [
            'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
            'month.required' => 'O campo Mês é obrigatório.',
        ]);

        $response = [
            'schoolyear' => $request->schoolyear,
            'month' => $request->month,
            'pay' => $request->pay,
            'cancel' => $request->cancel,
            'pending' => $request->pending,
        ];

        $schoolyear = Schoolyear::where('name', $response['schoolyear'])->first();

        $response['transports'] = TransportPay::where('fk_schoolyears_id', $schoolyear->id)
            ->where('month', $response['month'])
            ->whereNull('deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.transportPay.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    public function transportPayStudent($id)
    {

        $response['transportPayStudent'] = TransportPay::find($id);

        $pdf = PDF::loadview('pdf.transportPayStudent.index', $response);

        $this->Logger->log('info', 'Factura do Pagamento de Transporte do Aluno');
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }

    public function transportDocumentation($id)
    {

        $transport = Transport::find($id);
        $path = public_path('storage/transport/' . $transport->documentation);
        //$path = asset('storage/'.$transport->documentation);
        //dd($path);

        if (!file_exists($path)) {
            return redirect()->back()->with('documentation_not_exist', '1');
        }
        return response()->download($path);
    }

    public function studentCard($id)
    {

        $response['registration'] = CourseClasseGradeStudentSchoolyear::find($id);

        $pdf = PDF::loadview('pdf.studentCard.index', $response);

        $this->Logger->log('info', 'Cartão de Estudante');
        return $pdf->setPaper('a7', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }
}
