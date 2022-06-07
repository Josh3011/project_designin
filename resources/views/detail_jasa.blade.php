<!doctype html>
<html lang="id">

<head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');

		body {
			font-family: 'Nunito', sans-serif;
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Design.in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
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
                            {{ Auth::user()->name }}
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


	<div class="container mt-5">
		<div class="row">
		@foreach ($DetailJasa as $d)
			<div class="col-6">
				<img src="/assets/design-in/{{ $d->Foto }}" style="width: 500px;" alt="">

                <hr class="bg-dark border-2 border-top border-secondary">
				<div class="d-flex justify-content-start py-1">
					<div class="pe-5">
						<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" alt="">
					</div>
					<div class="px-5">
						<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" alt="">
					</div>
					<div class="px-5">
						<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" alt="">
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
						<p><i class="fas fa-star text-warning"></i> <b>5</b> <span class="bar">Lorem ipsum dolor, sit
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
					<span class="badge text-bg-danger">Illustration</span> <span class="badge text-bg-danger">Video
						Games</span> <span class="badge text-bg-danger">Anime</span>
				</p>
				<p>Lorem ipsum dolor sit amet consectetur adipi.</p>
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
							<img src="/assets/design-in/profile-icon.png" style="width: 50px;" class="rounded" alt="">
						</div>
						<div style="margin-left: 20px;">
							<p>AkunPenjual<br><b><span class="pink">Online</span></b></p>
						</div>
					</div>

					<div style="vertical-align: middle;position: relative;top: 20px;">
						<span class="badge text-bg-danger">Follow +</span>
					</div>

				</div>
				<p><i class="fas fa-star pink"></i><b>4.5</b> rata-rata ulasan</p>

				<hr class="bg-dark border-2 border-top border-secondary">
				<br><br><br><br><br>


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
					<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded" alt="">
				</div>
				<div class="me-5">
					<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded" alt="">
				</div>
				<div class="me-5">
					<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded" alt="">
				</div>
				<div class="me-5">
					<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded" alt="">
				</div>
				<div class="me-5">
					<img src="/assets/design-in/{{ $d->Foto }}" style="width: 100px;" class="rounded" alt="">
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
						<img src="/assets/design-in/data.jpeg"
							class="card-img-top" width="100px" alt="...">
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
						<img src="/assets/design-in/data.jpeg"
							class="card-img-top" width="100px" alt="...">
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
						<img src="/assets/design-in/data.jpeg"
							class="card-img-top" width="100px" alt="...">
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
						<img src="/assets/design-in/data.jpeg"
							class="card-img-top" width="100px" alt="...">
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


	<br><br><br><br>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
		@endforeach
</body>

</html>
