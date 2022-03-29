@extends('adminlte::page')

@section('title', 'Lista Tamaños')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('content')


<div class="col-md-8 mx-auto bg-white">
    <a href="{{route('vueltas.create')}}" class="btn btn-primary mr-2 mb-2">Nuevo Vuelta</a>


<table class="table" id="vueltas">
<thead class="bg-info text-light">
    <tr>
        <th scole="col ">Identificador</th>
        <th scole="col ">Tipo</th>
        <th scole="col ">Acciones</th>

    </tr>
</thead>
<tbody id="app">

    @foreach($vueltas as $vuelta)
        <tr>
            <td> {{$vuelta->id}}</td>
            <td> {{$vuelta->nombre_vuelta}}</td>

            <td> 
                <eliminar-vuelta vuelta-id={{$vuelta->id}}>

                </eliminar-vuelta>

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
    $('#vueltas').DataTable(
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