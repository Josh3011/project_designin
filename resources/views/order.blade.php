@extends('layouts.templatewebng')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Montserrat:wght@400;500;600;700&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body style="overflow-x: hidden;">

  <div class="container">

    {{-- <nav class="row mt-4 px-3 justify-content-between">
        <div class="col-4"><img style="width: 60.92px; height: 68.31px;" src="/assets/design-in/hamburger.png" alt=""></div>
        <div class="col-4 align-self-center text-center "><img style="width: 130px; height: 35px;" src="/assets/design-in/Design.in.png" alt=""></div>
        <div class="col-4 align-self-center text-end"><img style="width: 57px; height: 50.67px;" src="/assets/design-in/search.png" alt=""></div>
    </nav> --}}



    @foreach ($DetailJasa as $jasa)
    <div class="row" style="margin-top: 100px;">
      <div class="col-7 review">
        <h1 class="mb-5">Jasa yang dibeli</h1>

        <div class="row">
          <div class="col-3 px-0">
            <img style="width: 164px; height: 145px; border-radius: 10px;" src="/assets/design-in/{{ $jasa->Foto }}" alt="">
          </div>
          <div class="col-5">
            <h3>{{$jasa->Judul}}</h3>
            <h4 class="mt-3">Tulis catatan</h4>
          </div>
        </div>

        <div class="mt-5 desc">
          <h4>Deskripsi jasa</h4>
          <p class="my-4">{{$jasa->DeskripsiJasa}}</p>
          <p class="my-0">Bust up, HD, kanvas A4 (bisa custom)</p>
          <p class="mb-4">300-350 Dpi </p>
          <div class="row">
            <div class="col-8">
              <div class="d-flex justify-content-between">
                <p class="my-0">Resolusi Tinggi</p>
                <i style="font-size: 26px; color: #FF3232 " class='bx bx-check  orange'></i>
              </div>
              <div class=" d-flex justify-content-between">
                <p class="my-0">Warna</p>
                <i style="font-size: 26px; color: #FF3232 " class='bx bx-check  orange'></i>
              </div>
              <div class="d-flex justify-content-between">
                <p class="my-0">Full body</p>
                <i style="font-size: 26px; color: #c6c6c6 " class='bx bx-check '></i>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div style="border-top: 1px solid #D6D6D6; border-bottom: 1px solid #D6D6D6;" class="col-8 py-4">
              <div class="d-flex justify-content-between ">
                  <p> <img style="width: 26px; height: 26px" class="d-inline" src="/assets/design-in/clock.png" alt=""> Pengiriman 5 Hari</p>
                  <h5> {{$jasa->harga}}</h5>
              </div>
              <div class="d-flex justify-content-between ">
                <p> <img style="width: 26px; height: 26px" class="d-inline" src="/assets/design-in/repeat.png" alt=""> 1 Kesempatan revisi</p>
                <h5></h5>
            </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-9 ">
          <div style="border: 1px solid #FF3322" class="py-5 ps-3 pe-5 rounded" >
            <form action="/order/{{$jasa->ID}}" method="post">
                {{csrf_field()}}
            <div class="d-flex justify-content-between list ">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="100000" name="nama_addons[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                3 Hari Pengerjaan Ekstra Cepat
              </label>
            </div>
            <div>
              <h2>Rp. 100.000</h2>
            </div>
          </div>
          <div class="d-flex justify-content-between list py-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="70000" name="nama_addons[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Revisi Tambahan
              </label>
            </div>
            <div>
              <h2>Rp. 70.000</h2>
            </div>
          </div>
          <div class="d-flex justify-content-between list" >
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="70000" name="nama_addons[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                File Pengerjaan
              </label>
            </div>
            <div>
              <h2>Rp. 70.000</h2>
            </div>
          </div>
          <div class="d-flex justify-content-between list py-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="100000" name="nama_addons[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Karakter Tambahan
              </label>
            </div>
            <div>
              <h2>Rp. 100.000</h2>
            </div>
          </div>
          <div class="d-flex justify-content-between list ">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="100000" name="nama_addons[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Background/Latar Tambahan
              </label>
            </div>
            <div>
              <h2>Rp. 100.000</h2>
            </div>
          </div>
          <div class="d-flex justify-content-between list py-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="300000" name="nama_addons[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Penggunaan Komersial
              </label>
            </div>
            <div>
              <h2>Rp. 300.000</h2>
            </div>
          </div>
          <button class="form-control btn btn-danger text-white" type="submit">Submit</button>

          </div>

        </div>
        </div>

        </div>
      </div>


      <div style="width: 483px; padding-left: 35px;" class="col-5 cart">
        <div style="margin-top: 60px;">

          <div class="row">
            <div class="col-11">
          <div class="d-flex justify-content-between ">

          </div>
        </div>
        </div>
        <div class="row tagihan mt-5">
          <div  class="col-11">
            <div  class="d-flex justify-content-between align-items-center">
              <h2>Total Tagihan</h2>
              <h4> {{$jasa->harga}}</h4>

            </div>
            <a href="metode_pembayaran">
                <div style="margin-top: 60px;">
            <button type="submit" class="mt-5"> <img src="/assets/design-in/cart.png" style="width: 39px;" alt=""> Beli Sekarang </button>
        </div>
        </a>
    </form>
          </div>
        </div>
        @endforeach
        </div>
      </div>

    </div>
  </div>


    <script src="https://unpkg.-om/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://cdn.js-elivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
