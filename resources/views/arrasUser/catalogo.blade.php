@extends('layouts/app')

@section( 'content')

<div class="row justify-content-center">
    <div class="col-md-10 ">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="row">


                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="metal" class="mr-1">Metal: </label>
                                    <select name="metal" class="form-control @error('metal') is-invalid @enderror  mr-2"
                                        id="metal">
                                        <option value="">-- --</option>

                                        @foreach($metales as $metal)

                                        @if(isset($metal_id))
                                            @if($metal->id == $metal_id)
                                            <option value="{{$metal->id}}" {{old('metal')==$metal->id ?
                                                'selected' : '' }} selected>{{$metal->nombre_metal}}</option>
                                            @else
                                            <option value="{{$metal->id}}" {{old('metal')==$metal->id ?
                                                'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                            @endif
                                        @else
                                        <option value="{{$metal->id}}" {{old('metal')==$metal->id ?
                                            'selected' : '' }} >{{$metal->nombre_metal}}</option>
                                        @endif

                                        


                                        @endforeach
                                    </select>
                                    @error('metal')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="frente" class="mr-1">Frente: </label>
                                    <select name="frente"
                                        class="form-control @error('frente') is-invalid @enderror mr-2" id="frente">
                                        <option value="">-- --</option>

                                        @foreach($frentes as $frente)

                                        @if(isset($frente_id))
                                            @if($frente->id == $frente_id)
                                            <option value="{{$frente->id}}" {{old('frente')==$frente->id ?
                                                'selected' : '' }} selected>{{$frente->nombre_frente}}</option>
                                             @else

                                              <option value="{{$frente->id}}" {{old('frente')==$frente->id ?
                                            'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                            @endif
                                            @else
                                            <option value="{{$frente->id}}" {{old('frente')==$frente->id ?
                                                'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                           
                                        @endif



                                        @endforeach
                                    </select>
                                    @error('frente')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="vuelta" class="mr-1">Vuelta: </label>
                                    <select name="vuelta" class="form-control @error('categoria') is-invalid @enderror"
                                        id="vuelta">

                                        <option value="">-- --</option>

                                        @foreach($vueltas as $vuelta)

                                        @if(isset($vuelta_id))
                                        @if($vuelta->id == $vuelta_id)
                                        <option value="{{$vuelta->id}}" {{old('vuelta')==$vuelta->id ?
                                            'selected' : '' }} selected>{{$vuelta->nombre_vuelta}}</option>
                                        @else
                                        <option value="{{$vuelta->id}}" {{old('vuelta')==$vuelta->id ?
                                            'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                        @endif

                                        @else
                                        <option value="{{$vuelta->id}}" {{old('vuelta')==$vuelta->id ?
                                            'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                        @endif

                                        


                                        @endforeach
                                    </select>
                                    @error('vuelta')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <button class="btn btn-outline-success my-2 my-sm-0 ml-3" type="submit">Buscar</button>
                            </form>
                        </nav>
                    </div>
                    <div class="row">

                        @foreach($arras as $arra)
                        <div class="col-md-4 text-md-center mb-4">
                            <div class="card">

                                <div class="card-body">

                                    <img style="width:150px; heigth:100px" src="/storage/{{$arra->imgFrente}}" alt=""
                                        class="card-img-top">
                                    <h6>{{$arra->clave}}</h6>
                                    <h6 class="mt-0 text-left"><i class="fa-solid fa-check"></i><small> Metal:
                                            {{$arra->metal->nombre_metal}} </small></h6>
                                    <h6 class="mt-0  text-left"><i class="fa-solid fa-check"></i><small> Frente:
                                            {{$arra->frente->nombre_frente}} </small></h6>
                                    <h6 class="mt-0  text-left"><i class="fa-solid fa-check"></i><small> Vuelta:
                                            {{$arra->vuelta->nombre_vuelta}} </small></h6>
                                    <h6 class="mt-0  text-left"><i class="fa-solid fa-check"></i><small> Tamaño:
                                            {{$arra->size->diametro}} mm </small></h6>


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
                                                                    class="d-block w-100" style="height: 63vh"
                                                                    alt="...">
                                                                <div class="carousel-caption d-none d-md-block">

                                                                </div>
                                                                <h5>Nuestro Productos</h5>
                                                                <h6 class="text-dark">Son creados con los mejores
                                                                    estandares de calidad</h6>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/storage/{{$arra->imgVuelta}}"
                                                                    class="d-block w-100" style="height: 63vh"
                                                                    alt="...">
                                                                <div class="carousel-caption d-none d-md-block">


                                                                </div>
                                                                <h5>Un diseño perfecto para momentos perfectos</h5>
                                                                <h6 class="text-dark">Encuentra lo ‘Mejor’ de lo ‘Mejor’
                                                                </h6>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/storage/{{$arra->imgOpcional}}"
                                                                    class="d-block w-100" style="height: 63vh"
                                                                    alt="...">
                                                                <div class="carousel-caption d-none d-md-block">

                                                                </div>
                                                                <h5>Tenemos un gran numero de combinaciones</h5>
                                                                <h6 class="text-dark">Consigue una combinación perfecta
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <button  class="carousel-control-prev" type="button"
                                                            data-target="#carouselExampleCaptions{{$arra->id}}"
                                                            data-slide="prev">
                                                            <span style="background-color:darkgrey " class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button"
                                                            data-target="#carouselExampleCaptions{{$arra->id}}"
                                                            data-slide="next">
                                                            <span style="background-color:darkgrey " class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cerrar</button>

                                                    <a class="btn btn-primary"
                                                        href="{{ route('arras.show', ['arra'=> $arra->id]) }}">Cotizar</a>


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
                @if(isset($metal_id) || isset($frente_id) || isset($vuelta_id))
                    {!!$arras->appends(['metal' => $metal_id,'frente' => $frente_id, 'vuelta' => $vuelta_id])->links()!!}
                    @else
                    {!!$arras->render()!!}
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts/footer')
@endsection