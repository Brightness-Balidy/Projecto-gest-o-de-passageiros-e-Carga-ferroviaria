@extends('site.layout') 
@section('title', 'Bilhetes')
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
        
        #botaoR{
          height: 60px;
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
                    <span class="card-title "><h4><b>Espaço de Criação de Bilhetes</b></h4></span> 
                </div>
                    
                    
            </div>
                <!--parte right do card-->
                <div class="row">
                    <div class="col s6">
                        <h6 class=" ">este espaço podemos proceder a criação de bilhetes para os clientes que desejam viajar</h6>
                    </div>
                    <div class="col s6  ">
                        <i class="material-symbols-outlined medium" id="iconPackage2" >
                            local_activity
                        </i>
                        <i class="material-symbols-outlined large" id="iconPackage" >
                        local_activity
                        </i>
                        <i class="material-symbols-outlined medium">
                            local_activity
                        </i>
                    </div>
                    
                </div>
                    </div>
                  
                </div>
              </div>
            </div>

    
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
    @include('site.bilheteria.create')
           
            <!--a estrutura do crud-->
           
            <div class="row crud">
              <div class=" s2" id="botaoR"><a href="" class="waves-effect waves-light teal btn-small left mt-5 ">relatorio</a></div>

                    <div class="row titulo ">             
                      <h1 class="left">Bilhetes</h1>
                      <span class="right chip">{{$bilhetes->count()}} bilhetes encontrados </span>  
                    </div>

                  
                   <nav class="bg-gradient-green search1">
                    <div class="nav-wrapper search1" >
                      <form  action="" method="get" >
                        <div class="col-s6">
                        <div class="input-field bg-success">
                          <input placeholder="Pesquisar..." id="search" class="search1" type="search" required>
                          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                          <i class="material-icons">close</i>
                        </div>
                        
                        </div>

                       
                        
                      </form>
                    </div>
                  </nav> 
                </div>  
                
            <div class="row" id="ajustarRow">
                    <div class="card z-depth-4 registros " id="tabelaCrd" >
                    <table class="table table-hover">
    
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">ID</th>  
                            <th scope="col">Nome</th>
                              
                              <th scope="col">Sobrenome</th>
                              <th scope="col">Destino</th>
                              <th scope="col">preço</th>
                              
                          </tr>
                        </thead>
                
                        <tbody>
                          @foreach($bilhetes as $bilhete)
                          <tr>
                            <td><i class="material-symbols-outlined medium " id="iconPackage2" >
                              receipt
                          </i></td>
                            <th scope="row">{{$bilhete->id}}</th>
                            <td>{{$bilhete->cliente->nome}}</td>                    
                            <td>{{$bilhete->cliente->sobrenome}}</td>
                           
                            <td>{{$bilhete->viagem->local_partida}}</td>
                            <td>{{$bilhete->viagem->preco}}mt</td>
                           
                            <td>
                              <a href="#show-{{$bilhete->id}}" class="btn-floating waves-effect waves-light blue modal-trigger"><i class="material-icons">visibility</i></a>

                              <a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
    
                              <a href="#delete-{{$bilhete->id}}" class="btn-floating waves-effect waves-light red modal-trigger"><i class="material-icons">delete</i></a></td>
                          </tr>
                          @include('site.bilheteria.delete')
                          @include('site.bilheteria.show')
                          @endforeach
                          <!--('site.clientes.delete')-->
                         
    
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
    
    
</body>
</html>