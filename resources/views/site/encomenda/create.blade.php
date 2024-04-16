<div id="create" class="modal rounded">
   
    <div class="modal-content bg-gradient-green">
        <h4><i class="material-icons">people</i> Nova viagem</h4>
  
        <form action="" method="POST" class="col s12" >
          <div class="row mt-5">
            <div class="input-field col s6">
              @csrf
              <select name="nome" id="nome">
                @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                @endforeach
              </select>
              <label for="nome">nome</label>
            </div>
            <div class="input-field col s6"> 
              <input type="number" id="peso" name="peso">
              <label for="peso">peso</label>
            </div>
            </div>
            <div class="row mt-2">
              <div class="input-field col s4 ">
              <select name="categoria" id="categoria" >
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
              </select>
              <label for="categoria">categoria</label>
            </div>
            <div class="input-field col s4 ">
              <select name="viagem" id="viagem" >
                @foreach($viagens as $viagem)
                <option value="{{$viagem->id}}">{{$viagem->destino->nome}}</option>
                @endforeach
              </select>
              <label for="viagem">viagem</label>
            </div>
              <div class="input-field col s4 ">
                <select name="estado" id="estado" >
                  <option value="entregue">entregue</option>
                  <option value="pendente">pendente</option>
                </select>
                <label for="estado">estado</label>
            </div>
         </div>
            
           
          <div class="input-field col s6 select2">
          <select name="destino_id" id="destino_id">
           
            <option value=""></option>
         
          </select>
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