<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                title="close menu">
                <i class="fa fa-remove"></i>
            </a>
        </div>
        <div class="w3-section w3-bottombar w3-padding-16">

            <div class="w3-btn-group-vertical">
                <button class="w3-button w3-black">ALL</button>
                <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
                     <button class="w3-button w3-white w3-hide-small"><i
                    class="fa fa-photo w3-margin-right"></i>Photos</button>
                <button class="w3-button w3-white w3-hide-small"><i
                    class="fa fa-map-pin w3-margin-right"></i>Art</button>
            </div>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="portfolio">
            <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;"
                    class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                    class="fa fa-bars"></i></span>
            <div class="w3-container">
                <h1><b>My Portfolio</b></h1>
            </div>
        </header>

        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="/w3images/mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="/w3images/lights.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container">
                <img src="/w3images/nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
        </div>

        <!-- Second Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="/w3images/p1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="/w3images/p2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container">
                <img src="/w3images/p3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>

    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>

</body>

</html>
