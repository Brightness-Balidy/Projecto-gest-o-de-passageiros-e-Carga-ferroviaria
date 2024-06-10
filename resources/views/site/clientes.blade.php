@extends('site.layout')
@section('title', 'Clientes')
@section('conteudo')


<style>
    body{
       /* background-color: darkslategrey;*/
    }
    .rowCont{
       /* background-color: brown;*/
        margin-left: 310px;
        margin-right: 50px;
        width: 75%;
        height: 700px;
        margin-top:2%;
        
    }
   
    /*icones de encomenda*/
   
    
    #cardPannel{
        height: 80%;
    }

    #iconPackage{
        padding-bottom: 20%;
        padding-top: 10%;
        
    }
    #iconPackage2{
        margin-left: 30%;
        margin-top: 5%; 
    
    }

    #botaoNovo{
        padding-left: 50%;
    }
    /* crud part*/
    #tabelaCrd{
        width:100%;
    }
    #ajustarRow{
        width: 100%;
    }
</style>

<div class="row container rowCont">
    <div class="row">
        <div class="col s12">
            <div class="card bg-gradient-green darken-1" id="cardPannel">
              <div class="card-content white-text">
                <!--parte left do card-->
                <div class="row">
                    <div class="col s6">
                <span class="card-title "><h4><b>Espaço de Criação de Clientes</b></h4></span> 
            </div>
                <div class="col s6" id="botaoNovo"><a href="" class="waves-effect waves-light btn-large pulse " >Novo Cliente</a></div>
                
        </div>
            <!--parte right do card-->
            <div class="row">
                <div class="col s6">
                    <h6 class=" ">Este é o espaço de criação de clientes, para poder prestar os Serviços, é uma condição importante cadastrar os clientes</h6>
                </div>
                <div class="col s6  ">
                    <i class="material-symbols-outlined medium" id="iconPackage2" >
                        people
                    </i>
                    <i class="material-symbols-outlined large" id="iconPackage" >
                    people
                    </i>
                    <i class="material-symbols-outlined medium">
                        people
                    </i>
                </div>
                
            </div>
                </div>
              
            </div>
          </div>
        </div>
    
      <!--<div class="row">
        
        <a class="waves-effect waves-light btn modal-trigger" href="#modal11">Modal</a>

        <div id="modal11" class="modal">
            <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
        </div>
          
    </div>-->
    <!--estrutura de accao-->

    <div class="fixed-action-btn">
        <a id="menu" class="btn-floating btn-large bg-gradient-green modal-trigger pulse" href="#create">
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
@include('site.clientes.create')
       
        <!--a estrutura do crud-->
       
        <div class="row crud ">
            
                <div class="row titulo ">              
                  <h1 class="left">Clientes</h1>
                  <span class="right chip">{{$clientes->count()}} clientes cadastrados</span>  
                </div>
    
                <nav class="bg-gradient-green">
                  <div class="nav-wrapper">
                    <form action="/search" method="get">
                      <div class="input-field">
                        <input placeholder="Pesquisar..." id="search" name="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                      </div>
                    </form>
                  </div>
                </nav>     

        <div class="row" id="ajustarRow">
                <div class="card z-depth-4 registros " id="tabelaCrd" >
                <table class="table-hover">

                    <thead>

                      <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>  
                        <th scope="col">Nome</th>
                          
                          <th scope="col">Sobrenome</th>
                          <th scope="col">Contacto</th>
                          <th scope="col">Código</th>
                          
                      </tr>
                    </thead>
            
                    <tbody>
                      @foreach($clientes as $cliente)
                      <tr>
                        <td><a class="btn-floating waves-effect waves-light blue"><i class="material-icons ">account_circle</i></a></td>
                        <th scope='Row'>{{$cliente->id}}</th>
                        <td>{{$cliente->nome}}</td>                    
                        <td>{{$cliente->sobrenome}}</td>
                        <td>{{$cliente->contacto}}</td>
                        <td>{!! DNS1D::getBarcodeHTML("$cliente->codigo", 'UPCA',2,50) !!}
                        p - {{$cliente->codigo}}
                        </td>
                        <td>
                          <a href="#show-{{$cliente->id}}" class="btn-floating waves-effect waves-light blue modal-trigger"><i class="material-icons">visibility</i></a>
                          <a class="btn-floating  waves-effect waves-light orange "><i class="material-icons">mode_edit</i></a>

                          @can('access')
                          <a href="#delete-{{$cliente->id}}" class="btn-floating waves-effect waves-light red modal-trigger "><i class="material-icons">delete</i></a></td>
                          @endcan
                      </tr>
                      @include('site.clientes.delete')
                      @include('site.clientes.show')
                      @endforeach

                                          </tbody>
                  </table>
                </div> 
        </div>
    
               <!-- <ul class="pagination center">
                  <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                  <li class="active"><a href="#!">1</a></li>
                  <li class="waves-effect"><a href="#!">2</a></li>
                  <li class="waves-effect"><a href="#!">3</a></li>
                  <li class="waves-effect"><a href="#!">4</a></li>
                  <li class="waves-effect"><a href="#!">5</a></li>
                  <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>  -->             
        </div>



</div>


<!--
<script>
    let icone = document.getElementById('iconPackage');

    function moverIcones(){

    if(icone.style.paddingTop == '10%' ){

        icone.style.paddingTop = '30%';
        console.log('a funcao executou');
     }else{
        console.log('a funcao nao executou');
     }
    }
</script>-->
<script>
 $(document).ready(function(){
    $('.tap-target').tapTarget();
  });
</script>

@endsection

