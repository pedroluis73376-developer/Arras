@extends('adminlte::page')

@section('title', 'Nuevo Tamaño')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form id="app" method="POST" action="{{ route('vueltas.store') }}" enctype="multipart/form-data"
                    novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="vuelta">Nombre:</label>
                        <input type="text" name="vuelta"
                            class="form-control @error ('vuelta')is-invalid @enderror" id="vuelta"
                            value="{{old('vuelta')}}" placeholder="example">
                        @error('vuelta')
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