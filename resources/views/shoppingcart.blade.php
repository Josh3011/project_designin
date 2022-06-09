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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

        html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
        .button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .button {background-color: red;}

        #main {
        width: 300px;
        height: 1px;
        border: 1px solid white;
        display: flex;
        }

        #main div {
        -ms-flex: 1;  /* IE 10 */
        flex: 1;
        }
        body {
            font-family: 'Raleway';font-size: 22px;
        }
    </style>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body class="w3-theme-l5">
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

    <body class="w3-theme-l5">
        <div class="topnav text-center" syle="margin-top: 30px">
            <input type="text" placeholder="Search..">
        </div>

    <div class="w3-container w3-content" style="max-width:1400px;margin-top: 30px;margin-bottom: 20px;margin-right: 20px;margin-left: 200px;">
    <div class="row justify-content-between" style="margin-top: 10px;margin-bottom: 10px">
    <div class="col-7 w3-card w3-round w3-white">
        <div class="w3-container" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
        <input type="checkbox" id="penjual1" name="penjual1" value="penjual1">
        <label for="penjual1"> TheDrawingSeller</label><br>
         <p class="w3-col m3"><img src="/assets/design-in/penjual1.png" class="w3-square" style="height:120px;width:120px" alt="Avatar"></p>
            <div class="w3-col m8">
            <p style="font-size:large"> I will draw your abstract illustration into reality</p>
            <p class="fa fa-bolt" style="font-size:15px;color:red"></i> Pengerjaan Ekstra Cepat</p>
            <p style="font-size:15px;color:red"> RP 420.000</p>
            </div>
        </div>
        <a href="order">
        <div style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
            <button class="button w3-round">Ubah Pesanan</button>
            <button style="font-size:24px" class="fa fa-trash-o"></button>
        </div>
        </a>
    </div>

    <!-- Page Container -->
    <div class="col-5 w3-container w3-content">
        <!-- The Grid -->
        <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m7">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
            <p class="text-center" style="font-size:large">Ringkasan Belanja</p>
            <div id="main" style="margin-bottom: 30px">
                <div style="margin-left: 10px;">Total Harga</div>
                <div>RP 420.000</div>
            </div>
            <p>
            <a href="metode_pembayaran">
                <div class="text-center">
                <button class="button w3-round">Bayar Pesanan</button>
                </div>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="row justify-content-between" style="margin-top: 10px;margin-bottom: 10px">
        <div class="col-7 w3-card w3-round w3-white">
            <div class="w3-container" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
            <input type="checkbox" id="penjual1" name="penjual1" value="penjual1">
            <label for="penjual1">Art_Illustrator310</label><br>
             <p class="w3-col m3"><img src="/assets/design-in/penjual2.jpg" class="w3-square" style="height:120px;width:120px" alt="Avatar"></p>
                <div class="w3-col m8">
                <p style="font-size:large">Saya akan mengilustrasikan konsep karakter wajah seseorang</p>
                <p class="fa fa-bolt" style="font-size:15px;color:red"></i> Pengerjaan Ekstra Cepat</p>
                <p style="font-size:15px;color:red"> RP 420.000</p>
                </div>
            </div>
            <a href="order">
            <div style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
                <button class="button w3-round">Ubah Pesanan</button>
                <button style="font-size:24px" class="fa fa-trash-o"></button>
            </div>
            </a>
        </div>
    </div>
        <div class="row justify-content-between" style="margin-top: 10px;margin-bottom: 50px">
            <div class="col-7 w3-card w3-round w3-white">
                <div class="w3-container" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
                <input type="checkbox" id="penjual1" name="penjual1" value="penjual1">
                <label for="penjual1">Pro_Art</label><br>
                 <p class="w3-col m3"><img src="/assets/design-in/penjual3.jpg" class="w3-square" style="height:120px;width:120px" alt="Avatar"></p>
                    <div class="w3-col m8">
                    <p style="font-size:large">Saya akan buat profesional art</p>
                    <p class="fa fa-bolt" style="font-size:15px;color:red"></i> Pengerjaan Ekstra Cepat</p>
                    <p style="font-size:15px;color:red"> RP 420.000</p>
                    </div>
                </div>
                <a href="order">
                <div style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
                    <button class="button w3-round">Ubah Pesanan</button>
                    <button style="font-size:24px" class="fa fa-trash-o"></button>
                </div>
                </a>
            </div>
        </div>

    </div>


</body>

</html>
