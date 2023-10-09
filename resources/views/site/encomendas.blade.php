@extends('site.layout')
@section('title', 'Encomendas')
@section('conteudo')


<style>
    body{
        background-color: darkslategrey;
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
    #iconPackage{
        padding-left: 40%;
        padding-top: 30%;
        
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
                <div class="col s6 " id="botaoNovo"><a class="waves-effect waves-light btn-large pulse">Nova</a> </div>
        </div>
            <!--parte right do card-->
            <div class="row">
                <div class="col s6">
                    <h3 class=" ">I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</h3>
                </div>
                <div class="col s6 ">
                    <i class="material-symbols-outlined large " id="iconPackage" >
                    package_2
                    </i>
                </div>
            </div>
                </div>
              
            </div>
          </div>
    </div>
</div>

@endsection