<style>
    .modale{
        height:50%;
        width: 30%;
    }
</style>
<div id="show-{{$cliente->id}}" class="modal modale">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">visibility</i> visualizar encomenda</h4>

            <p>visualização da encomenda {{$cliente->id}}</p>
  
    </div>
    <div class="ml-4">
        <p>NOME: {{$cliente->nome}}</p>
        <p>sobrenome: {{$cliente->sobrenome}}</p>
        <p>Contacto: {{$cliente->contacto}} </p>
        <p>codigo: {!! DNS1D::getBarcodeHTML("$cliente->codigo", 'UPCA',2,50) !!}
            p - {{$cliente->codigo}}</p>
    </div>
    <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">fechar</a><br>
  
  </div>
  