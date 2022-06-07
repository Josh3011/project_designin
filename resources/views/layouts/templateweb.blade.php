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

    </style>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="btn" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-align-justify"></span></a>
                    <ul class="dropdown-menu">
                        <li>

                                    <form action="/listjasa2/cari" method="GET">
                                        <input class="form-control" type="text" name="cari"
                                            placeholder="Cari Jasa berdasarkan Judul" value="{{ old('cari') }}">
                                        <input class="form-control btn-default btn-xs" type="submit" value="Find">
                                    </form>

                        </li>

                        <li><a class="drop" href="#"><span class="glyphicon glyphicon-user"></span> MY
                                ACCOUNT</a></li>
                        <li><a class="drop" href="/listjasa2"><span class="glyphicon glyphicon-book"></span>
                                DAFTAR PRODUK</a></li>
                        <li><a class="drop" href="#"><span class="glyphicon glyphicon-user"></span>SHOPPING
                                CART</a></li>
                        <li><a class="drop" href="#"><span class="glyphicon glyphicon-user"></span>MY
                                ORDER</a></li>


                    </ul>
                </li>
            </ul>
            <div class="navbar-header">
                <a class="navbar-brand" style="color: #ff1a1a" href="{{ url('/home') }}">
                    Design.in
                </a>
            </div>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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
    </div>

</body>

</html>
