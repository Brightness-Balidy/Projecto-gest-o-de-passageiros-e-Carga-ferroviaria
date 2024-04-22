
<style>
  #create{
    height: 53%;
  }
</style>
<div id="create" class="modal rounded">
   
  <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">people</i> Nova viagem</h4>

      <form action="{{route('site.viagem.store')}}" method="POST" class="col s12" >
        <div class="row mt-5">
          <div class="input-field col s6">
            @csrf
            <input name="data_partida" class="datepicker" id="fir" type="date">
            <label for="data_partida">data partida</label>
          </div>
          <div class="input-field col s6 ">
            <input name="hora_partida" class="datepicker" type="time">
            <label for="hora"> hora partida </label>
          </div>
        </div>
          <div class="input-field col s6 ">
          <select aria-placeholder="partida" name="local_partida" id="local_partida" >
            @foreach ($destinos as $destino)
            <option value="{{$destino->id}}">{{$destino->nome}}</option>
            @endforeach
          </select>
          <label for="local_partida">local partida</label>
          </div>
        <div class="input-field col s6 select2">
        <select name="destino_id" id="destino_id">
          @foreach ($destinos as $destino)
          <option value="{{$destino->id}}">{{$destino->nome}}</option>
          @endforeach
        </select>
          <label for="destino">destino</label>
        </div>
       
         
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