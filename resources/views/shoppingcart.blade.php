<!DOCTYPE html>
<html>
<head>
<title>shoppingcart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
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

</style>
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
     <p class="w3-col m3"><img src="https://img.freepik.com/free-vector/multicolored-abstract-background_23-2148463672.jpg?w=2000" class="w3-square" style="height:120px;width:120px" alt="Avatar"></p>
        <div class="w3-col m8">
        <p style="font-size:large"> I will draw your abstract illustration into reality</p>
        <p class="fa fa-bolt" style="font-size:15px;color:red"></i> Pengerjaan Ekstra Cepat</p>
        <p style="font-size:15px;color:red"> RP 420.000</p>
        </div>
    </div>
    <div style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
        <button class="button w3-round">Ubah Pesanan</button>
        <button style="font-size:24px" class="fa fa-trash-o"></button>
    </div>
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
        <div id="main">
            <div style="margin-left: 10px;">Total Harga</div>
            <div style="margin-right: 10px;">RP 420.000</div>
        </div>
        <hr>
        <div style="margin-left: 27px;">
        <button class="button w3-round">Bayar Pesanan</button>
        </div>
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
         <p class="w3-col m3"><img src="https://img.freepik.com/free-vector/flat-design-abstract-background_23-2149116123.jpg?t=st=1654461934~exp=1654462534~hmac=981ca4eb435db31ff7529e716e9a3fc4837c971ebc6a8bf2f263153e08ed108b&w=900" class="w3-square" style="height:120px;width:120px" alt="Avatar"></p>
            <div class="w3-col m8">
            <p style="font-size:large">Saya akan mengilustrasikan konsep karakter wajah seseorang</p>
            <p class="fa fa-bolt" style="font-size:15px;color:red"></i> Pengerjaan Ekstra Cepat</p>
            <p style="font-size:15px;color:red"> RP 420.000</p>
            </div>
        </div>
        <div style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">
            <button class="button w3-round">Ubah Pesanan</button>
            <button style="font-size:24px" class="fa fa-trash-o"></button>
        </div>
    </div>
    </div>
</div>
