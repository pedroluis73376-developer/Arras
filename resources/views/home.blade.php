@extends('adminlte::page')

@section('css')

@endsection

@section('title', 'Dashboard')
@section( 'content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3 mb-2">
                <div class="card ">
                    <a class="btn" href="">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-center">{{ $distribuidor[0]}}</h2>
                                <hr width="120">
                                <h6 class="text-center">Distribuidores</h6>
                            </div>
                            <div class="col-md-6 align-content">
                                <img class="mt-3" src="/storage/distribuidor.png" height="65vh" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card ">
                    <a class="btn" href="">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-center">{{$cotizar[0]}}</h2>
                                <hr width="120">
                                <h6 class="text-center">Cotizaciones</h6>
                            </div>
                            <div class="col-md-6 align-content">
                                <img class="mt-3" src="/storage/cotizacion.png" height="65vh" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card ">
                    <a class="btn" href="">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-center">{{$mensaje[0]}}</h2>
                                <hr width="120">
                                <h6 class="text-center">Mensajes</h6>
                            </div>
                            <div class="col-md-6 align-content">
                                <img class="mt-2" src="/storage/mensaje.png" height="80vh" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card ">
                    <a class="btn" href="">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-center">{{$arra[0]}}</h2>
                                <hr width="120">
                                <h6 class="text-center">Arras</h6>
                            </div>
                            <div class="col-md-6 align-content">
                                <img class="mt-3" src="/storage/catalogo.png" height="70vh" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>



        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="card">
                  
                    <div class="card-body">


                        <div class="position-relative mb-4">

                            <div id="usuarios"></div>
                        </div>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="card">
                          
                            <div class="card-body">


                                <div class="position-relative mb-4">

                                    <div id="cotizacionesContainer"></div>
                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="d-flex">
                                    <h5 class="d-flex flex-column">
                                        <span class="highcharts-title">Metales Mas Usados </span>
                                    </h5>

                                </div>

                                <div class="position-relative mb-4">
                                    <canvas id="metales" height="229"></canvas>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>


        @endsection

        @section('js')
        <script src="plugins/jquery/jquery.min.js"></script>

        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="dist/js/adminlte.js?v=3.2.0"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

        <script src="dist/js/demo.js"></script>

        <script src="dist/js/pages/dashboard3.js"></script>

        <script>
            var metales = <?php echo json_encode($datas2) ?>;
    const ctx = document.getElementById('metales').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Imi-Plata', 'Imi-Oro', 'Plata/Baño/Oro', 'Plata/Baño/Rodio', 'Oro/A/10kt', 'Oro/B/10kt', 'Oro/A/14kt', 'Oro/A/14kt', 'Oro/24kt'],
            datasets: [{
                
                label: '# Mas utilizado en el año',
                data: metales,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(215, 206, 86, 0.2)',
                    'rgba(230, 206, 86, 0.2)',
                    'rgba(102, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(215, 206, 86, 1)',
                    'rgba(230, 206, 86, 1)',
                    'rgba(102, 206, 86, 1)',

                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
        </script>



        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
            var cotizaciones = <?php echo json_encode($datas) ?>;

    Highcharts.chart('cotizacionesContainer',{
        title:{
            text:'Cotizaciones Realizadas durante el año'
        },
        subtitle:{
            text:''
        },
        xAxis:{
            categories: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Agt','Sep','Oct','Nov','Dic']
        },
        yAxis:{
            title:'Numero de Cotizaciones'
        },
        legend:{
            layout: 'vertical',
            align: 'right',
            verticalAlign:'middle'
        },
        plotOptions:{
            series:{
                allowPointSelect:true
            }
        },
        series: [{
            name:'Numero de Cotizaciones',
            data: cotizaciones
        }],
        responsive:{
            rules:[{
                condition:{
                    maxwidth:500
                },
                chartOption:{
                    legend:{
                        layout:'horizontal',
                        align:'center',
                        verticalAlign:'bottom'
                    }
                }

            }]
        }

    })

        </script>


        <script>
            var user = <?php echo json_encode($datas3) ?>;

    Highcharts.chart('usuarios',{
        title:{
            text:'Distribuidores Registrados durante el año'
        },
        subtitle:{
            text:''
        },
        xAxis:{
            categories: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Agt','Sep','Oct','Nov','Dic']
        },
        yAxis:{
            title:'Numero de Cotizaciones'
        },
        legend:{
            layout: 'vertical',
            align: 'right',
            verticalAlign:'middle'
        },
        plotOptions:{
            series:{
                allowPointSelect:true
            }
        },
        series: [{
            name:'Distribuidores Nuevos',
            data: user
        }],
        responsive:{
            rules:[{
                condition:{
                    maxwidth:500,
                  
                },
                chartOption:{
                    legend:{
                        layout:'horizontal',
                        align:'center',
                        verticalAlign:'bottom'
                    }
                }

            }]
        }

    })

        </script>

        @endsection