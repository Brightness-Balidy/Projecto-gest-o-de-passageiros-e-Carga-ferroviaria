
<style>
  #create{
    height: 50%;
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
  