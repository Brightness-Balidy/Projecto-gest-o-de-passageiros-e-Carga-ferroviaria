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
    #cardPannel{
        height: 80%;
    }
    /*icones de encomenda*/
    #iconPackage{
        margin-left: 0%;
        padding-top: 25%;
        
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
                <span class="card-title bg-success "><b>Ciar Encomendas</b></span> 
            </div>
                <div class="col s6 " id="botaoNovo"><a class="waves-effect waves-light btn-large pulse" >Nova Encomenda</a> </div>
                
        </div>
            <!--parte right do card-->
            <div class="row">
                <div class="col s6">
                    <h3 class=" ">I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</h3>
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