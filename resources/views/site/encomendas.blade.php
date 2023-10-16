@extends('site.layout')
@section('title', 'Encomendas')
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
</style>

<div class="row container rowCont">
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1" id="cardPannel">
              <div class="card-content white-text">
                <!--parte left do card-->
                <div class="row">
                    <div class="col s6">
                <span class="card-title bg-success"><h4><b>Espaço de Criação de Encomendas</b></h4></span> 
            </div>
                <div class="col s6" id="botaoNovo"><a class="waves-effect waves-light btn-large pulse" >Nova Encomenda</a> </div>
                
        </div>
            <!--parte right do card-->
            <div class="row">
                <div class="col s6">
                    <h6 class=" ">I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</h6>
                </div>
                <div class="col s6  ">
                    <i class="material-symbols-outlined medium " id="iconPackage2" >
                        package_2
                    </i>
                    <i class="material-symbols-outlined large " id="iconPackage" >
                    package_2
                    </i>
                    <i class="material-symbols-outlined medium" >
                        package_2
                    </i>
                </div>
                
            </div>
                </div>
              
            </div>
          </div>
    </div>
    <div class="row">
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
        </div>
          
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
@endsection