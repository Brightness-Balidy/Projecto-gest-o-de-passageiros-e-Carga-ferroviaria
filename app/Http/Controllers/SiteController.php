<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;
use App\Models\Encomenda;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index()
    {


       $destinos = Destino::all();
        return view('site.home', compact('destinos'));
    }

    public function encomenda(){
        $encomendas = Encomenda::all();
        return view('site.encomendas', compact('encomendas'));
    }
}
