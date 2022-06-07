<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bismillah_PWEB_B</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        * {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        .star {
            color: gold;
            fill: gold;
        }

        hr {
            border-color: #d3d3d3;
            opacity: 0.1;
        }
    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <hr>
    <div class="container p-5 pt-0">
        <div class="row">
            @foreach ($DetailJasa as $d)
                <div class="col-5">
                    <div class="w-100" style="width: 100px; height: auto;">
                        <img src="/assets/design-in/{{ $d->Foto }}" style="width: 100%;">
                    </div>
                    <div class="row my-1">
                        <div class="col p-2">
                            <img src="assets/design-in/data.jpeg" alt=".." class="w-100 border border-3">
                        </div>
                        <div class="col p-2">
                            <img src="assets/design-in/data-2.jpeg" alt=".." class="w-100">
                        </div>
                        <div class="col p-2">
                            <img src="assets/design-in/data-3.jpeg" alt=".." class="w-100">
                        </div>
                        <div class="col p-2">
                            <img src="assets/design-in/data-4.jpeg" alt=".." class="w-100">
                        </div>
                        <div class="col p-2">
                            <img src="assets/design-in/data-5.jpeg" alt=".." class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col-9">
                            <h1 style="font-weight: 400;
                        font-size: 80px;
                        line-height: 1.2;">
                                {{ $d->Judul }}
                            </h1>
                        </div>
                    </div>
                    <div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="rgb(255, 206, 19)"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="rgb(255, 206, 19)"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="rgb(255, 206, 19)"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="rgb(255, 206, 19)"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="rgb(255, 206, 19)"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="d-inline-block px-2">Rating 4.9 (625 ulasan)</span>
                            <ul class="d-inline-block ps-3">
                                <li>26 Terjual</li>
                            </ul>
                            <ul class="d-inline-block ps-3">
                                <li>Diskusi (6)</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="py-2">
                            <span style="font-size: 14px;">{{ $d->DeskripsiJasa }}</span>
                        </div>
                        <hr class="mt-5">
                        <div class="row">
                            <div class="col-3 p-0 mx-4">
                                <button class="fw-bold btn w-100 text-white py-3" style="background-color: #CF0437;">
                                    Illustration
                                </button>
                            </div>
                            <div class="col-3 p-0 me-2">
                                <button class="fw-bold btn w-100 text-white py-3" style="background-color: #CF0437;">
                                    Greek
                                </button>
                            </div>
                            <div class="col-3 p-0 mx-3">
                                <button class="fw-bold btn w-100 text-white py-3"
                                    style="background-color: #CF0437;">Art</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4">
                            <div class="col-1">
                                <img src="assets/design-in/profile-icon.png" style="width: 90px;">
                            </div>
                            <div class="col-6 ps-5">
                                <h5 class="mb-1" style="font-size: 18px;">
                                    <b>John Doe Art Illustration</b>
                                </h5>
                                <small style="color: rgb(168, 40, 40);">Online</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endforeach


</body>

</html>
