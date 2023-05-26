<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseClasseGradeStudentSchoolyear;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpFoundation\Response;
use App\Classes\Logger;
use App\Models\Log;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function registration(Request $request)
    {
        //$exists = CourseClasseGradeStudentSchoolyear::find($id);
        $schoolyear = $request->schoolyear;


        $response['studentSchoolYear'] = CourseClasseGradeStudentSchoolyear::join('schoolyears', 'registrations.fk_schoolyears_id', '=', 'schoolyears.id')
            ->where('schoolyears.name', $schoolyear)
            ->whereNull('registrations.deleted_at')
            ->get();
        $pdf = PDF::loadview('pdf.registration.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf');

    }

    public function print(Request $request)
    {
        $data = "Oi";
        $pdf = Pdf::loadView('pdf.registration', $data);
        return $pdf->download('invoice.pdf');

    }
}