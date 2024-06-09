<?php

namespace App\Http\Controllers;

use App\Models\Bilhete;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $bilhetes= Bilhete::all();
        return view('site.clientes', compact('clientes','bilhetes'));
    }

    public function search(Request $request){
        $search= $request->input('search');

        $clientes = DB::table('clientes')->where('nome', 'like', '%' . $search . '%')->get();

        return view('site/clientes', compact('clientes','search'));
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
    // $cliente = $request->input(['nome, sobrenome, contacto']);
    public function store(Request $request)
    {
            
        //gerarndo numeros aleatorios para o Barcode
        $number = mt_rand(1000000000, 9999999999);
        if($this->clienteCodigoExiste($number)){
            $number = mt_rand(1000000000, 9999999999);
        }

        $request['codigo']= $number;
        Cliente::create($request->all());
        return redirect(route('site.clientes'))->with('sucesso','cliente cadastrado com sucesso!');
    }

    public function clienteCodigoExiste($number){
        return cliente::whereCodigo($number)->exists();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente= Cliente::find($id);
        return redirect()->route(compact('cliente'), 'site.clientes');
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
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('site.clientes');
    }
}
