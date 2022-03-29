@extends('adminlte::page')

@section('title', 'Distribuidores')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section( 'content')


<div class="col-md-12 mx-auto bg-white p-3">

    <a href="{{route('distribuidor.create')}}" class="btn btn-primary mr-2 mb-2">Dar Alta</a>
    <table class="table" id="distribuidores">
        <thead class="bg-info text-light ">
            <tr>
                <th scole="col ">Nombre</th>
                <th scole="col ">Apellido</th>
                <th scole="col ">Email</th>
                <th scole="col ">Direccion</th>
                <th scole="col ">telefono</th>
                <th scole="col ">categoria</th>
                <th scole="col ">Acciones</th>
                <th scole="col ">Ver</th>

            </tr>

        </thead>

        <tbody id="app">
            @foreach($distribuidores as $distribuidor)
            @if($distribuidor->tipo_usuario_id > 3)
            <tr>
                <td>{{$distribuidor->name}}</td>
                <td>{{$distribuidor->last_name}}</td>
                <td>{{$distribuidor->email}}</td>
                <td>{{$distribuidor->direccion}}</td>
                <td>{{$distribuidor->telefono}}</td>
                <td>{{$distribuidor->tipo->puesto}}</td>
                <td>

                    <eliminar-distribuidor distribuidor-id={{$distribuidor->id}} >
                       
                    </eliminar-distribuidor>
                   
                   <a href="{{route('distribuidor.edit', ['distribuidor' => $distribuidor->id])}}"
                    class="btn btn-dark mr-2 mt-1 d-line"><i class="fa-solid fa-user-pen"></i></a>
                </td>
                <td>
               <a href="" class="btn btn-success mr-2 mt-1 d-line"><i class="fa-solid fa-eye"></i></a></td>
  
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
    $('#distribuidores').DataTable(
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