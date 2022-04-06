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
                <img src="/storage/upload-arras/arras1.png" class="d-block w-100" style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/upload-arras/arras2.jpg" class="d-block w-100 " style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/upload-arras/arras3.jpg" class="d-block w-100 " style="height:90vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
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
        <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
        <div class="row">
            <div class="container col-md-3">
                <div class="card shadow-sm">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/upload-arras/arras2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/arras1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/arras3.jpg" class="d-block w-100" alt="...">
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
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum dignissimos,
                            in eius sint dolorum necessitatibus, modi, quos est odit quam corrupti enim! Distinctio
                            corrupti saepe iusto! Repellat quibusdam ipsam consectetur.</p>
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
                                <img src="/storage/upload-arras/arras2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/arras1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/arras3.jpg" class="d-block w-100" alt="...">
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
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facere nisi
                            culpa error nihil quasi ipsa debitis quod quibusdam repellendus amet quae optio aliquid
                            nemo, adipisci eveniet voluptatibus ullam labore!</p>
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
                                <img src="/storage/upload-arras/arras2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/arras1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/arras3.jpg" class="d-block w-100" alt="...">
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
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et debitis magnam
                            rerum atque harum suscipit temporibus? Recusandae exercitationem soluta aut delectus,
                            perspiciatis quas facilis, saepe officia mollitia expedita labore ut.</p>
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
                    <h2 class="featurette-heading">Diseños Unicos y Personalizados </h2>
                    <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque temporibus hic
                        quibusdam ratione
                        quos, deleniti culpa nostrum illum autem facilis possimus porro blanditiis, voluptas beatae
                        mollitia sint
                        tempora. Laudantium, quasi.</p>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tenetur saepe cumque
                        dolor. Minima
                        eius odit aperiam, molestiae illo fugiat quas quibusdam, aut placeat impedit enim cum hic magni?
                        Molestias.
                    </p>
                </div>
                <div class="col-md-5 ">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/upload-arras/f2ZzfQdRhEjmYC0ic0A8pKUe95tBsXpErcFT6qdV.png"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/jk33xhlKjFmGolux3nTrCfxumuC9CMYgHovopE1K.png"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/PD5nTeUPu0DWo9DUYKOzesqeopXo7hdkOfyxF7e1.png"
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
                    <h2 class="featurette-heading">Diseños Unicos y Personalizados </h2>
                    <hr class="bg-success mb-6 mt-0 d-inline-block mx-auto" style="width:80vh; heught:2px">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque temporibus hic
                        quibusdam ratione
                        quos, deleniti culpa nostrum illum autem facilis possimus porro blanditiis, voluptas beatae
                        mollitia sint
                        tempora. Laudantium, quasi.</p>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tenetur saepe cumque
                        dolor. Minima
                        eius odit aperiam, molestiae illo fugiat quas quibusdam, aut placeat impedit enim cum hic magni?
                        Molestias.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/upload-arras/f2ZzfQdRhEjmYC0ic0A8pKUe95tBsXpErcFT6qdV.png"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/jk33xhlKjFmGolux3nTrCfxumuC9CMYgHovopE1K.png"
                                    class="d-block w-100" style="height:60vh" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/upload-arras/PD5nTeUPu0DWo9DUYKOzesqeopXo7hdkOfyxF7e1.png"
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