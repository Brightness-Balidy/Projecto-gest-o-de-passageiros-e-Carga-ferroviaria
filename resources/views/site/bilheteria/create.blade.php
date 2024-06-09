<style>
  #create{
    width: 50%;
    height: 420px;
  }
</style>
<div id="create" class="modal rounded">

    <div class="modal-content bg-gradient-green">
      <h4 ><i class="material-icons">local_activity</i> Novo bilhete</h4>
      <form action="{{route('site.bilhetes.store')}}" method="POST" class="col s12">
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
         <!-- <div class="input-field col ">
            <select aria-placeholder="" id="viagem" name="viagem">
              
                <option value=""></option>
        
            </select>
            <label for="partida">partida</label>
          </div>-->
        </div>
        <div class="row mt-2">
          <div class="input-field col">
            <select name="viagem_id" id="viagem_id">
              @foreach($viagens as $viagen)
                <option value="{{$viagen->id}}">{{$viagen->destino->nome}}</option>
              @endforeach
            </select>
            <label for="chegada">Chegada</label>
          </div>
          <div class="input-field col ">
            <select aria-placeholder="tipo" id="tipo" name="tipo">
              <option value="1ª Classe">1ª Classe</option>
              <option value="2ª Classe">2ª Classe</option>
              <option value="3ª Classe">3ª Classe</option>
            </select>
            <label for="classe">Carruagem
            </label>
          </div>
        </div>

        <div class="row mt-2">
         
        <div class="col 4">
          <div class="row">
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