@extends('adminlte::page')

@section('title', 'Distribuidores')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section( 'content')
<div class="col-md-12 mx-auto bg-white p-3">
    <a href="{{route('usuarios.create')}}" class="btn btn-primary mr-2 mb-2">Crear Usuario</a>


<table class="table" id="usuarios">
<thead class="bg-info text-light">
    <tr>
        <th scole="col ">Nombre</th>
        <th scole="col ">Apellido</th>
        <th scole="col ">Email</th>
        <th scole="col ">Puesto</th>
        <th scole="col ">Acciones</th>
    </tr>
</thead>
<tbody id="app">

    @foreach($usuarios as $usuario)
        @if($usuario->tipo_usuario_id < 3 )
        <tr>
            <td> {{$usuario->name}}</td>
            <td> {{$usuario->last_name}}</td>
            <td> {{$usuario->email}}</td>
            <td> {{$usuario->tipo->puesto}}</td>
            <td> 
                <eliminar-usuario usuario-id={{$usuario->id}}>

                </eliminar-usuario>
               
                <a href="{{ route('usuarios.edit', ['usuario'=> $usuario->id]) }}" class="btn btn-dark mr-1 d-line"><i class="fa-solid fa-user-pen"></i></a>
            </td>
            </tr>
        @endif
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
    $('#usuarios').DataTable(
        {
            responsive: true,
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