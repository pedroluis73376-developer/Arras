@extends('adminlte::page')

@section('title', 'arras')
@section('plugins.Vue', true)
@section('plugins.MyVueComponents', true)
@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section( 'content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Modificar Datos {{$arra->clave}}</h2>
            </div>
            <div class="card-body">

                <form id="app" method="POST" action="{{ route('arras.update', ['arra'=> $arra->id]) }}"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control  @error ('nombre')is-invalid @enderror"
                            id="nombre" value="{{$arra->nombre}}" placeholder="Nombre arra">
                        @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso(gr):</label>
                        <input type="number" name="peso" class="form-control @error ('peso')is-invalid @enderror"
                            id="peso" value="{{$arra->peso}}" placeholder="gr">
                        @error('peso')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio ($):</label>
                        <input type="number" name="precio" class="form-control @error ('precio')is-invalid @enderror"
                            id="precio" value="{{$arra->precio}}" placeholder="$">
                        @error('precio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="grosor">Grosor (mm):</label>
                        <input type="number" name="grosor" class="form-control @error ('grosor')is-invalid @enderror"
                            id="grosor" value="{{$arra->grosor}}" placeholder="mm">
                        @error('grosor')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="">Imagen Frente:</label>
                                        <img style="width:100px; heigth:100px" src="/storage/{{$arra->imgFrente}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="">Imagen Vuelta:</label>
                                        <img style="width:100px; heigth:100px" src="/storage/{{$arra->imgVuelta}}" alt="" class="img-fluid">
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="">Imagen Opcional:</label>
                                        <img style="width:100px; heigth:100px" src="/storage/{{$arra->imgOpcional}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>

                    <div class="form-group">
                        <label for="imagen1">Imagen Frente:</label>
                        <input type="file" class="form-control-file " name="imagen1" accept="image/*">
                        @error('imagen1')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="imagen2">Imagen Vuelta:</label>
                        <input type="file" class="form-control-file" name="imagen2" accept="image/*">
                        @error('imagen2')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="imagen3">Imagen opcional:</label>
                        <input type="file" class="form-control-file" name="imagen3" accept="image/*">
                        @error('imagen3')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>

                            @enderror
                    </div>

                    <modificar-datos>

                    </modificar-datos>
                </form>

            </div>
        </div>
    </div>

    @endsection