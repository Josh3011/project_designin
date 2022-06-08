@extends('layouts.templatewebng')

@section('content')
    <!-- !PAGE CONTENT! -->



    <!-- content-->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <form action="/listjasa2/cari" method="GET">
                            <select class="form-select" id="kategori" name="cari" value="{{ old('cari') }}">
                                <option value="Foto">Foto</option>
                                <option value="Video">Video</option>
                                <option value="Poster">Poster</option>
                            </select>
                            <br>
                            <input class="btn btn-dark btn-sm" type="submit" value="FILTER">
                        </form>

                    </li>
                </ul>
            </div>
            <div class="col-lg-9">
                <h2> OUR PRODUCT </h2>
                <div class="row">
                    @foreach ($DetailJasa as $d)
                        <div class="col-sm-4">
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




            <!-- Pagination -->
            {{ $DetailJasa->links() }}
        </div>
    </div>
@endsection
