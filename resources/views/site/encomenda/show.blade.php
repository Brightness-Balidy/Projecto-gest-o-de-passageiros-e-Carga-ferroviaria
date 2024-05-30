<style>
    .modale{
        height:50%;
        width: 30%;
    }
</style>
<div id="show-{{$encomenda->id}}" class="modal modale">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">visibility</i> visualizar encomenda</h4>

            <p>visualização da encomenda {{$encomenda->id}}</p>
  
    </div>
    <div class="ml-4">
        <p>NOME: {{$encomenda->cliente->nome}}</p>
        <p>Categoria: {{$encomenda->categoria->tipo}}</p>
        <p>Viagem: {{$encomenda->viagem->local_partida}}</p>
        <p>Taxa:{{$encomenda->taxa}}</p>
        <p>Peso:{{$encomenda->peso}}</p>
    </div>
    <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">fechar</a><br>
  
  </div>
  