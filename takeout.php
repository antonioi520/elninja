<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90995944-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90995944-6');
    </script>


    <meta charset="UTF-8">
    <title>El Ninja Restaurant</title>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no"/>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/fadein.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo_ninja.png" type="image/x-icon">
    <link rel="icon" href="img/logo_ninja.png" type="image/x-icon">


</head>
<body>
<!-- Header -->
<?php include("views/nav_pages.html")?>


<BR>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/Interior/7.jpg" alt="Second slide" style="height:600px;filter:brightness(50%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="big-heading bigHeaderText animated fadeInDown" style="top:-10px;">Takeout</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>

</div>
<div class="container">
<center>
    <img src="img/logo_ninja.png" style="height:200px;width:300px;object-fit: contain;">
</center>

<hr style="margin-bottom:0px;">
</div>
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="section-title" style="font-family: 'Poppins';font-size: 3.125em;color:black;margin-bottom: 10px;">Takeout Menu</h1>
                <center>
                <div class="red-title-divider"></div>
                <br>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/FoodDrink/ENR-Tasting-98.jpg" alt="" style="width:520px;height:330px;" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/FoodDrink/ENR-Tasting-98.jpg" alt="" style="height:auto;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title" style="margin-bottom: 10px;">Order via Phone</h2>
                <p class="about-text" style="padding-left:2px;">
                    Give us a call at (401) 467-2581 and we'll prepare your order ahead of time for you! When it's ready,
                    pick it up on location at 1007 Broad Street Providence, RI 02905. You can view our takeout menu <a href="menu">here</a>
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">Order Online</h2>
                <p class="about-text" style="padding-left:3px;">
                    Order your food now via our new online ordering system! When it's ready,
                    pick it up on location at 1007 Broad Street Providence, RI 02905. Click the button below to start your order!
                </p>

                <br>

            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <br>
                <a href="https://orders.cake.net/11338569" target="_blank" class="orderButton" id="menuBox4" ><h2 id="menuBoxText4">Order Now</h2></a>
                <br>
            </div>
        </div>
    </div>
    
</section>

<br>



<br>

<?php include("views/footer.html")?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>