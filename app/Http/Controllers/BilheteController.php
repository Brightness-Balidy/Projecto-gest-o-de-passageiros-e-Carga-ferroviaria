<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilhete;
use App\Models\Cliente;
use App\Models\Destino;
use App\Models\Viagen;

class BilheteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bilhetes = Bilhete::with('cliente')->get();
        $clientes = Cliente::all();
        $viagens = Viagen::with('destino')->get();
        return view(('site/bilheteria'),compact('bilhetes','clientes','viagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //armazenar os bilhetes
        $bilhete= $request->all();
        $bilhete= Bilhete::create($bilhete);
        return redirect()->route('site.bilhetes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
