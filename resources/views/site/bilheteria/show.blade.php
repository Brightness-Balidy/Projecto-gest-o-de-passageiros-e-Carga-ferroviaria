<style>
    .modale{
        height:50%;
        width: 30%;
    }
</style>
<div id="show-{{$bilhete->id}}" class="modal modale">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">visibility</i> visualizar Bilhete</h4>

            <p>visualização do bilhete do {{$bilhete->cliente->nome}}</p>
  
    </div>
    <div class="ml-4">
        <p>NOME: {{$bilhete->cliente->nome}}</p>
        <p>Carruagem: {{$bilhete->tipo}}</p>
        <p>Viagem: {{$bilhete->viagem->local_partida}} </p>
        <p>taxa: {{$bilhete->viagem->preco}}</p>
    </div>
    <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">fechar</a><br>
  
  </div>
  