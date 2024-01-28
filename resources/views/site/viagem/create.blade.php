<div id="create" class="modal rounded">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">people</i> Nova viagem</h4>

      <form action="{{route('site.viagem.store')}}" method="POST" class="col s12" >
        <div class="row mt-5">

          <div class="input-field col s6 ">
            @csrf
            <input name="data" class="datepicker" type="datetime-local">
            <label for="nome"></label>
          </div>
          <div class="input-field col s6">
            <input id="local_partida" name="local_partida" type="text" class="validate">
            <label for="sobrenome">Partida</label>
          </div>
        </div>
        <select name="destino_id" id="destino_id">
          @foreach ($destinos as $destino)
          <option value="{{$destino->id}}">{{$destino->nome}}</option>
          @endforeach
        </select>
         
        <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">Cadastrar</a><br>
      </form>
    </div>
    
  </div>
  <script>
  document.addEventListener('DomContentLoaded', function(){
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });
</script>