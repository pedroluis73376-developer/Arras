@extends('adminlte::page')

@section('title', 'Distribuidores')
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

                <th scole="col ">Seriado</th>
                <th scole="col ">Iva</th>
                <th scole="col ">MSRP</th>
                <th scole="col ">C/Promotor</th>
                <th scole="col ">U/Distribuidor</th>
                <th scole="col ">SPIF</th>
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

                <td>{{$cotizacion->seriado}}</td>
                <td>{{$cotizacion->iva}} %</td>
                <td>{{$cotizacion->MSRP}}</td>
                <td>{{$cotizacion->comision_promotor}} %</td>
                <td>{{$cotizacion->utilidad_distribuidor}} %</td>
                <td>{{$cotizacion->SPIF}}</td>
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
                                    <h5 class="modal-title" id="staticBackdropLabel">Nombre:
                                        {{$cotizacion->usuario->name}}</h5>




                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <h6 class="container">Mensaje:</h6>


                                    <p class="overflow-auto" style="height: 25vh">{{$cotizacion->descripcion}}</p>


                                    <form action="{{ route('cotizaciones.update', ['cotizacion'=>$cotizacion->id])}}"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="mensaje" class="col-form-label">Respuesta:</label>
                                            <textarea rows="5" class="form-control align-text-left" id="mensaje" name="mensaje">{{$cotizacion->respuesta}}
                                               
                                            </textarea>
                                        </div>
                                        <input type="hidden" name="email" value="{{$cotizacion->usuario->email}}">
                                        <div class="modal-footer">
                                            <p><small>Email de Contacto : {{$cotizacion->usuario->email}}</small> </p>
                                            <p> <small>Recibido : {{$cotizacion->updated_at}}    </small> </p>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar <i class="fa-solid fa-circle-xmark"></i></button>

                                            @if($cotizacion->status == 'NR')
                                            <button type="submit" class="btn btn-primary">Enviar <i class="fa-solid fa-envelope-circle-check"></i></button>
                                            @else
                                            <button type="submit" class="btn btn-primary">Actualizar  Respuesta</button>
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