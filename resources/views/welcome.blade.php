@extends('layouts/app')

@section('content')

<div class="">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/{{$informacion[0]->imgH1}}" class="d-block w-100" style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nuestros Productos</h5>
                    <p>{{$informacion[0]->esloganH1}}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/{{$informacion[0]->imgH2}}" class="d-block w-100 " style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nosotros</h5>
                    <p>{{$informacion[0]->esloganH2}}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/{{$informacion[0]->imgH3}}" class="d-block w-100 " style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Somos tu mejor Opcion</h5>
                    <p>{{$informacion[0]->esloganH3}}</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h2 class="featurette-heading">Lo Mas Vendido </h2>
        <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; height:2px">
        <div class="row">
            <div class="container col-md-3">
                <div class="card shadow-sm">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/{{$informacion[0]->imgMV1}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgMV2}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgMV3}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>


                    <div class="card-body">
                        <p class="card-text">{{$informacion[0]->descripcion1}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container col-md-3">
                <div class="card shadow-sm">

                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/{{$informacion[0]->imgMV4}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgMV5}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgMV6}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls2"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls2"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>

                    <div class="card-body">
                        <p class="card-text">{{$informacion[0]->descripcion2}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container col-md-3">

                <div class="card shadow-sm">

                    <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/{{$informacion[0]->imgMV7}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgMV8}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgMV9}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls3"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls3"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>

                    <div class="card-body">
                        <p class="card-text">{{$informacion[0]->descripcion3}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="row featurette">
    <div class="card col-md-12">
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-7 mt-1 align-center">
                    <h2 class="featurette-heading">{{$informacion[0]->titulo}} </h2>
                    <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
                    <p class="lead">{{$informacion[0]->descripcion4}}</p>
                    
                </div>
                <div class="col-md-5 ">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/{{$informacion[0]->imgF1}}"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgF2}}"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgF3}}"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row featurette">
    <div class="card col-md-12">
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-7 mt-1 order-md-2 align-center">
                    <h2 class="featurette-heading">{{$informacion[0]->titulo2}}</h2>
                    <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
                    <p class="lead">{{$informacion[0]->descripcion5}}</p>
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/{{$informacion[0]->imgF4}}"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgF5}}"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/{{$informacion[0]->imgF6}}"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade2"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade2"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
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