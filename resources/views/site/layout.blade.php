<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <style>
         #nav1 {
            width: 80%;
            height: 55px;
            margin-left:20%;
            
        }
        a:hover {
            text-decoration: none;
            color: #fff;
        }

        .list1 {
            /*display:inline-flex;*/
            list-style: none;
        }

        .list1 li {
            margin-left: 25px;
            display: inline-block;
        }

        .list1 li a {
            text-decoration: none;
            font-weight: bold;
            color: #fff;
        }

        #nav2 {
            background-color: #2d2c55;
            
        }

        /*side navbar test*/

        .menu {

            width: 25%;
            background-color: wheat;
        }

        #logo {
            color: wheat;
            font-size: 30px;
            letter-spacing: 4px;
            padding: 15;
            /*background-color: green;*/
        }
        #sidenav{
            height: 100%;
            width: 90%;
            
            display: flex;
            text-align: center;

        }

        .menu a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            letter-spacing: 2px;
            display: list-item;
            padding: 20px;
            text-align: justify;
            /* border-top: 1px solid black;
            border-bottom:1px solid black;*/
        }

        .menu a:hover {
            background-color: #8e8e89;
            transition: 0.5s;
            letter-spacing: 2px;
            /*text-transform: uppercase;*/
        }
        /*coisas da sidenav*/
        #onelist{
            top:20%;
            padding-bottom: 20%;
            padding-left: 75%;
        }
        #userlink{
            padding-top:80%;
        }
        #estender{
            height: 60px;
            margin-top: 0px;
        }
        #estender0{
            height: 60px;
            margin-top: 35px;
        }
        #estender1{
          height: 60px;  
        }
        #estender2{
          height: 60px;  
        }
        #estender3{
          height: 60px;  
        }
        #dimension{
            height: 110px;
            width: 100%;
            background-image: image('img/comboio.jpg');
        }
    </style>
</head>
<body class="bg-dark">
    <!--Data target do dropdown-->
    <!--not working-->
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="{{route('login.logout')}}">terminar sessão</a></li>
   </ul>

    <!--navbar principal-->

    <nav class="teal align-items-right" id="nav1">
        <div class="nav-wrapper container teal lightgreen-2">
            <a href="#" class="brand-logo center links " id="centrallogo">CFM</a>
            <ul id="nav-mobile" class="left " id="hellobut2">
                <li id="onelist"><a href="#!" id="homeli" onclick="esconder()"><i class="material-icons small">dehaze</i></a><a href="#!" id="homeli2" onclick="mostrar()"><i class="material-icons small">dehaze</i></a></li>
            </ul>

            @auth
            <ul id="nav-mobile" class="right">
                <li><a href="#" class="dropdown-trigger" data-target='dropdown1'> Olá, {{auth()->user()->nome}} <i class="material-symbols-outlined right">expand_more</i></a></li>
                
            </ul>
            @else
            <ul id="nav-mobile" class="right">
                <li><a href="{{route('login.login')}}" >Login</a></li>
            </ul>
            @endauth
            
        </div>

    </nav>

    
    <!--sidenav-->
        <ul id="slide-out" class="sidenav sidenav-fixed teal lightgreen-2">
            
            <li><a href="#" class="brand-logo center links " id="estender"><h4>CFM</h4></a></li>
            <li ><a href="{{route('admin.dashboard')}}" id="estender0"><i class="material-symbols-outlined small">dashboard</i>Dashboard</a></li>
            <li ><a href="{{route('site.encomendas')}}" id="estender1"><i class="material-symbols-outlined small" >box</i>Encomendas</a></li>
            <li><a href="{{route('site.clientes')}}" id="estender2"><i class="material-symbols-outlined small">people</i>Clientes</a></li>
            <li><a href="{{route('site.bilhetes')}}" id="estender2"><i class="material-symbols-outlined small">confirmation_number</i>Bilheteria</a></li>
            <li ><a href="{{route('site.viagem')}}" id="estender3"><i class="material-symbols-outlined small">train</i>Viagem</a></li> 
        </ul>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        <script>
            //dropdown
            var elemDrop = document.querySelectorAll('.dropdown-trigger');
            var instanceDrop = M.Dropdown.init(elemDrop,{
            coverTrigger: false,
            constrainWidth: false
       });
        </script>

       <script>
        let minhaSide = document.getElementById('slide-out');
        let lihome = document.getElementById('homeli');
        let lihome2 = document.getElementById('homeli2');
        let navPrincipal= document.getElementById('nav1');
        lihome2.style.display='none';
        let botao = document.getElementById('hellobut');
        let centro = document.getElementById('centrallogo');
        let botao2 = document.getElementById('hellobut2');

        function esconder(){
            //minhaSide.style.transition ='all 0.5s';
            //minhaSide.style.display='none';
            lihome.style.display ='none';
            lihome2.style.display ='block';
            navPrincipal.style.width = '100%';
            navPrincipal.style.marginLeft = '0px';
            minhaSide.style.transform = 'translateX(-80%)';
            minhaSide.style.transition = 'transform 0.4s ease';
            botao.style.paddingLeft = '0%';
            centro.style.paddingLeft ='0%';
            centro.style.transform = 'translateX(-100%)';
            centro.style.transition = 'transform 0.4s ease';
            botao2.style.paddingLeft ='0%'; 


        }
        function mostrar(){
            if(minhaSide.style.transform == 'translateX(-80%)'){

                //minhaSide.style.display = 'block';
                lihome2.style.display ='none';
                lihome.style.display ='block';
                //navPrincipal.style.width='80%';
                //navPrincipal.style.marginLeft='20%';
                minhaSide.style.transform = 'translateX(0%)';
                botao.style.paddingLeft='25%';
                botao2.style.paddingLeft ='6.25%';
                centro.style.paddingLeft='20%';
                centro.style.transform ='translateX(100%)';
                centro.style.transition ='transform 0.4s ease';
            }
        }
       
       </script>
    @yield('conteudo')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('js/chart.js')}}" ></script>
    <script src="{{asset('js/main.js')}}"></script>
    @stack('graficos')
    </body>
</html>