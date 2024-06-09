<style>
    #createB{
        height: 400px;
        width: 50%;
    }
</style>
<div id="createB" class="modal rounded">
   
    <div class="modal-content bg-gradient-green">
        <h4><i class="material-symbols-outlined medium">package_2</i> Nova bagagem</h4>
  
        <form action="{{route('site.bagagen.store')}}" method="POST" class="col s12">
          <div class="row mt-5">
            <div class="input-field col s6">
              @csrf
              <select name="bilhete_id" id="bilhete_id">
                @foreach($bilhetes as $bilhete)
                <option value="{{$bilhete->id}}">{{$bilhete->cliente->nome}}</option>
                @endforeach
              </select>
              <label for="nome">nome</label>
            </div>
            </div>
            <div class="row mt-2">
              <div class="input-field col s4 ">
              <select name="categoria_id" id="categoria_id" >
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->tipo}}</option>
                @endforeach
              </select>
              <label for="categoria">categoria</label>
            </div>
            <div class="input-field col s4 ">
              <input type="number" name="peso" id="peso">
              <label for="peso">peso</label>
            </div>
              
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