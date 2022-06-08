@extends('layouts.templatewebng')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($DetailJasa as $d)
                <div class="col-6">
                    <img src="/assets/design-in/{{ $d->Foto }}" style="width: 500px;" alt="">

                    <hr class="bg-dark border-2 border-top border-secondary">
                    <div class="d-flex justify-content-start py-1">
                        <div class="pe-5">
                            <img class='x' src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" alt="">
                        </div>
                        <div class="px-5">
                            <img class='x' src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" alt="">
                        </div>
                        <div class="px-5">
                            <img class='x' src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" alt="">
                        </div>
                        <div></div>
                    </div>
                    <hr class="bg-dark border-2 border-top border-secondary">
                    <h3 class="mt-4"><b>Ulasan Pembeli </b> (57)</h3>

                    <br>

                    <div class="d-flex justify-content-start">
                        <div>
                            <center>
                                <h1>4.7<span style="font-size: 20px;">/5</span></h1>
                                <p><i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                                        class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                                        class="fas fa-star-half-alt text-warning"></i></p>
                            </center>
                        </div>
                        <div style="margin-left: 120px;">
                            <p><i class="fas fa-star text-warning"></i> <b>5</b> <span class="bar">Lorem ipsum
                                    dolor, sit
                                    amet</span>
                            </p>

                            <p><i class="fas fa-star text-warning"></i> <b>4</b> <span class="bar">Lor</span>
                            </p>

                            <p><i class="fas fa-star text-warning"></i> <b>3</b> <span class="bar">L</span>
                            </p>

                            <p><i class="fas fa-star text-warning"></i> <b>2</b> <span class="bar">L</span>
                            </p>

                            <p><i class="fas fa-star text-warning"></i> <b>1</b> <span class="bar">L</span>
                            </p>
                        </div>
                    </div>



                    <!-- End Col -->
                </div>

                <div class="col-4 mx-4">
                    <h1 class="fw-bold" style="font-size: 3.3rem;">{{ $d->Judul }}</h1>
                    <p class="d-flex justify-content-between">
                        <span class="badge text-bg-danger">Illustration</span> <span class="badge text-bg-danger">Editing</span> <span class="badge text-bg-danger">Artistic</span>
                    </p>
                    <table class="table" style="border-top: 1px solid grey;border-bottom: 1px solid grey;">
                        <tr>
                            <th style="border-bottom: 3px solid rgb(238, 78, 104);text-align: center;">Detail</th>
                            <th style="text-align: center;">Ulasan</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </table>
                    <p>{{ $d->DeskripsiJasa }}</p>
                    <hr class="bg-dark border-2 border-top border-secondary">

                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="/assets/design-in/profile-icon.png" style="width: 50px;" class="rounded"
                                    alt="">
                            </div>
                            <div style="margin-left: 20px;">
                                <p>AkunPenjual<br><b><span class="pink">Online</span></b></p>
                            </div>
                        </div>

                        <div style="vertical-align: middle;position: relative;top: 20px;">
                            <button class="btn btn-outline-danger btn-sm">Follow +</button>
                        </div>

                    </div>
                    <p><i class="fas fa-star pink"></i><b>4.5</b> rata-rata ulasan</p>

                    <hr class="bg-dark border-2 border-top border-secondary">
                    <br><br>
                    <a href="/order/{{ $d->ID }}" class="btn btn-danger" role="button">Order</a>


                    <!-- End Col -->
                </div>

                <div class="d-flex justify-content-start mt-5 mb-3">
                    <div>
                        Foto dari pembeli (28)
                    </div>
                    <div style="margin-left: 490px;">
                        <b><span class="pink">See all</span></b>
                    </div>
                </div>

                <div class="d-flex justify-content-start">
                    <div class="me-5">
                        <img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded"
                            alt="">
                    </div>
                    <div class="me-5">
                        <img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded"
                            alt="">
                    </div>
                    <div class="me-5">
                        <img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded"
                            alt="">
                    </div>
                    <div class="me-5">
                        <img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded"
                            alt="">
                    </div>
                    <div class="me-5">
                        <img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded"
                            alt="">
                    </div>
                </div>



                <div>
                    <hr width="700">
                    <div>
                        <h3>Rekomendasi produk lainnya</h3>
                    </div>

                </div>

                <div class="d-flex justify-content-start">
                    <div class="me-5">
                        <div class="card" style="width: 150px;">
                            <img src="/assets/design-in/data.jpeg" class="card-img-top" width="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Deskripsi tentang konten yang dijual</p>
                                <div class="d-flex justify-content-between">
                                    <div><i class="fas fa-star pink"></i> <b>4.7</b></div>
                                    <div>lorem, ipsum</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="me-5">
                        <div class="card" style="width: 150px;">
                            <img src="/assets/design-in/data.jpeg" class="card-img-top" width="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Deskripsi tentang konten yang dijual</p>
                                <div class="d-flex justify-content-between">
                                    <div><i class="fas fa-star pink"></i> <b>4.7</b></div>
                                    <div>lorem, ipsum</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="me-5">
                        <div class="card" style="width: 150px;">
                            <img src="/assets/design-in/data.jpeg" class="card-img-top" width="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Deskripsi tentang konten yang dijual</p>
                                <div class="d-flex justify-content-between">
                                    <div><i class="fas fa-star pink"></i> <b>4.7</b></div>
                                    <div>lorem, ipsum</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="me-5">
                        <div class="card" style="width: 150px;">
                            <img src="/assets/design-in/data.jpeg" class="card-img-top" width="100px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                <p class="card-text">Deskripsi tentang konten yang dijual</p>
                                <div class="d-flex justify-content-between">
                                    <div><i class="fas fa-star pink"></i> <b>4.7</b></div>
                                    <div>lorem, ipsum</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



        </div>
    </div>
    @endforeach
@endsection
