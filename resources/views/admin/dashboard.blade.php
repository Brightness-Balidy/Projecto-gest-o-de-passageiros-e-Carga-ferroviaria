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
    #firstin{
        width: 105%;
        /*background: linear-gradient(110.1deg, rgb(34, 126, 34) 2.9%, rgb(168, 251, 60) 90.3%);*/
        background: radial-gradient(circle at -1% 57.5%, rgb(19, 170, 82) 0%, rgb(0, 102, 43) 90%); 
    }
    #secondin{
        width: 105%;
        background: rgb(17,45,126);
background: linear-gradient(122deg, rgba(17,45,126,1) 0%, rgba(33,91,198,0.742734593837535) 67%);
    }
    #thirdin{
        width: 105%;
        background: rgb(222,100,13);
background: linear-gradient(122deg, rgba(222,100,13,1) 0%, rgba(245,191,51,0.9360119047619048) 70%);
    }
    
</style>
    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>     
      <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
      <li><a href="{{ route('login.logout')}}">Sair</a></li> 
    </ul>



    <div class= "row container rowCont" id="rowCont">
         <!--seccao de informacao sobre o sistema-->
         <div class="row container" id="first">
            <div class="col s4">
              <article class="card z-depth-4 rounded" id="firstin">
              <i class="material-icons medium mt-4 ml-4">paid</i>
              <p class="ml-4">Faturamento</p>
              <h3 class="ml-4">MZN 00,00</h3>       
            </article>
          </div>
            <div class="col s4 bg-gradient-green">
                <article class="bg-gradient-green card z-depth-4 rounded " id="secondin">
              <i class="material-icons mt-4 ml-4 medium ">face</i>
              <p class="ml-4">Usuários</p>
              <h3 class="ml-4">{{$usuarios}}</h3>           
            </article>
          </div>
          <div class="col s4  ">
            <article class="bg-gradient-blue card z-depth-4 rounded" id="thirdin">
            <i class="material-icons mt-4 ml-4 medium">people</i>
            <p class="ml-4">Clientes</p>
            <h3 class="ml-4">{{$clientes}}</h3>
          </article>
        </div>
          </div>
        
            

        <div class="row" id="second" >
            <section class="graficos col s12 m6 rounded" >            
              <div class="grafico card z-depth-4">
                  <h5 class="center"> Clientes por mês</h5>
                  <canvas id="myChart" width="400" height="200"></canvas>
              </div>           
            </section> 
            
            <section class="graficos col s12 m6 rounded">            
                <div class="grafico card z-depth-4">
                    <h5 class="center"> Serviços </h5>
                <canvas id="myChart2" width="400" height="200"></canvas> 
            </div>            
           </section>             
        </div>    

        <div class=" left s2" id="botaoR"><a href="" class="waves-effect waves-light teal btn-small">relatorio</a></div>
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
        labels: ['Encomendas','Bagagens', 'Bilhetes'],
        datasets: [{
            label: 'Visitas',
            data: [{{$encomendas}},{{$bagagens}},{{$bilhetes}}],
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
      


    