<style>
    .modale{
        height:50%;
        width: 30%;
    }
</style>
<div id="delete-{{$bilhete->id}}" class="modal modale">
    <div class="modal-content bg-gradient-green">
      <h4><i class="material-icons">delete</i> Tem certeza?</h4>

            <p>tem certeza que deseja excluir bilhete de {{$bilhete->id}}</p>

            <button type="submit" class="modal-close waves-effect waves-green btn bg-gradient-green right">Cancelar</a><br>

        <form action="{{route('site.bilhetes.delete', $bilhete->id)}}" method="POST">
            @csrf
        <button type="submit" class=" waves-effect waves-green btn red right">Excluir</a><br>
        </form>
      
    </div>
    
  
  </div>
  