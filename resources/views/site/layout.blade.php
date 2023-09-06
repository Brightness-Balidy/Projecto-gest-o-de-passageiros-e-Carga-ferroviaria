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

    <style>
         #nav1 {
            width: 80%;
            height: 55px;
            margin-left:20%;
            
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
        }
    </style>
</head>
<body>
    <!--navbar principal-->

    <nav class="teal align-items-right" id="nav1">
        <div class="nav-wrapper container teal  lightgreen-2">
            <a href="#" class="brand-logo center">CFM</a>
            <ul id="nav-mobile" class="right">
                <li><a href="#" id="homeli" onclick="esconder()">HOME</a><a href="#" id="homeli2" onclick="mostrar()">home</a></li>
            </ul>
            
        </div>

    </nav>

    <!--sidenav-->
        <ul id="slide-out" class="sidenav sidenav-fixed teal lightgreen-2">
            <li id="onelist"><a href="#!">Home</a></li>
            <li ><a href="#!">Home</a></li>
            <li ><a href="#!">Home</a></li>
            <li ><a href="#!">Home</a></li>
        </ul>

       <script>
        let minhaSide = document.getElementById('slide-out');
        let lihome = document.getElementById('homeli');
        let lihome2 = document.getElementById('homeli2');

        lihome2.style.display='none';
        function esconder(){
            
            minhaSide.style.display='none';
            lihome.style.display ='none';
            lihome2.style.display='block';

        }
        function mostrar(){
            if(minhaSide.style.display == 'none'){
                minhaSide.style.display = 'block';
                lihome2.style.display ='none';
                lihome.style.display ='block';

            }
        }
       
        
       </script>
    @yield('conteudo')
    </body>
</html>