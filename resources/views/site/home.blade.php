@extends('site.layout')
@section('conteudo')

<style>
  body{
    background-color: darkslategrey;
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
    
</style> 
<!--a row que vai conter os elementos centrais-->
<!--cada elemento deve estar dentro da sua propria col-->
<div class= "row container rowCont" id="rowCont" >
  <div class="row">
    <div class="col s4"><i class="material-icons large">flash_on</i><p>este sistema é extremamente fácil de usar, e é de tamanha eficiencia</p></div>
    <div class="col s4"><i class="material-icons large">people</i><p>é Um sistema que foi desenhado para uso entre vários usuários da equipe de trabalho</p></div>
    <div class="col s4"><i class="material-icons large">work</i><p>Tem o objectivo também de ajudar a manter o fluxo de trabalho constante para que não haja situações em que o trabalho deve ser interompido</p></div>
  </div>

  <div class="row">
  @foreach ($destinos as $destino)
  <div class="col s12 m4">
      <div class="card">
          <div class="card-image">
            <img src="{{$destino->imagem}}">
            
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
              <span class="card-title">{{$destino-> nome}}</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ex sed in quaerat ducimus? Consectetur ipsa asperiores adipisci dolore. Perspiciatis..</p>
          </div>
        </div>
  </div>
  @endforeach 
</div>
  <div class="col ">

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
            
              

@endsection