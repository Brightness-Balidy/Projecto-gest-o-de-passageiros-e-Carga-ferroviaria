<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;
use App\Models\Encomenda;

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
