<!DOCTYPE html>
<html lang="en">
<style>
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
<head>
<title>Akun Pengguna</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1200px">
<button class="w3-button w3-xlarge w3-circle w3-black"><</button>
<button img class="w3-button-image" src="https://img.icons8.com/material-sharp/344/settings.png"></button>
  <img class="w3-image" src="https://images.rawpixel.com/image_social_landscape/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjM4NC1uaW5nLTA2Yi1ncmFkaWVudGJnLWpvYjU5OC5qcGc.jpg?s=gvS3mFBQyTGtflPoCjM4Sv5LiwUuntl5dtGV7qQEnig" alt="" width="1500" height="600">
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
