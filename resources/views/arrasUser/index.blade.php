@extends('layouts/app')

@section( 'content')

<div class="row justify-content-center">
    <div class="col-md-10 ">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="row">
                        @foreach($arras as $arra)
                        <div class="col-md-4 text-md-center mb-4">
                            <div class="card">
                                <div class="card-body">

                                    <img style="width:150px; heigth:100px" src="/storage/{{$arra->imgFrente}}" alt=""
                                        class="card-img-top">
                                    <h6>{{$arra->clave}}</h6>
                                    <h6>Metal: {{$arra->metal->nombre_metal}}</h6>
                                    <h6>Frente: {{$arra->frente->nombre_frente}}</h6>
                                    <h6>Vuelta: {{$arra->vuelta->nombre_vuelta}}</h6>
                                    <h6>Tamaño: {{$arra->size->diametro}} mm</h6>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-toggle="modal"
                                        data-target="#staticBackdrop{{$arra->id}}">
                                        Detalles
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{$arra->id}}" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">{{$arra->clave}}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="carouselExampleCaptions{{$arra->id}}"
                                                        class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleCaptions{{$arra->id}}"
                                                                data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleCaptions{{$arra->id}}"
                                                                data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleCaptions{{$arra->id}}"
                                                                data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/storage/{{$arra->imgFrente}}"
                                                                    class="d-block w-100" style="height: 63vh" alt="...">
                                                                <div class="carousel-caption d-none d-md-block">

                                                                </div>
                                                                <h5>Nuestro Productos</h5>
                                                                <h6 class="text-dark">Son creados con los mejores estandares de calidad</h6>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/storage/{{$arra->imgVuelta}}"
                                                                    class="d-block w-100" style="height: 63vh" alt="...">
                                                                <div class="carousel-caption d-none d-md-block">


                                                                </div>
                                                                <h5>Un diseño perfecto para momentos perfectos</h5>
                                                                <h6 class="text-dark">Encuentra lo ‘Mejor’ de lo ‘Mejor’</h6>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/storage/{{$arra->imgOpcional}}"
                                                                    class="d-block w-100" style="height: 63vh" alt="...">
                                                                <div class="carousel-caption d-none d-md-block">

                                                                </div>
                                                                <h5>Tenemos un gran numero de combinaciones</h5>
                                                                <h6 class="text-dark">Consigue una combinación perfecta</h6>
                                                            </div>
                                                        </div>
                                                        <button class="carousel-control-prev" type="button"
                                                            data-target="#carouselExampleCaptions{{$arra->id}}"
                                                            data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button"
                                                            data-target="#carouselExampleCaptions{{$arra->id}}"
                                                            data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cerrar</button>

                                                    <a class="btn btn-primary" href="{{ route('arras.show', ['arra'=> $arra->id]) }}">Cotizar</a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer justify-content-center">
                {!!$arras->render()!!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts/footer')
@endsection