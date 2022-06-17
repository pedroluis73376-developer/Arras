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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal0">
        <i class="fa-solid fa-file-circle-plus"></i> Nuevo Distribuidor
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Distribuidor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">


                        <div class="card-body">
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-7">
                                    <form  class="confirmacion" method="POST"
                                        action="{{ route('distribuidor.store') }}" enctype="multipart/form-data"
                                        novalidate>
                                        @csrf
                                        <div class="form-group">
                                            <label for="nombre">Nombre:</label>
                                            <input type="text" name="nombre"
                                                class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                                                value="{{old('nombre')}}" placeholder="Nombre Distribuidor">
                                            @error('nombre')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido">Apellido:</label>
                                            <input type="text" name="apellido"
                                                class="form-control @error ('apellido')is-invalid @enderror"
                                                id="apellido" value="{{old('apellido')}}" placeholder="Apellidos">
                                            @error('apellido')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" name="email"
                                                class="form-control @error ('email')is-invalid @enderror" id="email"
                                                value="{{old('email')}}" placeholder="Email">
                                            @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="direccion">Direccion:</label>
                                            <input type="text" name="direccion"
                                                class=" input-lg form-control  @error ('direccion')is-invalid @enderror"
                                                id="direccion" value="{{old('direccion')}}"
                                                placeholder="Domicilio, Ciudad, Estado">
                                            @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono">Telefono:</label>
                                            <input type="text" name="telefono"
                                                class=" input-lg form-control  @error ('telefono')is-invalid @enderror"
                                                id="telefono" value="{{old('telefono')}}" placeholder="123566988">
                                            @error('telefono')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="categoria">Categoria Distribuidor</label>
                                            <select name="categoria"
                                                class="form-control @error('categoria') is-invalid @enderror"
                                                id="categoria">
                                                <option value="">--seleccione--</option>

                                                @foreach($categorias as $categoria)
                                                @if($categoria->id >= 4)
                                                <option value="{{$categoria->id}}" {{old('categoria')==$categoria->id ?
                                                    'selected' : '' }}>{{$categoria->puesto}}</option>
                                                @endif

                                                @endforeach
                                            </select>
                                            @error('categoria')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <input type="hidden" value="1" name="sweetalert">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                 <i class="fa-solid fa-circle-xmark"></i> cerrar</button>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa-solid fa-file-circle-plus"></i> Registrar</button>

                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>

    <table class="table" id="distribuidores">
        <thead class="bg-info text-light ">
            <tr>
                <th scole="col ">Nombre</th>
              
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
                <td>{{$distribuidor->name}} {{$distribuidor->last_name}}</td>
                
                <td>{{$distribuidor->email}}</td>
                <td style="max-width:200px">{{$distribuidor->direccion}}</td>
                <td>{{$distribuidor->telefono}}</td>
                <td>{{$distribuidor->tipo->puesto}}</td>
                <td>

                    <eliminar-distribuidor distribuidor-id={{$distribuidor->id}} >

                    </eliminar-distribuidor>



                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark mt-1" data-toggle="modal"
                        data-target="#exampleModal{{$distribuidor->id}}">
                        <i class="fa-solid fa-user-pen"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$distribuidor->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$distribuidor->name}}
                                        {{$distribuidor->last_name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">


                                        <div class="card-body">
                                            <div class="row justify-content-center mt-3">
                                                <div class="col-md-12">
                                                    <form id="app" method="POST"
                                                        action="{{ route('distribuidor.update', ['distribuidor'=> $distribuidor->id]) }}"
                                                        enctype="multipart/form-data" novalidate>
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="nombre">Nombre:</label>
                                                            <input type="text" name="nombre"
                                                                class="form-control @error ('nombre')is-invalid @enderror"
                                                                id="nombre" value="{{$distribuidor->name}}"
                                                                placeholder="Nombre Distribuidor">
                                                            @error('nombre')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="apellido">Apellido:</label>
                                                            <input type="text" name="apellido"
                                                                class="form-control @error ('apellido')is-invalid @enderror"
                                                                id="apellido" value="{{$distribuidor->last_name}}"
                                                                placeholder="Apellidos">
                                                            @error('apellido')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input type="text" name="email"
                                                                class="form-control @error ('email')is-invalid @enderror"
                                                                id="email" value="{{$distribuidor->email}}"
                                                                placeholder="Email">
                                                            @error('email')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="direccion">Direccion:</label>
                                                            <input type="text" name="direccion"
                                                                class=" input-lg form-control  @error ('direccion')is-invalid @enderror"
                                                                id="direccion" value="{{$distribuidor->direccion}}"
                                                                placeholder="Domicilio, Ciudad, Estado">
                                                            @error('email')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="telefono">Telefono:</label>
                                                            <input type="text" name="telefono"
                                                                class=" input-lg form-control  @error ('telefono')is-invalid @enderror"
                                                                id="telefono" value="{{$distribuidor->telefono}}"
                                                                placeholder="123566988">
                                                            @error('telefono')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="categoria">Categoria Distribuidor </label>
                                                            <select name="categoria"
                                                                class="form-control @error('categoria') is-invalid @enderror"
                                                                id="categoria">
                                                                <option value="4">--seleccione--</option>
                                                                @foreach($categorias as $categoria)

                                                                <option value="{{$categoria->id}}" {{$distribuidor->
                                                                    tipo_usuario_id==$categoria->id
                                                                    ? 'selected' : '' }}>{{$categoria->puesto}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('categoria')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cerrar</button>
                                                            <modificar-datos>

                                                            </modificar-datos>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </td>
                <td>
                    <a href="{{ route('distribuidor.show', ['distribuidor'=>$distribuidor->id]) }}" class="btn btn-success mr-2 mt-1 d-line"><i class="fa-solid fa-eye"></i></a>
                </td>

            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

</div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<script>
    $('.confirmacion').submit(function(e){
        Swal.fire({
  
  icon: 'success',
  title: 'Registrando Usuario',
  showConfirmButton: false,
  timer: 1500
})
    })

    
</script>

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