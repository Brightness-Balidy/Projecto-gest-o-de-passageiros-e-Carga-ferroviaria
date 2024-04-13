<?php

namespace App\Http\Controllers;

use App\Models\Bilhete;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function generatePdf(){
        $bilhetes= Bilhete::all();
        $data = [
            'title'=> 'Bilhete',
            'data'=> date('d/m/y'),
            'bilhetes'=> $bilhetes
        ];

        $pdf = Pdf::loadView('site.bilheteria.generate-bilhetePdf', $data);
        return $pdf->download('generate-pdf.pdf');
    }
}
