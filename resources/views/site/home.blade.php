@extends('site.layout')
@section('conteudo')

<style>
    /*body things*/
    #bodyDiv{
        background-color: brown;
        margin-left: 310px;
        margin-right: 50px;
        width: 75%;
        height: 700px;
        margin-top:2%;
        overflow-y:
    }
    #secondroww{
      width: 100%;
      height: 40%;
    }
</style> 
<!--a row que vai conter os elementos centrais-->
<!--cada elemento deve estar dentro da sua propria col-->
<div class="row container" id="bodyDiv"> 

    <div class="row"> 
    <div class="col s12 m6 ">

      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
    </div>
            
        </div>

        <div class="row container bg-success " id="secondroww">
          <ul class="collection">
            <div class="row m6 s12">

            @foreach ($destinos as $destino)
              <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">{{$destino-> nome}}</span>
                <p>{{$destino-> preco}} <br>
                  {{$destino -> distancia}}
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
            @endforeach

            </ul>
            <script>
              let instrucoes = document.getElementById('bodyDiv');

              instrucoes.style.backgroundColor ='green';
              instrucoes.style.visibility= "visible";
              navPrincipal.


            </script>
              

          </div>
          

    </div>
</div>
@endsection