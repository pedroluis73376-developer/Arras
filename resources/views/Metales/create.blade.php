@extends('adminlte::page')

@section('title', 'Nuevo Metal')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form id="app" method="POST" action="{{ route('metales.store') }}" enctype="multipart/form-data"
                    novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Nombre del Metal:</label>
                        <input type="text" name="nombre"
                            class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                            value="{{old('nombre')}}" placeholder="Plata...Oro">
                        @error('nombre')
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