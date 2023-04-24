<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>encomendas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        #nav1 {
            width: 100%;
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
        .main {
            width: 100%;
            height: 100vh;
            display: flex;
            text-align: center;
        }

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

        /*body things*/
        #bodyDiv {
            width: 100%;
        }
    </style>
</head>

<body>
    <nav id='nav1' class="navbar navbar-expand-lg bg-success">
        <div id='main' class="container">
            <a href="" class="navbar-brand">CFM</a>
            <span class="navbar-text float-right">portuguese</span>
        </div>
    </nav>
    <nav class="navbar navbar-expand" id="nav2">

        <ul class="list1">
            <li><a href="">
                    <h5>HOME</h5>
                </a></li>
            <li><a href="">
                    <h5>Encomendas</h5>
                </a></li>
            <li><a href="">
                    <h5>Bilheteira</h5>
                </a></li>
            <li><a href="">
                    <h5>Bagagens</h5>
                </a></li>
        </ul>

    </nav>

    <div class="main">
        <div class="menu bg-dark">
            <h2 id="logo"></h2>
            <a href="#"><ion-icon class="pr-3" name="home-outline"></ion-icon><span class="ms-3"></span>Home</a>
            <a href="#"><ion-icon class="pr-3" name="ticket-outline"></ion-icon><span></span>Bilheteria</a>
            <a href="#"><span class="material-symbols-outlined pr-3">
                    package
                </span>Encomendas</a>
            <a href="#"><span class="material-symbols-outlined pr-3">
                    luggage
                </span>Bagagens</a>
            <a href="#"><span class="material-symbols-outlined pr-3">
                    summarize
                </span>Relatórios</a>
           
        </div>

        <div class="bg-dark mt-4 ml-4 mr-4 mb-4" id="bodyDiv">
            <div id="centerbody" class="bg-info mt-4 mr-4 ml-4"></div>
            <table class="table table-stripped">
                <tr>

                </tr>
                <tr>

                </tr>


            </table>
        </div>

    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>