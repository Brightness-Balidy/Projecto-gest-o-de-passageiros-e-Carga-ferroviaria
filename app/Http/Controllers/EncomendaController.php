<?php

namespace App\Http\Controllers;

use App\Models\Bagagen;
use App\Models\Bilhete;
use App\Models\Categoria;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Encomenda;
use App\Models\Viagen;

class EncomendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Index";
        //$encomenda= Encomenda::all();
        //return dd($encomenda);
        $clientes= Cliente::all();
        $viagens= Viagen::with('destino')->get();
        $categorias=Categoria::all();
        $bilhetes= Bilhete::all();
        $encomendas= Encomenda::with(['cliente','categoria','viagem'])->get();
        return view(('site/encomendas'), compact('clientes','viagens','categorias','bilhetes','encomendas'));
        //return view('site/home');
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
        if($request['categoria_id']== 4){
            $request['taxa']= 30 * $request['peso'];

        }elseif($request['categoria_id']== 5){
            $request['taxa']= 25 * $request['peso'];

        }elseif($request['categoria_id']== 6){
            $request['taxa']= 50 * $request['peso'];

        }elseif($request['categoria_id']== 7){
            $request['taxa']= 20 * $request['peso'];
        }else{
            echo 'categoria inexistente';
        }
        
        //dd($request->all());

        $encomenda = $request->all();
        $encomenda = Encomenda::create($encomenda);
        return redirect()->route('site.encomendas'); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados= Encomenda::with('cliente','categoria')->get();
        $encomenda = Encomenda::find($id);
        return redirect()->route(compact('encomenda','dados'),'site.encomendas');
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
        $nome= Encomenda::with('cliente','categoria')->get();
        $encomenda= Encomenda::find($id);
        $encomenda-> delete();
        return  redirect()->route(compact('nome'),'site.encomendas');
    }
}
