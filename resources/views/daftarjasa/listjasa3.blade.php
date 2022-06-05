@extends('layouts.templateweb')

@section('content')


    <!-- Sidebar/menu -->
    <div class="navbar col-sm-2">
        <h3> FILTER : </h3>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Harga</a></li>
          <li><a href="#">Rating</a></li>
        </ul>
    </div>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="poster">
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                    class="fa fa-bars"></i></span>
            <div class="w3-container">
                <h1><b>POSTER</b></h1>
            </div>
        </header>

        <!-- First Photo Grid-->
        @foreach ($DetailJasa as $d )
        <div class="col-sm-4">
            <div class="product-item">
                <a href="#"><img height="300" width="200" src="/assets/design-in/{{$d->Foto}}" alt="">
                </a>
                <div class="down-content">
                    <a href="#"><h4>{{$d->Judul}}</h4></a>
                    <h6>{{$d->harga}}</h6>
                    <p>{{$d->DeskripsiJasa}}</p>
                    <span>Review (1)</span>
                </div>
            </div>
        </div><br>
        @endforeach

        <!-- Pagination -->
        <div class="container">
            <ul class="pagination center">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
         </div>
    </div>



@endsection
