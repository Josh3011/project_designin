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
    <link
        href="https://fonts.googleapis.com/css2?family=Baskervville&family=Montserrat:wght@400;500;600;700&family=Raleway:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>







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

        .pink {
            color: rgb(238, 78, 104);
        }

        .pinkb {
            background-color: rgb(238, 78, 104);
        }

        table td {
            margin-left: 20px;
        }

        .x {
            padding: 5px;
            box-shadow: 2px 2px 10px rgb(238, 78, 104);
            border-radius: 7px;
        }

        .bar {
            user-select: none;
            color: white;
            border-bottom: 4px solid rgb(238, 78, 104);
            position: relative;
            bottom: 13px;
            left: 5px;
        }

        .card-body {
            font-size: 0.5rem;
        }
    </style>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


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
                        <ul class="dropdown-menu" style="width:250px">
                            <li>
                                <div class="search">
                                    <form action="/listjasa2/cari" method="GET">
                                        <input class="form-control" type="text" name="cari"
                                            placeholder="Cari Jasa berdasarkan Judul" value="{{ old('cari') }}">
                                        <input class="form-control btn-dark" type="submit" value="Find">
                                    </form>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/akunpengguna">
                                    <span class="bi bi-person-circle"></span> MY ACCOUNT</a></li>
                            <li><a class="dropdown-item" href="/listjasa2">
                                    <span class="bi bi-bag"></span> PRODUCT</a></li>
                            <li><a class="dropdown-item" href="#">
                                    <span class="bi bi-bag-check"></span> MY ORDER</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand justify-content-center" style="color: #FF3232"
                href="{{ url('/home') }}">Design.in</a>
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


</body>

</html>
