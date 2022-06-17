@extends('layouts/app')
@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Actualizar Datos</h2>
            </div>

            <div class="card-body">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-6">
                        <form id="app" method="POST"
                            action="{{ route('user.update', ['distribuidor'=> $distribuidor->id]) }}"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre"
                                    class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                                    value="{{$distribuidor->name}}" placeholder="Nombre Distribuidor">
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
                                    value="{{$distribuidor->last_name}}" placeholder="Apellidos">
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
                                    value="{{$distribuidor->email}}" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion:</label>
                                <textarea type="text" name="direccion" id="direccion" cols="30" rows="5"
                            class="form-control @error ('direccion')is-invalid @enderror" value="{{old('direccion')}}"
                            placeholder="Calle # , Ciudad, Estado, CP">{{$distribuidor->direccion}}


                        </textarea>
                        @error('direccion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
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
                                    id="telefono" value="{{$distribuidor->telefono}}" placeholder="123566988">
                                @error('telefono')
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
@endsection