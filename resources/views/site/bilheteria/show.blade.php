<style>
    .modale{
        height:400px;
        width: 30%;
    }
    p{
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }
</style>
<div id="show-{{$bilhete->id}}" class="modal modale">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">visibility</i> visualizar Bilhete</h4>

            <p>visualização do bilhete de {{$bilhete->cliente->nome}}</p>
  
    </div>
    <div class="ml-4">
        <p>NOME: {{$bilhete->cliente->nome}}</p>
        <p>Carruagem: {{$bilhete->tipo}}</p>
        <p>Viagem: {{$bilhete->viagem->local_partida}} </p>
        <p>taxa: {{$bilhete->viagem->preco}} Mt</p>
    </div>
    <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green mr-2 mt-2 right">fechar</a><br>
  
  </div>
  