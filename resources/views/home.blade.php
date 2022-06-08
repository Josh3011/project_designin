@extends('layouts.templatewebng')

@section('content')
    <div class="container">
        <div class="container">
            <div class="page-header">
                <div>
                    <h4>Welcome Back, {{ Auth::user()->name }}</h4>
                </div>
            </div>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/design-in/land.jpeg" alt="Los Angeles" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Fantasy</h3>
                            <p>The faculty or activity of imagining things, especially things that are impossible or
                                improbable.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/design-in/land-2.jpeg" alt="Chicago" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Peace</h3>
                            <p>Freedom from disturbance; tranquility.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/design-in/land-3.jpg" alt="New York" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Creative</h3>
                            <p>Relating to or involving the imagination or original ideas, especially in the production of an
                                artistic work.</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <br>
        <div class="container-fluid bg-3 text-center">
                <h2> OUR PRODUCT </h2>
                <br>
                <div class="row">
                    @foreach ($DetailJasa as $d)
                        <div class="col-sm-3">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="/assets/design-in/{{ $d->Foto }}">
                                </div>
                                <div class="card-body">
                                    <a href="/detail_jasa/{{ $d->ID }}"
                                        class="h3 text-center">{{ $d->Judul }}</a>
                                    <h4 class="mb-0">{{ $d->harga }}</h4>
                                    <p>{{ $d->DeskripsiJasaSingkat }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

        </div>
        {{ $DetailJasa->links() }}
        <br><br>

    </div>

    </div>
@endsection
