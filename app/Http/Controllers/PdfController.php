<?php

namespace App\Http\Controllers;

use App\Models\Bilhete;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
class PdfController extends Controller
{
   public function generatePdf(){
        $bilhetes= Bilhete::all();
        $data = [
            'title'=> 'Bilhete',
            'data'=> date('d/m/y'),
            'bilhetes'=> $bilhetes
        ];

        $pdf = Pdf::loadView('site/bilheteria/generate-bilhetePdf', $data);
        return $pdf->download('generate-pdf.pdf');
    }
    /*
public function generatePdf(){
    
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Hello, World</h1>');
    return $pdf->download();
    }*/
}
