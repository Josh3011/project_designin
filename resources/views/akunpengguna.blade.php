<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Design.In</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Montserrat:wght@400;500;600;700&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">



    <!-- Styles -->
    <style>
        body {
            font-family: 'Raleway';
            font-weight: 600;
            height: 100vh;
            margin: 0;
        }

        .warnahuruf {
            color: #FF3232;

        }

        .row {
            display: flex;
        }

        .column {
            flex: 33.33%;
            padding: 5px;
        }

        .navbar-brand {
            transform: translateX(-50%);
            left: 50%;
            position: absolute;
        }

        .drop {
            border-style: solid;
            border-width: 2px;
        }

        .drop-menu {
            background-color: #FF3232;
        }

        .footer {
            background-color: FF3232;
            border-top: 1px solid black;
        }

    .avatar {
    vertical-align: left;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
    }

    a:hover {
    background-color: #ddd;
    color: black;
    }

    .previous {
    background-color: #f1f1f1;
    color: black;
    }

    .next {
    background-color: #04AA6D;
    color: white;
    }

    .round {
    border-radius: 50%;
    }

    #button {
        width: 440px;
        height: 68px;
        background: #FF3232;
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.07);
        border-radius: 14px;
    }
    }
    </style>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-default">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="btn" data-toggle="dropdown">
                            <span class="bi bi-justify"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="/listjasa2">OUR PRODUCT</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand justify-content-center text-danger" href="{{ url('/home') }}">Design.In</a>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>

        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1200px">
<button class="w3-button w3-xlarge w3-circle w3-black"><</button>
<button img class="w3-button-image" src="https://img.icons8.com/material-sharp/344/settings.png"></button>
  <img class="w3-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe2ILB-K2AEY0tFwry92OPsGncRzyaeYFnZA&usqp=CAU" alt="" width="1500" height="600">
  <div class="w3-display-container w3-animate-opacity">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">  
   <div class="text" title="Go To W3.CSS">User Profile
 <hr>
<div class="text" title="Level">Level 2
</div>
</div>  
</div>
</div>


<div class="row">
    <div class="col col1">
        <div>
            <img  src="/assets/design-in/clipboard.png" alt="">
        <button class="ms-5" id="button" 
            style="
            width: 440px;
            text-align: text-center;
            color: white;
            height: 68px;
            background: #FF3232;
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.07);
            border-radius: 14px;
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 42px;
            margin-bottom: 78.68px;
            color: #FFFFFF;
        "> Mode Penjual </button>
        </div>



        <div>
            <h1 style="
            font-family: 'Raleway';
font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 21px;

color: #000000;
            " class="text-start" >Detail Transaksi</h1>
            <div class="d-flex justify-content-around px-5">
            <div>
            <img src="/assets/design-in/history.png" alt="">
            <p>Menunggu <br> Pembayaran</p>
            </div>    

            <div>
            <img src="/assets/design-in/edit.png" alt="">
            <p>Transaksi <br> berlangsung</p>
            </div>

            <div>
            <img src="/assets/design-in/archive.png" alt="">
            <p> Semua <br> Transaksi</p>
            </div>

            </div>
        </div>

    </div>
    <div class="col">
        <div class="card border px-4">
            <h2 class="text-start mb-4">Favoritmu</h2>
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-start">Tags Favorit</h2>
                    <p>Atur tags keinginanmu</p>
                </div>
                <div>
                    <img src="/assets/design-in/Vector.png" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-between my-4">
                <div>
                    <h2 class="text-start">Penjual Favorit</h2>
                    <p>Penjual yang sudah kamu favorit</p>
                </div>
                <div>
                    <img src="/assets/design-in/Vector.png" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-start">Wishlist</h2>
                    <p>Lihat produk yang sudah kamu wishlist</p>
                </div>
                <div>
                    <img src="/assets/design-in/Vector.png" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-between my-4">
                <div>
                    <h2 class="text-start">Terakhir Dilihat</h2>
                    <p>Kepoin kamu tadi ngeliatin apa</p>
                </div>
                <div>
                    <img src="/assets/design-in/Vector.png" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-start">Tags Favorit</h2>
                    <p>Atur tags keinginanmu</p>
                </div>
                <div>
                    <img src="/assets/design-in/Vector.png" alt="">
                </div>
            </div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>


</body>

</html>
