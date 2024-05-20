
<style>
  #create{
   height: 80%;
  }
</style>
<div id="create" class="modal rounded">
   
    <div class="modal-content bg-gradient-green">
        <h4><i class="material-symbols-outlined medium">package_2</i> Nova Encomenda</h4>
  
        <form action="{{route('site.encomendas.store')}}" method="POST" class="col s12" >
          <div class="row mt-5">
            <div class="input-field col s6">
              @csrf
              <select name="cliente_id" id="cliente_id">
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
              <select name="categoria_id" id="categoria_id" >
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->tipo}}</option>
                @endforeach
              </select>
              <label for="categoria">categoria</label>
            </div>
            <div class="input-field col s4 ">
              <select name="viagem_id" id="viagem_id" >
                @foreach($viagens as $viagem)
                <option value="{{$viagem->id}}">{{$viagem->destino->nome}}</option>
                @endforeach
              </select>
              <label for="viagem">viagem</label>
            </div>
              <div class="input-field col s4 ">
                <select name="estado" id="estado" >
                  <option value="entregue">entregue</option>
                  <option value="pendente">em curso</option>
                </select>
                <label for="estado">estado</label>
            </div>
         </div>
            
          <div class="input-field col s6 select2">
          <select name="consignatario" id="consignatario">
            <option value="857055975">857055975</option>
          </select>
          <label for="contacto consignatário">contacto consignatário</label>
          </div>
          <div class="input-field col s6">
            <select name="usuario_id" id="usuario_id">
              <option value="{{auth()->user()->id}}">{{auth()->user()->nome}}</option>
            </select>
            <label for="usuario">usuario</label>
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