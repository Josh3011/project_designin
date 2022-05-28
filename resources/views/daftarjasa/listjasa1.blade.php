@extends('layouts.app')

@section('content')

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Video Editing</h1>
    <p>Berbagai macam kebutuhan jasa edit video tersedia disini</p>
  </div>

<div class="row ">
  <div class="col-sm-4">
    <div class="card">
      <img src="fotolistjasa/reels.jpeg"  class="img-rounded" style="width:100%">
      <div class="container">
        <h2>Tiktok/Instagram Reels</h2>
        <p class="title">Simple Video</p>
        <p>menyediakan editing video simple berdurasi 1-2 menit</p>
        <p>Start from Rp20.000</p>
        <p><a href="/detailjasa/deskripsi" class="btn btn-primary"> Lihat </a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="card">
      <img src="fotolistjasa/hyper.jpeg" class="img-rounded"  style="width:100%">
      <div class="container">
        <h2>Hyperlapses Video</h2>
        <p class="title">Cinematic Video</p>
        <p>Menyediakan jasa edit video hyperlapses berkualitas</p>
        <p>Start From Rp50.000</p>
        <p><a href="/detailjasa/deskripsi" class="btn btn-primary"> Lihat </a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <img src="fotolistjasa/food.jpeg" class="img-rounded" style="width:100%">
      <div class="container">
        <h2>Food Video</h2>
        <p class="title">Cinematic Video</p>
        <p>Menyediakan jasa video editing untuk video makanan agar terlihat lebih menarik</p>
        <p>Start From Rp40.000</p>
        <p><a href="/detailjasa/deskripsi" class="btn btn-primary"> Lihat </a></p>
      </div>
    </div>
  </div>
</div>
@endsection


