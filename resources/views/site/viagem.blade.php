@extends('site.layout')
@section('title','conteudo')
@section('conteudo')
<style>
    body{
      /*background-color: darkslategrey;*/
    }
      /*body things*/
      .rowCont{
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
      .icones{
        padding-left: 35%;
      }
  
      /*seccao de clientes*/
      #botaoNovo{
        padding-left: 50%;
      }
      #cardPannel{
          height: 90%;
      }
  
      #iconPackage{
          padding-bottom: 20%;
          padding-top: 10%;
          
      }
      #iconPackage2{
          margin-left: 30%;
          margin-top: 5%; 
      
      }
      
  
      
  </style> 
  <!--a row que vai conter os elementos centrais-->
  <!--cada elemento deve estar dentro da sua propria col-->
  <div class= "row container rowCont" id="rowCont" >
  
    <!--seccao de informacao sobre o sistema-->
    <div class="row">
      <div class="col s4"><i class="material-icons large icones">flash_on</i><p class="center-align">este sistema é de uso fácil e extremamente intuitivo, e permite obter eficiencia no trabalho</p></div>
      <div class="col s4"><i class="material-icons large icones" >people</i><p class="center-align" >é Um sistema que foi desenhado para uso entre vários usuários da equipe de trabalho</p></div>
      <div class="col s4"><i class="material-icons large icones">work</i><p class="center-align">Tem o objectivo também de ajudar a manter o fluxo de trabalho constante para que não haja situações em que o trabalho deve ser interompido</p></div>
    </div>
  <!--uma nova row deve ser criada para fazer uma fila de elementos, cada elemento deve estar dentro da sua propria col-->
  
  <!--seccao de cards de destinos-->
    <div class="row">

      @foreach ($destinos as $destino)
          
    <div class="col s4">
    <div class="card bg-dark">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p><a href="#">{{$destino->nome}}</a> {{$destino->distancia}}KM</p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
    <!--seccao de cadastro de clientes-->
    <div class="row">
      <div class="col s12">
        <div class="card bg-gradient-green" id="cardPannel">
          <div class="card-content white-text">
            <!--parte left do card-->
            <div class="row">
                <div class="col s6">
            <span class="card-title left-align " id="cadastroTitulo"><h4><b>É necessário fazer o cadastro das viagens </b></h4></span>
        </div>
            <div class="col s6" id="botaoNovo"><a class="waves-effect waves-light btn-large pulse" >viagens</a></div>
    </div>
  
        <!--parte right do card-->
          <div class="row">
            <div class="col s6">
                <h6 class="">para que um bilhete possa ser gerado, é importante que as viagens sejam cadastradas. o ponto de partida de todas as viagens é Beira por padrão.</h6>
            </div>
            <div class="col s6">
                <i class="material-symbols-outlined medium " id="iconPackage2" >
                    person
                </i>
                <i class="material-symbols-outlined large " id="iconPackage" >
                person
                </i>
                <i class="material-symbols-outlined medium">
                    person
                </i>
            </div>
            
        </div>
         <!--estrutura de accao-->

    <div class="fixed-action-btn">
      <a id="menu" class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
        <i class="large material-icons">add</i>
      </a>
    </div>

     <!-- Tap Target Structure -->
<div class="tap-target" data-target="menu">
  <div class="tap-target-content">
    <h5>Title</h5>
    <p>A bunch of text</p>
  </div>
</div>
@include('site.viagem.create')
            </div>
          
        </div>
      </div>
    </div>
    </div>
  
          
          <!--<div class="row  bg-success" id="secondroww">-->
           <!-- <ul class="collection">
             
                  <a href="#!" class="secondary-content"></a>
                </li>-->
             
              
    <script>
      $(document).ready(function(){
         $('.tap-target').tapTarget();
       });
     </script>
    
  @endsection
 