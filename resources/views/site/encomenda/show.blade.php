<style>
    .modale{
        height:400px;
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
        <p>Taxa: {{$encomenda->taxa}} Mt</p>
        <p>Peso: {{$encomenda->peso}} Kg</p>
    </div>
    <button type="submit"  class="modal-close waves-effect waves-green btn bg-gradient-green mr-2 right">fechar</a><br>
  
  </div>
  