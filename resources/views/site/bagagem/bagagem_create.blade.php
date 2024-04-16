<div id="bagage" class="modal rounded">
    <style>
     
   
    </style> 
    <div class="modal-content bg-gradient-green">
        <h4 bg-warning><i class="material-icons">people</i>Nova bagagem</h4>
  
        <form action="{{route('site.bagagem.store')}}" method="POST" class="col s12" >
          <div class="row mt-5">
            <div class="input-field col s6">
              @csrf
              <select name="bilhete" class="validate" id="bilhete">
                @foreach($bilhetes as $bilhete)
                <option value="{{$bilhete->id}}">{{$bilhete->cliente->nome}}</option>
                @endforeach
              </select>
              <label for="bilhete">bilhete</label>
            </div>
            <div class="input-field col s6 ">
              <select name="categoria" id="categoria">
                @foreach($categorias as $categoria)
                <option value="categoria">Generos frescos</option>
                @endforeach
              </select>
              <label for="categoria">Categoria</label>
            </div>
          </div>
            <div class="input-field col s6 ">
            <input id="peso" name="peso" class="validate" type="number">
            <label for="peso">peso</label>
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