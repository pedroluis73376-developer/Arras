@extends('adminlte::page')

@section('title', 'Distribuidores')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)

@section( 'content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Registrar Usuario</h4>
                </div>

                <div class="card-body">
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-7">
                            <form id="app" method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data"
                                novalidate>
                                @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" name="nombre"
                                        class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                                        value="{{old('nombre')}}" placeholder="Xubax">
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
                                        value="{{old('apellido')}}" placeholder="tecnologia in situ">
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
                                        value="{{old('email')}}" placeholder="example@xubax.com">
                                    @error('email')
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

                                <guardar-datos >

                                </guardar-datos>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>



</div>


@endsection