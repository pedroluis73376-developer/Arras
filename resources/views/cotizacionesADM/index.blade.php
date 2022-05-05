@extends('adminlte::page')

@section('title', 'Cotizaciones')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)
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
                <th scole="col ">Iva</th>

                <th scole="col ">C/Promotor</th>
                <th scole="col ">U/Distribuidor</th>

                <th scole="col ">recibido</th>

                <th scole="col ">Acciones</th>


            </tr>

        </thead>

        <tbody id="app">
            @foreach($cotizaciones as $cotizacion)

            <tr>
                @if($cotizacion->status == 'NR')
                <td><i class="fa-solid fa-envelope"></i></td>
                @endif
                @if($cotizacion->status == 'R')
                <td><i class="fa-solid fa-envelope-open"></i></td>
                @endif
                <td>{{$cotizacion->arra->clave}}</td>
                <td>{{$cotizacion->arra->metal->nombre_metal}}</td>
                <td>{{$cotizacion->iva}} %</td>

                <td>{{$cotizacion->comision_promotor}} %</td>
                <td>{{$cotizacion->utilidad_distribuidor}} %</td>

                <td>{{$cotizacion->created_at}}</td>

                <td>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#staticBackdrop{{$cotizacion->id}}">
                        <i class="fa-solid fa-eye"></i>
                    </button>

                    <div class="modal fade" id="staticBackdrop{{$cotizacion->id}}" data-backdrop="static"
                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Usuario:
                                        {{$cotizacion->usuario->name}} {{$cotizacion->usuario->last_name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="carouselExampleControls{{$cotizacion->id}}" class="carousel slide"
                                                data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="/storage/{{$cotizacion->arra->imgFrente}}"
                                                            class="d-block w-100" alt="..."
                                                            style="width: 10vh; height:35vh">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="/storage/{{$cotizacion->arra->imgVuelta}}"
                                                            class="d-block w-100" alt="..."
                                                            style="width: 10vh; height:35vh">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="/storage/{{$cotizacion->arra->imgVuelta2}}"
                                                            class="d-block w-100" alt="..."
                                                            style="width: 10vh; height:35vh">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-target="#carouselExampleControls{{$cotizacion->id}}"
                                                    data-slide="prev">
                                                    <span style="background-color:darkgrey "
                                                        class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-target="#carouselExampleControls{{$cotizacion->id}}"
                                                    data-slide="next">
                                                    <span style="background-color:darkgrey "
                                                        class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <p><small><i class="fa-solid fa-check"></i>
                                                    {{$cotizacion->arra->clave}}</small></p>
                                            <p><small><i class="fa-solid fa-check"></i>
                                                    {{$cotizacion->arra->metal->nombre_metal}}</small></p>
                                            <p><small><i class="fa-solid fa-check"></i>
                                                    {{$cotizacion->arra->vuelta->nombre_vuelta}}</small></p>
                                            <p><small><i class="fa-solid fa-check"></i>
                                                    {{$cotizacion->arra->frente->nombre_frente}} </small></p>
                                            <p><small><i class="fa-solid fa-check"></i>
                                                    {{$cotizacion->arra->size->diametro}} mm</small></p>

                                        </div>
                                    </div>
                                    <hr>

                                    <div class="card mr-4">
                                        <div class="card-header">
                                            <h6 class="container">Mensaje:</h6>
                                        </div>
                                        <div class="card-body">
                                            <p class="overflow-auto" style="max-height: 25vh">
                                                {{$cotizacion->descripcion}}</p>
                                        </div>
                                    </div>

                                    <form action="{{ route('cotizaciones.update', ['cotizacion'=>$cotizacion->id])}}"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">

                                            <div class="card mt-2 ml-4">
                                                <div class="card-header">
                                                    <h4 class="col-form-label text-right">Respuesta:</h4>
                                                </div>
                                                <div class="card-body">
                                                    <textarea rows="5" class="form-control align-text-left" id="mensaje"
                                                        name="mensaje">{{$cotizacion->respuesta}}
                                               
                                            </textarea>
                                                </div>
                                            </div>



                                        </div>
                                        <input type="hidden" name="email" value="{{$cotizacion->usuario->email}}">
                                        <div class="modal-footer">
                                            <p><small>Email de Contacto : {{$cotizacion->usuario->email}}</small> </p>
                                            <p> <small>Recibido : {{$cotizacion->updated_at}} </small> </p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar
                                                <i class="fa-solid fa-circle-xmark"></i></button>

                                            @if($cotizacion->status == 'NR')
                                            <button type="submit" class="btn btn-primary">Enviar <i
                                                    class="fa-solid fa-envelope-circle-check"></i></button>
                                            @else
                                            <button type="submit" class="btn btn-primary">Actualizar Respuesta</button>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>


            </tr>

            @endforeach
        </tbody>
    </table>

</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#distribuidores').DataTable(
        {
            responsive: true,
            order:[[7,'desc']],
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