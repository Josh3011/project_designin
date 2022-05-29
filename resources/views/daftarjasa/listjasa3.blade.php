@extends('layouts.templateweb')

@section('content')
<body class="w3-light-grey w3-content" style="max-width:2000px">

    <!-- Sidebar/menu -->
    <div class="navbar col-sm-2">
        <h3> FILTER : </h3>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Harga</a></li>
          <li><a href="#">Rating</a></li>
          <li><a href="#">Ya</a></li>
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
        <div class="container-fluid bg-5 text-center">
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="fotolistjasa/food.jpeg" class="img-responsive" style="width:500px" alt="Image">
                    <p>Some text..</p>
                  </div>
                  <div class="col-sm-4">
                    <img src="#" class="img-responsive" style="width:100%" alt="Image">
                    <p>Some text..</p>
                  </div>
                  <div class="col-sm-4">
                    <img src="#" class="img-responsive" style="width:100%" alt="Image">
                    <p>Some text..</p>
                  </div>
            </div>
          </div><br>

        <!-- Second Photo Grid-->
        <div class="container-fluid bg-5 text-center">
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <img src="fotolistjasa/food.jpeg" class="img-responsive" style="width:500px" alt="Image">
                    <p>Some text..</p>
                  </div>
                  <div class="col-sm-4">
                    <img src="#" class="img-responsive" style="width:100%" alt="Image">
                    <p>Some text..</p>
                  </div>
                  <div class="col-sm-4">
                    <img src="#" class="img-responsive" style="width:100%" alt="Image">
                    <p>Some text..</p>
                  </div>
            </div>
          </div><br>

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
