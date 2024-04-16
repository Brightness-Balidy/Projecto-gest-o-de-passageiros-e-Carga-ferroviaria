<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Bagagem;
use App\Models\Bilhete;
use App\Models\Categoria;

class BagagemController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagagems = Bagagem::all();
        $bilhetes = Bilhete::with('cliente')->get();
        $categorias = Categoria::all(); 
        return view(('site.bagagem.bagagem_create'),compact('bagagems','bilhetes','categorias'));
        
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
        //armazena os dados de bagagem 
        $bagagem = $request->all();
        $bagagem = Bagagem::create($bagagem);
        return redirect()->route('site.encomendas')->with('sucesso','encomenda cadastrada com sucesso'); //redireccionar para index de controller encomenda para que possa exibir a mensagem*/
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
