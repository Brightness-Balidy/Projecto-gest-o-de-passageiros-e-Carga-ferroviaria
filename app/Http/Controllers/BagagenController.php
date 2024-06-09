<?php

namespace App\Http\Controllers;

use App\Models\Bagagen;
use App\Models\Bilhete;
use App\Models\Categoria;
use Illuminate\Http\Request;

class BagagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        $bilhetes = Bilhete::with('clientes')->get();
        $bagagens = Bagagen::with('categoria')->get();

        return         
        view(('site/bagagens'),compact('hello','categorias','bilhetes','bagagens'));
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
        $bagagem = $request->all();
        $bagagem = Bagagen::create($bagagem);
        return redirect()->route('site.bagagens'); 
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados= Bagagen::with('bilhetes','categoria')->get();
        $bagagen = Bagagen::find($id);
        return redirect()->route(compact('bagagen','dados'),'site.bagagens');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
