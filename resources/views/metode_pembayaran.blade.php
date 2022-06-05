<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Visa</title>
</head>

<body>
    <style>
        form {
            width: 400px;
        }
        .rounded{
            width: 480px;

        }
    </style>
    <div class="container-lg p-5 mt-5 mx-auto justify-content-center">

        <div style="border: 2px solid #000000" class="m-5 p-5 rounded position-absolute top-50 start-50 translate-middle mt-1">

            <img class="mx-auto d-block" width="100" src="/assets/design-in/Design.in.png">

            <h3 class="mx-auto text-center">METODE PEMBAYARAN</h3>


            <form name="visa">


                <div class="row">

                        <div class="mb-3 mt-3">
                            <label for="metode pembayaran" class="form-label">Pilih Metode Pembayaran: </label>
                            <select class="form-select" id="metodepembayaran" name="metodepembayaran">
                                <option value="" readonly="true" hidden="true">Pilih Metode Pembayaran</option>
                                <option value="BANK">TRANSFER BANK</option>
                                <option value="E-WALLET">E-WALLET</option>
                            </select>
                        </div>
                    </div>

                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="text" class="form-control" id="nama" placeholder="Muhammad Ghiffari" name="nama">

                </div>
                        <form action="/action_page.php">
                            <label for="myfile">Select files:</label> <br>
                            <input type="file" id="myfile" name="myfile" multiple><br><br>
                          </form>


               <center><input  type="submit" class="btn btn-primary" value="SELESAIKAN PEMBAYARAN">    </center>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>

</html>
