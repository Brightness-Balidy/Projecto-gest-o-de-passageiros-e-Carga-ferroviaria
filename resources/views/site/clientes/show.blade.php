<style>
    .modale{
        height:420px;
        width: 30%;
    }
</style>
<div id="show-{{$cliente->id}}" class="modal modale">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">visibility</i> Visualizar Cliente</h4>

            <p>visualização do cliente {{$cliente->nome}}</p>
  
    </div>
    <div class="ml-4">
        <p>NOME: {{$cliente->nome}}</p>
        <p>sobrenome: {{$cliente->sobrenome}}</p>
        <p>Contacto: {{$cliente->contacto}} </p>
        <p>codigo: {!! DNS1D::getBarcodeHTML("$cliente->codigo", 'UPCA',2,50) !!}
            p - {{$cliente->codigo}}</p>
    </div>
    <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green mr-2 right">fechar</a><br>
  
  </div>
  