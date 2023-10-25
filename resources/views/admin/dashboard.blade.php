@extends('site.layout')
@section('titulo', 'Dashboard')
@section('conteudo')
    
   
<style>
    .rowCont{
       /* background-color: brown;*/
        margin-left: 310px;
        margin-right: 50px;
        width: 75%;
        height: 700px;
        margin-top:2%;
        
    }
    #first{
        width: 100%;
    
    }
    #second{
        width:100%;
    }

</style>
    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>     
      <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
      <li><a href="{{ route('login.logout')}}">Sair</a></li> 
    </ul>



    <div class= "row container rowCont " id="rowCont" >
         <!--seccao de informacao sobre o sistema-->
         <div class="row container" id="first">
            <div class="col s4" >
              <article class="bg-gradient-green card z-depth-4 ">
              <i class="material-icons">paid</i>
              <p>Faturamento</p>
              <h3>R$ 123,00</h3>       
            </article>
          </div>
            <div class="col s4"><article class="bg-gradient-blue card z-depth-4 ">
              <i class="material-icons">face</i>
              <p>Usuários</p>
              <h3>{{$usuarios}}</h3>           
            </article>
          </div>
          <div class="col s4 "><article class="bg-gradient-blue card z-depth-4 ">
            <i class="material-icons">shopping_cart</i>
            <p>Pedidos este mês</p>
            <h3>0 </h3>           
          </article>
        </div>
            
          </div>
        
    

        <div class="row" id="second">
            <section class="graficos col s12 m6" >            
              <div class="grafico card z-depth-4">
                  <h5 class="center"> Aquisição de usuários</h5>
                  <canvas id="myChart" width="400" height="200"></canvas>
              </div>           
            </section> 
            
            <section class="graficos col s12 m6">            
                <div class="grafico card z-depth-4">
                    <h5 class="center"> Produtos </h5>
                <canvas id="myChart2" width="400" height="200"></canvas> 
            </div>            
           </section>             
        </div>    


        </div>
        @endsection 
        @push('graficos')
    <script>
                /* Gráfico 01 */
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
        labels: [{{$customerMes}}],
        datasets: [{
            label: [{!! $customerLabel !!}],
            data: [{{$customerTotal}}],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                         
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                     
                'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1, 
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/* Gráfico 02 */
        var ctx = document.getElementById('myChart2');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
        labels: ['Facebook', 'Google', 'Instagram'],
        datasets: [{
            label: 'Visitas',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',                         
                'rgba(255, 159, 64)'
            ]
        }]
    }
});



            </script>
        @endpush
      


    