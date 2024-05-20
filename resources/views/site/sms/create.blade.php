
<style>
  #create{
    height: 50%;
  }
</style>
<div id="createSMS" class="modal rounded">


    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">message</i> Criar notificação</h4>

      <form action="{{route('sendSMS')}}" method="GET" class="col s12" >
        <div class="row mt-5">
          <div class="input-field col s6 ">
            @csrf
            <select name="contacto" id="contacto">
              <option value="+258857055975">+258857055975</option>
            </select>
            <label for="nome">contacto</label>
          </div>
          <div class="input-field col s6">
            
            <select name="expedidor" id="expedidor">
              <option value="Alberto">Alberto</option>
              <option value="Ialda">Ialda</option>
            </select>
            <label for="sobrenome">encomenda</label>
          </div>
        </div>
        <div class="row mt-3">
          <div class="input-field col s6">
            <input type="text" id="descricao" name="descricao" class="validate">
            <label for="contacto">descrição</label>
          </div>          
        </div>
         
        <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">Enviar</a><br>
      </form>
    </div>
    
  </div>
  