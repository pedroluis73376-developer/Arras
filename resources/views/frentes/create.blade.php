@extends('adminlte::page')

@section('title', 'Lista Metales')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form id="app" method="POST" action="{{ route('frentes.store') }}" enctype="multipart/form-data"
                    novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Nombre del Frente:</label>
                        <input type="text" name="nombre"
                            class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                            value="{{old('nombre')}}" placeholder="example...">
                        @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tipo_frente">Categoria Frente</label>
                        <select name="tipo_frente"
                            class="form-control @error('tipo_frente') is-invalid @enderror" id="tipo_frente">
                            <option value="">--seleccione--</option>
                            <option value="R">Religiosa</option>
                            <option value="NR">No religiosa</option>
                        </select>
                        @error('tipo_frente')
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
@endsection