<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilhete;
use App\Models\Cliente;
use App\Models\Destino;
use App\Models\Viagen;
use Illuminate\Support\Facades\DB;

class BilheteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bilhetes = Bilhete::with(['cliente','viagem'])->get();
        $clientes = Cliente::all();
        $viagens= Viagen::with('destino')->get();
        $destinos = Destino::all();
        return view(('site/bilheteria'),compact('bilhetes','clientes','viagens','destinos'));
    }

    //metodo para procurar registros
        public function search(Request $request){
            $search = $request->input('search');
            $clientes=Cliente::all();
            $viagens= Viagen::all();
            $destinos= Destino::all();
            
        $bilhetes = DB::table('bilhetes')->where('id_cliente','like','%' . $search . '%');
               
            return view(('site/bilheteria'),compact('bilhetes', 'search', 'clientes', 'viagens','destinos'));
                
                   
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
        $nome= Bilhete::with('cliente','viagem')->get();
        $bilhete = Bilhete::find($id);
        return redirect()->route(compact('bilhete','nome'), 'site.bilhetes');

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
        $bilhete = Bilhete::find($id);
        $bilhete->delete();
        return redirect()->route('site.bilhetes');
    }
    
}
