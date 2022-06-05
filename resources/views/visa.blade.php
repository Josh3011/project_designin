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
    <div class="container-lg p-5 mt-5">

        <div style="border: 2px solid #000000" class="m-5 p-5 rounded">

            <img class="mx-auto d-block" width="90" height="30" src="assets/design-in/visa.png">


            <form name="visa">


                <div class="row">
                    <div class="col-7">
                        <div class="mb-3 mt-3">
                            <label for="cardnumber" class="form-label">CARD NUMBER</label>
                            <input type="text" class="form-control" id="cardnumber" placeholder="7419 9314 7920 1230"
                                name="cardnumber">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3 mt-3">
                            <label for="cyccvc" class="form-label">CYC/CVC</label>
                            <input type="text" class="form-control" id="cyccvc" placeholder="820"
                                name="cyccvc">
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="cardholdername" class="form-label">CARD HOLDER NAME</label>
                    <input type="text" class="form-control" id="cardholdername" placeholder="Muhammad Ghiffari" name="address">

                </div>

                    <label for="email" class="form-label mt-3">EXPIRATION CARD DATE</label>
                    <div class="mb-3 mt-3">
                        <form action="/action_page.php">
                            <label for="expiration"></label>
                            <input type="date" id="expiration" name="expiration">
                          </form>
                        </div>


               <center><input  type="submit" class="btn btn-primary" value="COMPLETE ORDER">    </center>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>

</html>
