<div id="create" class="modal rounded">


    <div class="modal-content bg-gradient-green">
      <h4 ><i class="material-icons">people</i> Novo bilhete</h4>

      <form action="{{route('site.bilhetes.store')}}" method="POST" class="col s12" >
        <div class="row mt-5">
          <div class="input-field col s4 ">
            @csrf

            <select aria-placeholder="" id="id_cliente" name="id_cliente">
             @foreach ($clientes as $cliente)
              <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
            @endforeach
            </select>
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col ">
            <select aria-placeholder="" id="sobrenome" name="sobrenome">
              @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->sobrenome}}</option>
              @endforeach
            </select>
            <label for="sobrenome">Sobrenome</label>
          </div>
        </div>

        <div class="row mt-2">
          <div class="input-field col ">
            <select aria-placeholder="partida" id="partida" name="partida">
              @foreach($viagens as $viagem)
                <option value="{{$viagem->id}}">{{$viagem->local_partida}}</option>
              @endforeach
            </select>
            <label for="partida">partida</label>
          </div>
          <div class="input-field col">
            <select name="viagem" id="viagem">
              @foreach($viagens as $viagem)
                <option value="{{$viagem->id}}">{{$viagem->destino->nome}}</option>
              @endforeach
            </select>
            <label for="chegada">Chegada</label>
          </div>
          <div class="input-field col ">
            <select aria-placeholder="tipo" id="tipo" name="tipo">
              <option value="1">1ª Classe</option>
              <option value="2">2ª Classe</option>
              <option value="3">3ª Classe</option>
            </select>
            <label for="classe">Classe
            </label>
          </div>
        </div>

        <div class="row mt-2">
          <div class="input-form col s4">
            <label for="assento">assento</label>
            <input type="number" id="assento" name="assento">
            
          </div>
          <div class="input-field col s4">
            <select name="contacto" id="contacto">
              @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->contacto}}</option>
              @endforeach
            </select> 
          <label for="contacto">contacto</label>
        </div>
        <div class="col 4">
          <p>
            <label for="possui_bagagem">possui bagagem</label>
            <label>
              <input name="group1" type="radio" checked />
              <span>sim</span>
            </label>
          </p>
          <p>
            <label>
              <input name="group1" type="radio" />
              <span>não</span>
            </label>
          </p>
        </div>
         
        </div>
        <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right mt-3">Cadastrar</a><br>
      </form>
    </div>
    
  </div>
  <script>
  document.addEventListener('DomContentLoaded', function(){
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });
</script>