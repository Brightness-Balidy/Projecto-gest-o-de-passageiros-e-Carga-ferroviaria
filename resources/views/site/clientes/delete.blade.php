<div id="delete-{{$cliente->id}}" class="modal">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">delete</i> Tem certeza?</h4>

      

            <p>tem certeza que deseja excluir{{$cliente->nome}}?</p>
          

            <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">Cancelar</a><br>

        <form action="{{route('site.delete', $cliente->id)}}" method="POST">
            @method('DELETE')
            @csrf
        <button type="submit" class=" waves-effect waves-green btn red right">Excluir</a><br>
        </form>
      
    </div>
    
  
  </div>
  