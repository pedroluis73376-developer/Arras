@extends('adminlte::page')

@section('title', 'arras')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)
@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section( 'content')
<div class="col-md-12 mx-auto bg-white p-3">

<a href="{{route('arras.create')}}" class="btn btn-primary mr-2 mb-2">Dar Alta</a>
<table class="table" id="arras">
    <thead class="bg-info text-light ">
        <tr>
            <th scole="col ">Clave</th>
            <th scole="col ">Nombre</th>
            <th scole="col ">Imagen</th>
            <th scole="col ">Peso</th>
            <th scole="col ">precio</th>
            <th scole="col ">Metal</th>
            <th scole="col ">Frente</th>
            <th scole="col ">Size</th>
            <th scole="col ">Vuelta</th>
            <th scole="col ">Acciones</th>

        </tr>

    </thead>

    <tbody id="app">
        @foreach($arras as $arra)
       
        <tr>
            <td>{{$arra->clave}}</td>
            <td>{{$arra->nombre}}</td>
            <td>{{$arra->imagenes}}</td>
            <td>{{$arra->peso}} Gr</td>
            <td>$ {{$arra->precio}}</td>
            
            <td>{{$arra->metal->nombre_metal}}</td>
            <td>{{$arra->frente->nombre_frente}}</td>
            <td>{{$arra->size->diametro}}</td>
            <td>{{$arra->vuelta->nombre_vuelta}}</td>
            <td>

               <a href="{{route('arras.edit', ['arra' => $arra->id])}}"
                    class="btn btn-dark mr-1 d-line"><i class="fa-solid fa-user-pen"></i></a>
                <a href="" class="btn btn-success mr-1 d-line"><i class="fa-solid fa-eye"></i></a>
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