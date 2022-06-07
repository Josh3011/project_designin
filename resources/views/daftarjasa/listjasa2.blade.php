@extends('layouts.templateweb')

@section('content')

    <body class="w3-light-grey w3-content" style="max-width:1600px">

        <!-- FILTER -->
        <div class="navbar col-sm-2">
            <h3> FILTER : </h3>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <p><b>Kategori:</b></p>
                    <form action="/listjasa2/cari" method="GET">
                        <select class="dropdown" id="kategori" name="cari" value="{{ old('cari') }}">
                            <option value="Foto">Foto</option>
                            <option value="Video">Video</option>
                            <option value="Poster">Poster</option>
                        </select>

                        <input class="form-control btn-danger" type="submit" value="FILTER">
                    </form>
                </li>
                <li>
                    <p><b>Judul:</b></p>
                    <form action="/listjasa2/cari" method="GET">
                        <input class="form-control" type="text" name="cari" placeholder="Cari Jasa berdasarkan Judul"
                            value="{{ old('cari') }}">
                        <input class="form-control btn-danger btn-xs" type="submit" value="FILTER">
                    </form>
                </li>
                <li>
                    <p><b>Harga:</b></p>
                    <form action="/listjasa2/cari" method="GET">
                        <input class="form-control" type="text" name="cari" placeholder="Cari jasa Berdasarkan Harga"
                            value="{{ old('cari') }}">
                        <input class="form-control btn-danger btn-xs" type="submit" value="FILTER">
                    </form>
                </li>

            </ul>
        </div>


        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px">

            <!-- Header -->
            <header id="foto">
                <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                        class="fa fa-bars"></i></span>
                <div class="w3-container">
                    <h1><b>Our Product</b></h1>
                </div>

            </header>


            <!-- Second Photo Grid-->
            @foreach ($DetailJasa as $d)
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="/assets/design-in/{{ $d->Foto }}" class="img-responsive" style="width:500px"
                            alt="Image">
                        <div class="caption">
                            <a href="/detail_jasa/{{ $d->ID }}">
                                <h4>{{ $d->Judul }}</h4>
                            </a>
                            <h6>{{ $d->harga }}</h6>
                            <p>{{ $d->DeskripsiJasaSingkat }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- Pagination -->
            {{ $DetailJasa->links() }}
        </div>
    @endsection
