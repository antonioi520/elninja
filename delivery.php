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
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link rel="shortcut icon" href="img/logo_ninja.png" type="image/x-icon">
    <link rel="icon" href="img/logo_ninja.png" type="image/x-icon">



</head>
<body>
<!-- Header -->

<?php include("views/nav_pages.html")?>
<br>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/Interior/6.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero">
                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="big-heading bigHeaderText animated fadeInDown" style="top:-10px;">Delivery</h1>
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

<section id="about" style="padding-bottom:10px;">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title" style="font-family: 'Poppins'; font-size: 3.125em;">Delivery Apps</h1>
                <div class="section-title-divider" style="background-color: red;margin-top: -40px;"></div>
                <br>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-6 about-content">
            <h1 class="about-title" style="font-family: 'Poppins';font-size: 3.125em;font-weight:700;color:black;margin-bottom: 10px;">Grubhub</h1>

            <div class="red-title-divider" style="width:100%;float:left;margin-bottom: 0px;"></div><br>

            <p class="about-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
            </p>

            <br>
            <a href="#" id="menuBox" style="width: 280px; height: 75px;"><h2 id="menuBoxText">View Grubhub</h2></a>
        </div>

        <div class="col-lg-6 about-img" id="content-desktop896">
            <img src="img/grubhub.webp" style="width:600px;height:330px;margin-top: 10px;">
        </div>

        <div class="col-lg-6 about-img" id="content-mobile896">
            <center>
                <img src="img/grubhub.webp" style="width:100%;object-fit: scale-down;" id="aboutImg">
            </center>
        </div>
    </div>

    <br id="content-desktop896"><br id="content-desktop896"><br id="content-desktop896">

    <div class="row">
        <div class="col-lg-6 about-img" id="content-desktop896">
            <img src="img/ubereats.png" alt="" style="width:540px;height:330px;" id="aboutImg">
        </div>

        <div class="col-md-6 about-content">
            <h1 class="about-title" style="font-family: 'Poppins';font-size: 3.125em;font-weight:700;color:black;margin-bottom: 10px;">Uber Eats</h1>

            <div class="red-title-divider" style="width:100%;float:left;margin-bottom: 0px;"></div><br>

            <p class="about-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
            </p>

            <br>
            <a href="#" id="menuBox" style="width: 285px; height: 75px;"><h2 id="menuBoxText">View Uber Eats</h2></a>

            <br>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/ubereats.png" alt="" style="width:108%;object-fit: scale-down;margin-left: -14px;" id="aboutImg">
                </center>
            </div>
        </div>
    </div>
</div>

<br id="content-desktop896">
<br id="content-desktop896">
<br id="content-desktop896">
<br id="content-desktop896">
<br id="content-desktop896">

<section id="subscribe-delivery">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <img src="img/imgheadersushi.png" style="text-align: center;display: block;margin:auto;">
            </div>
        </div>
    </div>
</section>

<section id="about" style="padding-bottom:10px;">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title" style="font-family: 'Poppins'; font-size: 3.125em;">Delivery Menu</h1>
                <div class="section-title-divider" style="background-color: red;margin-top: -40px;"></div>
                <br>
            </div>
        </div>
    </div>
</section>

<div class="container">

</div>

<br id="content-desktop896"><br id="content-desktop896">

<br id="content-desktop896">
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
