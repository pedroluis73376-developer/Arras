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
        <i class="fa-solid fa-file-circle-plus"></i> Nuevo Usuario
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
                                        action="{{ route('usuarios.store') }}" enctype="multipart/form-data"
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
                                            <label for="categoria">Categoria Usuario</label>
                                            <select name="categoria"
                                                class="form-control @error('categoria') is-invalid @enderror"
                                                id="categoria">
                                                <option value="">--seleccione--</option>

                                                @foreach($categorias as $categoria)
                                                @if($categoria->id < 3)
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
               
               <!-- Button trigger modal -->
               <button type="button" class="btn btn-dark" data-toggle="modal"
               data-target="#exampleModal{{$usuario->id}}">
               <i class="fa-solid fa-user-pen"></i>
           </button>

           <!-- Modal -->
           <div class="modal fade" id="exampleModal{{$usuario->id}}" tabindex="-1" role="dialog"
               aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">{{$usuario->name}}
                               {{$usuario->last_name}}</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <div class="card">


                               <div class="card-body">
                                   <div class="row justify-content-center mt-3">
                                       <div class="col-md-12">
                                        <form id="app" method="POST" action="{{ route('usuarios.update', ['usuario'=> $usuario->id]) }}" enctype="multipart/form-data"
                                            novalidate>
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label for="nombre">Nombre:</label>
                                                <input type="text" name="nombre"
                                                    class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                                                    value="{{$usuario->name}}" placeholder="Xubax">
                                                @error('nombre')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
            
                                            <div class="form-group">
                                                <label for="apellido">Apellido:</label>
                                                <input type="text" name="apellido"
                                                    class="form-control @error ('apellido')is-invalid @enderror" id="apellido"
                                                    value="{{$usuario->last_name}}" placeholder="tecnologia in situ">
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
                                                    value="{{$usuario->email}}" placeholder="example@xubax.com">
                                                @error('email')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            
                                <div class="form-group">
                                    <label for="telefono">Telefono:</label>
                                    <input type="text" name="telefono"
                                        class="form-control @error ('telefono')is-invalid @enderror" id="telefono"
                                        value="{{$usuario->telefono}}" placeholder="example@xubax.com">
                                    @error('telefono')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
            
                                            <div class="form-group">
                                                <label for="categoria">Puesto Usuario</label>
                                                <select name="categoria"
                                                    class="form-control @error('categoria') is-invalid @enderror" id="categoria">
                                                    <option value="">--seleccione--</option>
            
                                                    @foreach($categorias as $categoria)
                                                    @if($categoria->id < 3)
                                                    <option value="{{$categoria->id}}" {{$usuario->tipo_usuario_id==$categoria->id ?
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
            
                                            <modificar-datos>
            
                                            </modificar-datos>
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