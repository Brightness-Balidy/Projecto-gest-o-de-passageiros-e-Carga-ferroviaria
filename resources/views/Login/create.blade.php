@if($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
@endif
 
<form action="{{route('users.store')}}" method="POST">
@csrf
Nome: <br> <input type="text" name="nome"><br>
Sobrenome: <br> <input type="text" name="sobrenome"><br>
Email: <br> <input type="email" name="email"><br>
Password:<br> <input type="password" name="password">
<button type="submit">cadastrar</button>
</form>