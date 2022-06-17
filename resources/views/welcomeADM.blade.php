@extends('adminlte::page')

@section('css')

@endsection

@section('title', 'Information')
@section( 'content')

<div class="container col-md-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-toggle="modal"
        data-target="#exampleModalCenter">
        Editar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Editar Primera Seccion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{route('informacion.updateHeader', ['informacion'=>1])}}" novalidate enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row justify-content-center">
                                    <p><small> Las Imagenes deben de tener el siguiente tamaño 720x480px</small></p>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Imagen 1:</label>
                                                <img style="width:100px; heigth:100px"
                                                    src="/storage/{{$informacion[0]->imgH1}}" alt="" class="img-fluid">

                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Imagen 2:</label>
                                                <img style="width:100px; heigth:100px"
                                                    src="/storage/{{$informacion[0]->imgH2}}" alt="" class="img-fluid">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="">Imagen 3:</label>
                                                <img style="width:100px; heigth:100px"
                                                    src="/storage/{{$informacion[0]->imgH3}}" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" id="imgH1"
                                                    name="imgH1" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="imgH1"><small>IMG1</small></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" id="imgH2"
                                                    name="imgH2" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="imgH2"><small>IMG2</small></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" id="imgH3"
                                                    name="imgH3" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="imgH3"><small>IMG3</small></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="md-form mb-0">

                                        <textarea type="text" name="esloganH1" id="esloganH1" cols="30" rows="2"
                                            class="form-control @error ('esloganH1')is-invalid @enderror" value="{{old('esloganH1')}}"
                                            placeholder="Eslogan Imagen 1">{{$informacion[0]->esloganH1}}
                
                
                                        </textarea>
                                        @error('esloganH1')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="md-form mb-0">

                                        <textarea type="text" name="esloganH2" id="esloganH2" cols="30" rows="2"
                                            class="form-control @error ('esloganH2')is-invalid @enderror" value="{{old('esloganH2')}}"
                                            placeholder="Eslogan Imagen 2">{{$informacion[0]->esloganH2}}
                
                
                                        </textarea>
                                        @error('esloganH2')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="md-form mb-0">

                                        <textarea type="text" name="esloganH3" id="esloganH3" cols="30" rows="2"
                                            class="form-control @error ('esloganH3')is-invalid @enderror" value="{{old('esloganH3')}}"
                                            placeholder="eslogan Imagen 3">{{$informacion[0]->esloganH3}}
                
                
                                        </textarea>
                                        @error('esloganH3')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </form>

            </div>
        </div>
    </div>
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
                    <h5>First slide label</h5>
                    <p>{{$informacion[0]->esloganH1}}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/{{$informacion[0]->imgH2}}" class="d-block w-100 " style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>{{$informacion[0]->esloganH2}}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/{{$informacion[0]->imgH3}}" class="d-block w-100 " style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
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


    <div class="card mt-2">
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
                                    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-toggle="modal"
    data-target="#exampleModalCenter2">
    Editar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Lo Mas Vendido Arra 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('informacion.updateLMV1', ['informacion'=>1])}}" novalidate enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row justify-content-center">
                                <p><small> Las Imagenes deben de tener el siguiente tamaño 720x480px</small></p>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 1:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV1}}" alt="" class="img-fluid">

                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 2:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV2}}" alt="" class="img-fluid">
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 3:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV3}}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV1"
                                                name="imgMV1" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV1"><small>IMG1</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV2"
                                                name="imgMV2" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV2"><small>IMG2</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV3"
                                                name="imgMV3" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV3"><small>IMG3</small></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="md-form mb-0">

                                    <textarea type="text" name="descripcion1" id="descripcion1" cols="30" rows="2"
                                        class="form-control @error ('descripcion1')is-invalid @enderror" value="{{old('descripcion1')}}"
                                        placeholder="Agrega un Descripcion del Producto">{{$informacion[0]->descripcion1}}
            
            
                                    </textarea>
                                    @error('descripcion1')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="metal_id">Metal</label>
                                <select name="metal_id"
                                    class="form-control @error('categoria') is-invalid @enderror" id="metal_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($metales as $metal)
                                    @if($informacion[0]->arra1->metal->id == $metal->id)
                                       <option selected value="{{$metal->id}}" {{old('metal_id')==$metal->id ?
                                        'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                        @else
                                        <option  value="{{$metal->id}}" {{old('metal_id')==$metal->id ?
                                            'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                    @endif
                                    
                                  

                                    @endforeach
                                </select>
                                @error('metal_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="vuelta_id">Vuelta</label>
                                <select name="vuelta_id"
                                    class="form-control @error('vuelta_id') is-invalid @enderror" id="vuelta_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($vueltas as $vuelta)
                                    @if($informacion[0]->arra1->vuelta->id == $vuelta->id)
                                        <option selected value="{{$vuelta->id}}" {{old('vuelta_id')==$vuelta->id ?
                                        'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                        @else
                                        <option value="{{$vuelta->id}}" {{old('vuelta_id')==$vuelta->id ?
                                            'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                    @endif
                                    
                                    

                                    @endforeach
                                </select>
                                @error('vuelta_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="frente_id">Frente</label>
                                <select name="frente_id"
                                    class="form-control @error('frente_id') is-invalid @enderror" id="frente_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($frentes as $frente)
                                   @if($informacion[0]->arra1->frente->id == $frente->id)
                                   <option selected value="{{$frente->id}}" {{old('frente_id')==$frente->id ?
                                    'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                   @else
                                   <option value="{{$frente->id}}" {{old('frente_id')==$frente->id ?
                                        'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                   @endif
                                    
                                   

                                    @endforeach
                                </select>
                                @error('frente_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="size_id">Tamaño</label>
                                <select name="size_id"
                                    class="form-control @error('size_id') is-invalid @enderror" id="size_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($sizes as $size)
                                   @if($informacion[0]->arra1->size->id == $size->id)
                                   <option selected value="{{$size->id}}" {{old('size_id')==$size->id ?
                                    'selected' : '' }}>{{$size->diametro}}</option>
                                   @else
                                   <option value="{{$size->id}}" {{old('size_id')==$size->id ?
                                    'selected' : '' }}>{{$size->diametro}}</option>
                                   @endif
                                    
                                   

                                    @endforeach
                                </select>
                                @error('size_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>
                           
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>

        </div>
    </div>
</div>

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
                                    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-toggle="modal"
    data-target="#exampleModalCenter3">
    Editar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar Segunda Seccion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('informacion.updateLMV2', ['informacion'=>1])}}" novalidate enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row justify-content-center">
                                <p><small> Las Imagenes deben de tener el siguiente tamaño 720x480px</small></p>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 1:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV4}}" alt="" class="img-fluid">

                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 2:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV5}}" alt="" class="img-fluid">
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 3:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV6}}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV4"
                                                name="imgMV4" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV4"><small>IMG1</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV5"
                                                name="imgMV5" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV5"><small>IMG2</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV6"
                                                name="imgMV6" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV6"><small>IMG3</small></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="md-form mb-0">

                                    <textarea type="text" name="descripcion2" id="descripcion2" cols="30" rows="2"
                                        class="form-control @error ('descripcion2')is-invalid @enderror" value="{{old('descripcion2')}}"
                                        placeholder="Agrega un Descripcion del Producto">{{$informacion[0]->descripcion2}}
            
            
                                    </textarea>
                                    @error('descripcion2')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="metal_id">Metal</label>
                                <select name="metal_id"
                                    class="form-control @error('categoria') is-invalid @enderror" id="metal_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($metales as $metal)
                                    @if($informacion[0]->arra2->metal->id == $metal->id)
                                       <option selected value="{{$metal->id}}" {{old('metal_id')==$metal->id ?
                                        'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                        @else
                                        <option  value="{{$metal->id}}" {{old('metal_id')==$metal->id ?
                                            'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                    @endif
                                    
                                  

                                    @endforeach
                                </select>
                                @error('metal_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="vuelta_id">Vuelta</label>
                                <select name="vuelta_id"
                                    class="form-control @error('vuelta_id') is-invalid @enderror" id="vuelta_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($vueltas as $vuelta)
                                    @if($informacion[0]->arra2->vuelta->id == $vuelta->id)
                                        <option selected value="{{$vuelta->id}}" {{old('vuelta_id')==$vuelta->id ?
                                        'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                        @else
                                        <option value="{{$vuelta->id}}" {{old('vuelta_id')==$vuelta->id ?
                                            'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                    @endif
                                    
                                    

                                    @endforeach
                                </select>
                                @error('vuelta_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="frente_id">Frente</label>
                                <select name="frente_id"
                                    class="form-control @error('frente_id') is-invalid @enderror" id="frente_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($frentes as $frente)
                                   @if($informacion[0]->arra2->frente->id == $frente->id)
                                   <option selected value="{{$frente->id}}" {{old('frente_id')==$frente->id ?
                                    'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                   @else
                                   <option value="{{$frente->id}}" {{old('frente_id')==$frente->id ?
                                        'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                   @endif
                                    
                                   

                                    @endforeach
                                </select>
                                @error('frente_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="size_id">Tamaño</label>
                                <select name="size_id"
                                    class="form-control @error('size_id') is-invalid @enderror" id="size_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($sizes as $size)
                                   @if($informacion[0]->arra2->size->id == $size->id)
                                   <option selected value="{{$size->id}}" {{old('size_id')==$size->id ?
                                    'selected' : '' }}>{{$size->diametro}}</option>
                                   @else
                                   <option value="{{$size->id}}" {{old('size_id')==$size->id ?
                                    'selected' : '' }}>{{$size->diametro}}</option>
                                   @endif
                                    
                                   

                                    @endforeach
                                </select>
                                @error('size_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>
                           
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>

        </div>
    </div>
</div>

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
                                   <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-toggle="modal"
    data-target="#exampleModalCenter4">
    Editar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar Tercera Seccion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('informacion.updateLMV3', ['informacion'=>1])}}" novalidate enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row justify-content-center">
                                <p><small> Las Imagenes deben de tener el siguiente tamaño 720x480px</small></p>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 1:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV7}}" alt="" class="img-fluid">

                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 2:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV8}}" alt="" class="img-fluid">
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 3:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgMV9}}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV7"
                                                name="imgMV7" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV7"><small>IMG1</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV8"
                                                name="imgMV8" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV8"><small>IMG2</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgMV9"
                                                name="imgMV9" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="imgMV9"><small>IMG3</small></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="md-form mb-0">

                                    <textarea type="text" name="descripcion3" id="descripcion3" cols="30" rows="2"
                                        class="form-control @error ('descripcion3')is-invalid @enderror" value="{{old('descripcion3')}}"
                                        placeholder="Agrega un Descripcion del Producto">{{$informacion[0]->descripcion3}}
            
            
                                    </textarea>
                                    @error('descripcion3')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="metal_id">Metal</label>
                                <select name="metal_id"
                                    class="form-control @error('categoria') is-invalid @enderror" id="metal_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($metales as $metal)
                                    @if($informacion[0]->arra3->metal->id == $metal->id)
                                       <option selected value="{{$metal->id}}" {{old('metal_id')==$metal->id ?
                                        'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                        @else
                                        <option  value="{{$metal->id}}" {{old('metal_id')==$metal->id ?
                                            'selected' : '' }}>{{$metal->nombre_metal}}</option>
                                    @endif
                                    
                                  

                                    @endforeach
                                </select>
                                @error('metal_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="vuelta_id">Vuelta</label>
                                <select name="vuelta_id"
                                    class="form-control @error('vuelta_id') is-invalid @enderror" id="vuelta_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($vueltas as $vuelta)
                                    @if($informacion[0]->arra3->vuelta->id == $vuelta->id)
                                        <option selected value="{{$vuelta->id}}" {{old('vuelta_id')==$vuelta->id ?
                                        'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                        @else
                                        <option value="{{$vuelta->id}}" {{old('vuelta_id')==$vuelta->id ?
                                            'selected' : '' }}>{{$vuelta->nombre_vuelta}}</option>
                                    @endif
                                    
                                    

                                    @endforeach
                                </select>
                                @error('vuelta_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="frente_id">Frente</label>
                                <select name="frente_id"
                                    class="form-control @error('frente_id') is-invalid @enderror" id="frente_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($frentes as $frente)
                                   @if($informacion[0]->arra3->frente->id == $frente->id)
                                   <option selected value="{{$frente->id}}" {{old('frente_id')==$frente->id ?
                                    'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                   @else
                                   <option value="{{$frente->id}}" {{old('frente_id')==$frente->id ?
                                        'selected' : '' }}>{{$frente->nombre_frente}}</option>
                                   @endif
                                    
                                   

                                    @endforeach
                                </select>
                                @error('frente_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="size_id">Tamaño</label>
                                <select name="size_id"
                                    class="form-control @error('size_id') is-invalid @enderror" id="size_id">
                                    <option value="">--seleccione--</option>

                                    @foreach($sizes as $size)
                                   @if($informacion[0]->arra3->size->id == $size->id)
                                   <option selected value="{{$size->id}}" {{old('size_id')==$size->id ?
                                    'selected' : '' }}>{{$size->diametro}}</option>
                                   @else
                                   <option value="{{$size->id}}" {{old('size_id')==$size->id ?
                                    'selected' : '' }}>{{$size->diametro}}</option>
                                   @endif
                                    
                                   

                                    @endforeach
                                </select>
                                @error('size_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>
                           
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>

        </div>
    </div>
</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="">
        <div class="card col-md-12 mt-2">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-7 mt-1 align-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-toggle="modal"
                                 data-target="#exampleModalCenter5">
                                 Editar
                                </button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar Articulo 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('informacion.updateFotter1', ['informacion'=>1])}}" novalidate enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row justify-content-center">
                                <p><small> Las Imagenes deben de tener el siguiente tamaño 2048x2048px</small></p>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 1:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgF1}}" alt="" class="img-fluid">

                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 2:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgF2}}" alt="" class="img-fluid">
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Imagen 3:</label>
                                            <img style="width:100px; heigth:100px"
                                                src="/storage/{{$informacion[0]->imgF3}}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgF1"
                                                name="imgF1" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label text-left" for="imgF1"><small>IMG1</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgF2"
                                                name="imgF2" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label text-left" for="imgF2"><small>IMG2</small></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*" id="imgF3"
                                                name="imgF3" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label text-left" for="imgF3"><small>IMG3</small></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                
                                <input type="text" name="titulo"
                                    class=" input-lg form-control  @error ('direccion')is-invalid @enderror"
                                    id="titulo" value="{{$informacion[0]->titulo}}"
                                    placeholder="Escriba un titulo">
                                @error('titulo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="md-form mb-0">

                                    <textarea type="text" name="descripcion4" id="descripcion4" cols="30" rows="2"
                                        class="form-control @error ('descripcion4')is-invalid @enderror" value="{{old('descripcion4')}}"
                                        placeholder="Agrega un Descripcion del Producto">{{$informacion[0]->descripcion4}}
            
            
                                    </textarea>
                                    @error('descripcion4')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            
                           
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>

        </div>
    </div>
</div>

                            </div>

                        </div>
                        <h2 class="featurette-heading">{{$informacion[0]->titulo}} </h2>
                        <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
                        <p class="lead">
                            {{$informacion[0]->descripcion4}}
                        </p>

                    </div>
                    <div class="col-md-5 ">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/storage/{{$informacion[0]->imgF1}}" class="d-block w-100"
                                        style="height:60vh" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$informacion[0]->imgF2}}" class="d-block w-100"
                                        style="height:60vh" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$informacion[0]->imgF3}}" class="d-block w-100"
                                        style="height:60vh" alt="...">
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

    <div class="">
        <div class="card col-md-12 mt-2">
            <div class="card-body">
                
                <div class="row text-center">
                    
                    <div class="col-md-7 mt-1 order-md-2 align-left">

                        <button type="button" class="btn btn-sm btn-outline-primary text-left" data-toggle="modal"
                        data-target="#exampleModalCenter6">
                        Editar
                       </button>
                          
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Editar Articulo 2</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="POST" action="{{route('informacion.updateFotter2', ['informacion'=>1])}}" novalidate enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="row justify-content-center">
                                                    <p><small> Las Imagenes deben de tener el siguiente tamaño 2048x2048px</small></p>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label for="">Imagen 1:</label>
                                                                <img style="width:100px; heigth:100px"
                                                                    src="/storage/{{$informacion[0]->imgF4}}" alt="" class="img-fluid">
                    
                                                            </div>
                                                        </div>
                    
                                                    </div>
                    
                    
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label for="">Imagen 2:</label>
                                                                <img style="width:100px; heigth:100px"
                                                                    src="/storage/{{$informacion[0]->imgF5}}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                    
                    
                                                    </div>
                    
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <label for="">Imagen 3:</label>
                                                                <img style="width:100px; heigth:100px"
                                                                    src="/storage/{{$informacion[0]->imgF6}}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                    
                                                    </div>
                                                    
                                                </div>
                    
                                                <div class="row">
                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" accept="image/*" id="imgF4"
                                                                    name="imgF4" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label text-left" for="imgF4"><small>IMG1</small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" accept="image/*" id="imgF5"
                                                                    name="imgF5" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label text-left" for="imgF5"><small>IMG2</small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" accept="image/*" id="imgF6"
                                                                    name="imgF6" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label text-left" for="imgF6"><small>IMG3</small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="form-group">
                                                    
                                                    <input type="text" name="titulo2"
                                                        class=" input-lg form-control  @error ('direccion')is-invalid @enderror"
                                                        id="titulo" value="{{$informacion[0]->titulo2}}"
                                                        placeholder="Escriba un titulo">
                                                    @error('titulo')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                    
                                                <div class="form-group">
                                                    <div class="md-form mb-0">
                    
                                                        <textarea type="text" name="descripcion5" id="descripcion5" cols="30" rows="2"
                                                            class="form-control @error ('descripcion5')is-invalid @enderror" value="{{old('descripcion5')}}"
                                                            placeholder="Agrega un Descripcion del Producto">{{$informacion[0]->descripcion5}}
                                
                                
                                                        </textarea>
                                                        @error('descripcion5')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                    
                                                
                                               
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                                </form>
                    
                            </div>
                        </div>
                    </div>
                    <h2 class="featurette-heading ">{{$informacion[0]->titulo2}} </h2>
                        <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
                        <p class="lead">{{$informacion[0]->descripcion5}}</p>

                    </div>
                    <div class="col-md-5 order-md-1">
                        <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/storage/{{$informacion[0]->imgF4}}" class="d-block w-100"
                                        style="height:60vh" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$informacion[0]->imgF5}}" class="d-block w-100"
                                        style="height:60vh" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/{{$informacion[0]->imgF6}}" class="d-block w-100"
                                        style="height:60vh" alt="...">
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
</div>

@endsection