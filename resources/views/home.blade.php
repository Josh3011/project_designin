@extends('layouts.templateweb')

@section('content')
    <div class="container">
        <div class="container">
            <div class="page-header">
                <div>
                  <h4>Welcome Back, {{ Auth::user()->name }}</h4>
                </div>
              </div>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="/assets/design-in/land.jpeg" alt="Fantasy" width="1200" height="700">
                    <div class="carousel-caption">
                      <h3>Fantasy</h3>
                      <p>The faculty or activity of imagining things, especially things that are impossible or improbable.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="/assets/design-in/land-2.jpeg" alt="Peace" width="1200" height="700">
                    <div class="carousel-caption">
                      <h3>Peace</h3>
                      <p>Freedom from disturbance; tranquility.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="/assets/design-in/land-3.jpg" alt="Creative" width="1200" height="700">
                    <div class="carousel-caption">
                      <h3>Creative</h3>
                      <p>Relating to or involving the imagination or original ideas, especially in the production of an artistic work.</p>
                    </div>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="container-fluid bg-3 text-center">
                <h3>OUR PRODUCT</h3><br>
            @foreach ($DetailJasa as $d)

                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="/assets/design-in/{{ $d->Foto }}" class="img-responsive" style="width:500px"
                                    alt="Image">
                                <div class="caption">
                                    <a href="/detail_jasa/{{ $d->ID }}">
                                        <h4>{{ $d->Judul }}</h4>
                                    </a>
                                    <h6>{{ $d->harga }}</h6>
                                    <p>{{ $d->DeskripsiJasa }}</p>
                                </div>
                            </div>
                        </div>

            @endforeach
            <center>{{ $DetailJasa->links()  }}</center>
            </div><br><br>

        </div>

    </div>
@endsection
