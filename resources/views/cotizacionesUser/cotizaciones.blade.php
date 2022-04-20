@extends('layouts/app')


@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section( 'content')

<div class="col-md-10 mx-auto bg-white p-3">

    <a href="{{route('distribuidor.create')}}" class="btn btn-primary mr-2 mb-2">Dar Alta</a>
    <table class="table" id="distribuidores">
        <thead class="bg-info text-light ">
            <tr>
                <th scole="col ">Status</th>

                <th scole="col ">Clave</th>
                <th scole="col ">Metal</th>
                <th scole="col ">Frente</th>
                <th scole="col ">Vuelta</th>
                <th scole="col ">Tamaño</th>
                <th scole="col ">Enviada</th>

                <th scole="col ">Acciones</th>


            </tr>

        </thead>

        <tbody id="app">
            @foreach($cotizaciones as $cotizacion)
            @if($cotizacion->id_usuario == auth()->user()->id)
                
            
            <tr>
                @if($cotizacion->status == 'NR')
                <td><i class="fa-solid fa-clock"></i></td>
                @endif
                @if($cotizacion->status == 'R')
                <td><i class="fa-solid fa-check-double"></i></td>
                @endif

                <td>{{$cotizacion->arra->clave}}</td>
                <td>{{$cotizacion->arra->metal->nombre_metal}} </td>
                <td>{{$cotizacion->arra->frente->nombre_frente}}</td>
                <td>{{$cotizacion->arra->vuelta->nombre_vuelta}} </td>
                <td>{{$cotizacion->arra->size->diametro}} mm</td>
              
                <td>{{$cotizacion->created_at}}</td>

                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#staticBackdrop{{$cotizacion->id}}">
                        <i class="fa-solid fa-eye"></i>
                    </button>

                    <div class="modal fade " id="staticBackdrop{{$cotizacion->id}}" data-backdrop="static"
                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Detalle:
                                        {{$cotizacion->arra->clave}}</h5>




                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div id="carouselExampleControls{{$cotizacion->id}}" class="carousel slide"
                                        data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/{{$cotizacion->arra->imgFrente}}"
                                                    class="d-block w-100" alt="..." style="width: 10vh; height:35vh">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/{{$cotizacion->arra->imgVuelta}}"
                                                    class="d-block w-100" alt="..." style="width: 10vh; height:35vh">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/{{$cotizacion->arra->imgOpcional}}"
                                                    class="d-block w-100" alt="..." style="width: 10vh; height:35vh">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-target="#carouselExampleControls{{$cotizacion->id}}" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-target="#carouselExampleControls{{$cotizacion->id}}" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </button>
                                    </div>
                                    <hr>

                                    <div class="card ml-4">
                                        <div class="card-header ">
                                            <h6 class="container text-right">{{$cotizacion->usuario->name}}</h6>
                                        </div>
                                        <div class="card-body mr-2">
                                            <p class="overflow-auto" style="max-height: 15vh">{{$cotizacion->descripcion}}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card mr-4">
                                        <div class="card-footer ">
                                            <h6 class="container ">Respuesta:</h6>
                                        </div>
                                        <div class="card-body ml-2">
                                            <p class="overflow-auto" style="max-height: 15vh">{{$cotizacion->respuesta}}
                                            </p>
                                        </div>



                                    </div>

                                    <p> <small>Recibido : {{$cotizacion->updated_at}}</small> </p>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </td>


            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#distribuidores').DataTable(
        {
            responsive: true,
            order:[[6,'desc']],
            autoWidth: false,

            "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por Pagina",
            "zeroRecords": "Ningun Resultado Encontrado",
            "info": "Mostrando Pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Ningun Registro Disponible",
            "infoFiltered": "(Filtrado de _MAX_ Registros Totales)",
            "search": "Buscar:",
            "paginate":{
                'next': 'Siguiente',
                'previous':'Anterior'
            }
        }
        }
    );
</script>


@endsection