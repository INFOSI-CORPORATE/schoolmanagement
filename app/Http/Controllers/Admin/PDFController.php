<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use App\Classes\Logger;
use App\Models\Log;
use PDF;

class PDFController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function registration(Request $request)
    {
        $response['schoolyear'] = $request->schoolyear;
        $response['studentSchoolYear'] = CourseClasseGradeStudentSchoolyear::join('schoolyears', 'registrations.fk_schoolyears_id', '=', 'schoolyears.id')
            ->where('schoolyears.name', '2021-2022')
            ->whereNull('registrations.deleted_at')
            ->get();

        $pdf = PDF::loadView('pdf/registration/index', $response);

        return $pdf->setPaper('a4', 'portrait')->stream('Lista de Matricula-' . date('d-m-Y') . '.pdf');
    }
}