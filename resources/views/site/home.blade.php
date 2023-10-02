@extends('site.layout')
@section('conteudo')

<style>
  body{
    background-color: darkslategrey;
  }
    /*body things*/
    .bodyDiv{
       /* background-color: brown;*/
        margin-left: 310px;
        margin-right: 50px;
        width: 75%;
        height: 700px;
        margin-top:2%;
        
    }
    #secondroww{
      width: 100%;
      height: 40%;
    }
    
</style> 
<!--a row que vai conter os elementos centrais-->
<!--cada elemento deve estar dentro da sua propria col-->
<div class="row container bg-warning bodyDiv" > 

     
    <!--<div class="col s12 m6 ">

      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Bem Vindo</span>
          <p>Este é o sistema ferroviario de gestão de passageiros e carga, tanto acompanhada como bagagens não acompanhadas.<br>hehehe</p>
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
    -->
    @foreach($destinos as $destino)
        
        <div class="col s12 m4">
            <div class="card small">
              <div class="card-image">
                <img src="{{$destino->imagem}}">
                <span class="card-title">{{$destino-> nome}}</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>
          @endforeach
        
        </div>
        </div>
        
        <!--<div class="row  bg-success" id="secondroww">-->
         <!-- <ul class="collection">
            @foreach ($destinos as $destino)
            <div class="row m4 s12 d-inline" id="destinys">
              <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">{{$destino-> nome}}</span>
                <p>{{$destino-> preco}} mts <br>
                  {{$destino -> distancia}} Km
                </p>
                <a href="#!" class="secondary-content"></a>
              </li>
            @endforeach

            

            </ul>-->
            
            <!--DIVS DOS DESTINOS-->
            

              
          </div>

          
          
         <!-- </div>-->
            
              

@endsection