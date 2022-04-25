@extends('layouts/app')

@section( 'content')

<div class="card">
    <div class="card-body">
        @if($arra->frente_i <=8) <h2 class="featurette-heading">{{$arra->clave}} / No Religioso</h2>
            @endif
            @if($arra->frente_i >= 9)
            <h2 class="featurette-heading">{{$arra->clave}} / Religioso</h2>
            @endif

            <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; height:2px">
            <div class="row">
                <div class="container col-md-5">
                    <div class="card shadow-sm">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
                            style="border-radius: 21px 21px 21px 21px;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/storage/{{$arra->imgFrente}}" class="d-block w-100" style="height:60vh"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$arra->imgFrente2}}" class="d-block w-100" style="height:60vh"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$arra->imgVuelta}}" class="d-block w-100" style="height:60vh"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$arra->imgVuelta2}}" class="d-block w-100" style="height:60vh"
                                        alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                                data-slide="prev">
                                <span style="background-color:darkgrey " class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                                data-slide="next">
                                <span style="background-color:darkgrey " class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>


                        <div class="card-body">
                            <h5 class="text-muted">
                                <i class="fa-solid fa-check"></i> {{$arra->metal->nombre_metal}}
                            </h5>
                            <h5 class="text-muted">
                                <i class="fa-solid fa-check"></i> {{$arra->frente->nombre_frente}}
                            </h5>
                            <h5 class="text-muted">
                                <i class="fa-solid fa-check"></i> {{$arra->size->diametro}} mm
                            </h5>

                        </div>
                    </div>
                </div>

                <div class="container col-md-5">

                    <div class="card shadow-sm">

                        <div class="md-form mb-0">

                            @guest
                            <form id="app" method="POST" action="{{ route('contactos.store')}}"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row  mb-2">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <textarea type="text" name="mensaje" id="mensaje" cols="20" rows="10"
                                                class="form-control @error ('mensaje')is-invalid @enderror"
                                                value="{{old('mensaje')}}"
                                                placeholder="escriba alguna especificacion que seria de su agrado en el producto">
                                         </textarea>
                                            @error('mensaje')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 mb-2">
                                    <div class="md-form mb-0">
                                        <input type="text" name="email"
                                            class="form-control @error ('email')is-invalid @enderror" id="email"
                                            value="{{old('email')}}" placeholder="Email ">
                                        @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-8 mb-2">
                                    <div class="md-form mb-0">
                                        <input type="text" name="nombre"
                                            class="form-control @error ('nombre')is-invalid @enderror" id="nombre"
                                            value="{{old('nombre')}}" placeholder="Nombre ">
                                        @error('nombre')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" name="asunto" id="asunto" value="cotizacion {{$arra->clave}}">
                                <guardar-cotizacion class="ml-3"></guardar-cotizacion>
                          

                                </form>
                            @else
                            <form id="app" method="POST" action="{{ route('cotizaciones.store') }}"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row  mb-2">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <textarea type="text" name="mensaje" id="mensaje" cols="20" rows="10"
                                                class="form-control @error ('mensaje')is-invalid @enderror"
                                                value="{{old('mensaje')}}"
                                                placeholder="escriba alguna especificacion que seria de su agrado en el producto">
                                         </textarea>
                                            @error('mensaje')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="arra" id="arra" value="{{$arra->id}}">

                               

                               <guardar-cotizacion class="ml-3"></guardar-cotizacion>
                            </form>
                            @endguest


                            

                        </div>
                        <div class="row">
                            <div class="card-body">
                                <p class="card-text">Agradecemos su interes, espere una pronta respuesta de nosotros.
                                    Saludos..
                                </p>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
    </div>
</div>


@section('footer')
@include('layouts/footer')
@endsection
@endsection