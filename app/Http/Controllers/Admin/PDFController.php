<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Symfony\Component\HttpFoundation\Response;

class PDFController extends Controller
{
    public function registration()
    {
        //return PDF::loadView('admin.pdf.registration.index')->setPaper('a4', 'landscape');
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        // Se quiser que faça download: ->download('name.pdf')
        /*->setPaper('a4', 'landscape')
        ->stream('postos' . time() . '.pdf')*/

        $pdf = PDF::loadView('admin.pdf.registration.index')->setPaper('a4', 'landscape');

        // Define um nome de arquivo para o PDF com o timestamp atual
        $filename = 'lista' . time() . '.pdf';

        // Salva o arquivo PDF no diretório 'pdf' dentro do diretório 'public' da sua aplicação Laravel
        $pdf->save(public_path('pdf/' . $filename));

        // Retorna uma resposta HTTP que contém o PDF como conteúdo
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $filename . '"');

    }
}