<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;
class SiteController extends Controller
{
    public function index()
    {
        $destinos = Destino::all();
        return view('site.home', compact('destinos'));
    }
}
