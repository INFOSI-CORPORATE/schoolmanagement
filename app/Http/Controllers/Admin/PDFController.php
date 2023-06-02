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
use App\Models\Log;
use App\Models\Student;
use App\Models\TeacherSubjectClasseRuleSchoolyear;
use Illuminate\Support\Facades\App;
use App\Models\TeacherClasseCourseGradeSubjetc as Exam;

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
        ], [
                'schoolyear.required' => 'O campo Ano Lectivo é obrigatório.',
            ]);

        //$exists = CourseClasseGradeStudentSchoolyear::find($id);
        $schoolyear = $data['schoolyear'];

        $response['studentSchoolYear'] = CourseClasseGradeStudentSchoolyear::join('schoolyears', 'registrations.fk_schoolyears_id', '=', 'schoolyears.id')
            ->where('schoolyears.name', $schoolyear)
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

        $pdf = PDF::loadview('pdf.contract.index', $response);
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

        //$exists = CourseClasseGradeStudentSchoolyear::find($id);
        $response['schoolyear'] = $data['schoolyear'];

        $response['students'] = Student::where('schoolyear', $response['schoolyear'] )
            ->whereNull('deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.student.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);

    }


    // public function print(request $request)
    // {
    //     $data = "oi";
    //     $pdf = pdf::loadview('pdf.registration', $data);
    //     return $pdf->download('invoice.pdf');

    // }
}