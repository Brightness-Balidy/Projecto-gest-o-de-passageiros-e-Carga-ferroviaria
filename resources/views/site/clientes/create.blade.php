
<style>
  #create{
    height: 400px;
    width: 35%;
  }
</style>
<div id="create" class="modal rounded">



    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">people</i> Novo cliente</h4>

      <form action="/post" method="POST" class="col s12" >
        <div class="row mt-5">

          <div class="input-field col s6 ">
            @csrf
            <input id="nome" name="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input id="sobrenome" name="sobrenome" type="text" class="validate">
            <label for="sobrenome">Sobrenome</label>
          </div>
        </div>
        <div class="row mt-3">
          <div class="input-field col s6">
            <input type="text" id="contacto" name="contacto" class="validate">
            <label for="contacto">Contacto</label>
          </div>          
        </div>
         
        <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">Cadastrar</a><br>
      </form>
    </div>
    
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
  <script>
     $('#contacto').mask('(00) 000-0000');
  </script>
  