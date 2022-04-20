@extends('layouts/app')

@section( 'content')
<div class="container">
    <section class="mb-4">
        <h2 class="h1-responsive featurette-heading text-center my-5">Contactanos</h2>
        <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna pregunta? Por favor no dudes en Contactarnos
            directamente.
            Nuestro equipo se comunicara contigo en cuestion de horas para ayudarte</p>
    </section>
</div>
<div class="row justify-content-center align-items-center">
    <div class="col-md-9 mb-5 ">

        <form id="app" method="POST" action="{{ route('contactos.store')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row">
                @guest
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" name="nombre" class="form-control @error ('nombre')is-invalid @enderror"
                            id="nombre" value="{{old('nombre')}}" placeholder="Nombre ">
                        @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                    @else
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" name="nombre" class="form-control @error ('nombre')is-invalid @enderror"
                                id="nombre" value="{{auth()->user()->name}}" placeholder="Nombre ">
                            @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                @endguest
                
                @guest
                    <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" name="email" class="form-control @error ('email')is-invalid @enderror"
                            id="email" value="{{old('email')}}" placeholder="Email ">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
                @else
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" name="email" class="form-control @error ('email')is-invalid @enderror"
                            id="email" value="{{auth()->user()->email}}" placeholder="Email ">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
                @endguest

                

            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" name="asunto" class="form-control @error ('asunto')is-invalid @enderror"
                            id="asunto" value="{{old('asunto')}}" placeholder="Asunto">
                        @error('asunto')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-md-12">
                    <div class="md-form mb-0">

                        <textarea type="text" name="mensaje" id="mensaje" cols="30" rows="5"
                            class="form-control @error ('mensaje')is-invalid @enderror" value="{{old('mensaje')}}"
                            placeholder="Mensaje">


                        </textarea>
                        @error('mensaje')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <enviar-mensaje>

            </enviar-mensaje>
        </form>
    </div>
</div>



@endsection

@section('footer')
@include('layouts/footer')
@endsection