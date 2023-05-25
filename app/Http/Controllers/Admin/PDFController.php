<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Symfony\Component\HttpFoundation\Response;
use App\Classes\Logger;
use App\Models\Log;

class PDFController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function registration(Request $request)
    {
        $schoolyear = $request->schoolyear;


        $response['studentSchoolYear'] = CourseClasseGradeStudentSchoolyear::join('schoolyears', 'registrations.fk_schoolyears_id', '=', 'schoolyears.id')
        ->where('schoolyears.name', '2021-2022')
        ->whereNull('registrations.deleted_at')
        ->get();
        $pdf = PDF::loadview('admin.pdf.registration.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');

    }
}