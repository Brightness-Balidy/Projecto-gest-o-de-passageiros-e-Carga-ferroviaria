<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
       
       /* #loginForm{
            background-color: white;
            margin-top:20%;
            margin-left:35%;
            width:30%;
        }*/
        body{
            background-color: green;
        }
        #nav1{
            background-color: #EBEBBA;
        }
        #linha-vertical{
            width:20px;
            height: 30px;
            background-color: red;
        }
        #divLog2{
            height: 50px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!--barra de navegacao-->
    <nav id="nav1" class="navbar">
        <div id="main" class="container  ">
            <a href="" class="navbar-brand"> CFM</a>
            <span class="navbar-text">portuguese</span>
        </div>
    </nav>
    <!--formulario de login-->
    <div id="divLog2" class="col "></div>
    <div id="loginForm" class="container mt-5 ">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-4 bg-light border rounded-3 border-info">
                <h3 class="text-center mt-2">Login</h3>

                <!--caso ocorra algum erro exibimos a mensagem na tela-->
                @if ($mensagem = Session::get('erro'))
                {{ $mensagem }}
                @endif

                <!---listar todos os erros que ocorrerem e exibir-->
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                @endif
                <form action= "{{route('login.auth')}}" method="POST" class="p-4 p-md-5 border rounded-3">
                    
                    <div class="form-floating mb-3 mt-4">
                        @csrf
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email">
                        <label for="inputEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password">
                        <label for="inputPassword">Password</label>
                        <p>
                            <small class="text-muted">
                                <a href="">esqueci-me da senha</a>
                            </small>
                        <p>
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Entrar</button>
                    </div>
                </form>
            </div>
           
            
        </div>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>