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
                                
                                    <img style="width:100px; heigth:100px" src="/storage/{{$arra->imgFrente}}" alt="" class="img-fluid">
                                    <h6>{{$arra->clave}}</h6>
                                    <h6>Metal: {{$arra->metal->nombre_metal}}</h6>
                                    <h6>Frente: {{$arra->frente->nombre_frente}}</h6>
                                    <h6>Vuelta: {{$arra->vuelta->nombre_vuelta}}</h6>
                                    <h6>Tamaño: {{$arra->size->diametro}} mm</h6>
                                    
                              
                                        <a href="" class="btn btn-dark">Cotizar</a>
                                 
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