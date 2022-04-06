@extends('adminlte::page')

@section('title', 'arras')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection


@section( 'content')
<div class="col-md-12 mx-auto bg-white p-3">

    <table class="table" id="arras">
        <thead class="bg-info text-light ">
            <tr>
                <th scole="col ">status</th>
                <th scole="col ">Nombre</th>
                <th scole="col ">Email</th>
                <th scole="col ">asunto</th>
                <th scole="col ">Recibido</th>
                <th scole="col ">Acciones</th>


            </tr>

        </thead>

        <tbody id="app">
            @foreach($mensajes as $mensaje)

            <tr>
                @if($mensaje->status == 'NL')
                <td><i class="fa-solid fa-envelope"></i></td>
                @endif

                @if($mensaje->status == 'L')
                <td><i class="fa-solid fa-envelope-open"></i></td>
                @endif
                <td>{{$mensaje->nombre}}</td>
                <td>{{$mensaje->email}}</td>
                <td>{{$mensaje->asunto}}</td>
                <td>{{$mensaje->created_at}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#staticBackdrop{{$mensaje->id}}">
                        <i class="fa-solid fa-eye"></i>
                    </button>

                    <div class="modal fade" id="staticBackdrop{{$mensaje->id}}" data-backdrop="static"
                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Nombre: {{$mensaje->nombre}}</h5>




                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                    <h5>Asunto: {{$mensaje->asunto}}</h5>
                                    <hr>
                                    
                                    <h6 class="container">Mensaje:</h6>

                                    
                                       <p class="overflow-auto" style="height: 40vh">{{$mensaje->mensaje}}</p>
                                      
                                    
                                    
                                  </div>
                                  
                               
                                <div class="modal-footer">
                                    <p><small>Email de Contacto : {{$mensaje->email}}</small> </p>
                                    <p> <small>Recibido : {{$mensaje->created_at}}</small> </p>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>

                                    @if($mensaje->status == 'NL')
                                        <form action="{{ route('contactos.update', ['contacto'=>$mensaje->id])}}"  method="POST">
                                        @csrf
                                        @method('put') 
                                        <button type="submit" class="btn btn-primary">Marcar como Leido</button>
                                    </form>
                                    @endif
                                    
                                   
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
    $('#arras').DataTable(
            {
                responsive: true,
                order:[[4,'desc']],
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
            
             
            });
</script>
@endsection