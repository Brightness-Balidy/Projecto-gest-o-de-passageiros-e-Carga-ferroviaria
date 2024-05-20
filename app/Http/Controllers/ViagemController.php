<?php

namespace App\Http\Controllers;
use App\Models\Viagen;
use App\Models\Destino;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $destinos = Destino::all();
        return view(('site.viagem'),compact('destinos') );
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
        //armazena os dados de uma viagem
        
         /*$kmDestino = $request['destino_id'];
         $kmPartida = $request['local_partida'];
         $kmFinal = $kmDestino - $kmPartida;
         $precoFinal = (405 * $kmFinal)/335; */

         //muanza
         /*
        if($request['local_partida'] == 1 && $request['destino_id'] == 2){
            $request['preco']= 194 -126;
            $request['preco']= (405 * $request['preco'])/335;

        }elseif($request['local_partida']==1 && $request['destino_id']==3){
            $request['preco']= 335 - 126;
            $request['preco']=(405 * $request['preco'])/335;

        }elseif($request['local_partida']==1 && $request['destino_id']== 4){
            $request['preco']= 126 - 0;
            $request['preco']= (405 * $request['preco'])/335;
            //inhaminga
        }elseif($request['local_partida']==2 && $request['destino_id']==1){
            $request['preco']= 194 - 126;
            $request['preco']= (405 * $request['preco'])/335;

        }elseif($request['local_partida']==2 && $request['destino_id']==3){
            $request['preco']=  335 - 194;
            $request['preco']= (405 * $request['preco'])/335;

        }elseif($request['local_partida']==2 && $request['destino_id']== 4){
            $request['preco']= 194 - 0;
            $request['preco']= (405 * $request['preco'])/335;

            //marromeu 
        }elseif($request['local_partida']==3 && $request['destino_id']== 1){
            $request['preco']= (126 - 335)/-1;
            $request['preco']= (405 * $request['preco'])/335;
        }elseif($request['local_partida']==3 && $request['destino_id']==2){
            $request['preco']= (194-335)/-1;
            $request['preco']= (405 * $request['preco'])/335;
        }elseif($request['local_partida']==3 && $request['destino_id']==4){
            $request['preco']= 335-0;
            $request['preco']= (405 * $request['preco'])/335;
            */
            //beira
        if($request['local_partida']== 'Beira' && $request['destino_id']==1){
            $request['preco']= 126-0;
            $request['preco']= (405 * $request['preco'])/335;
        }elseif($request['local_partida']== 'Beira' && $request['destino_id']==2){
            $request['preco']= 194-0;
            $request['preco']= (405 * $request['preco'])/335;
        }elseif($request['local_partida']== 'Beira' && $request['destino_id']==3){
            $request['preco']= 335-0;
            $request['preco']= (405 * $request['preco'])/335;
        }else{
            echo 'viagem invalida';
        }

        
       $viagem = $request->only(['local_partida','destino_id','preco']);
        $viagem = Viagen::create($viagem);
       // dd($viagem);
        
        return redirect()->route('site.viagem')->
        with('sucesso','viagem cadastrada com sucesso');
        }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
