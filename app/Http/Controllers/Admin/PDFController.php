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
use App\Models\Tuition;

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

        //$exists = CourseClasseGradeStudentSchoolyear::find($id);
        $response['schoolyear'] = $data['schoolyear'];

        $response['students'] = Student::where('schoolyear', $response['schoolyear'])
            ->whereNull('deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.student.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);

    }


    /** Tuition */

    public function tuition($id)
    {

        $response['tuition'] = Tuition::find($id);

        $pdf = PDF::loadview('pdf.tuition.index', $response);

        $this->Logger->log('info', 'Factura da Propina do Aluno');
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }


}