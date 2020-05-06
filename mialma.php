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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90995944-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90995944-4');
    </script>

    <meta charset="UTF-8">
    <title>El Ninja Restaurant</title>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no"/>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">

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
<!--div id="content-desktop896">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-10.jpg" alt="Second slide" style="height:600px;filter:brightness(50%);object-fit: cover">
                <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                    <center>
                        <div class="serviceHeaderBox" style="width:600px; height: 75px;">
                            <h1 class="serviceHeaderText">Mi Alma Restaurant</h1>
                        </div>
                    </center>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-14.jpg" alt="Third slide" style="height:600px;filter:brightness(50%);object-fit: cover">
                <div class="carousel-caption d-md-block d-flex justify-content-center "  id="hero">

                    <center>
                        <div class="serviceHeaderBox" style="width:600px; height: 75px;">
                            <h1 class="serviceHeaderText">Mi Alma Restaurant</h1>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="arrowRemove">
            <a class="carousel-control-prev .d-none .d-md-block" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon .d-none .d-md-block" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div-->
<div class="container">
<center>
    <img src="img/logo.png" style="height:200px;width:300px;object-fit: contain;">
</center>

<hr style="margin-bottom:0px;">
</div>

<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <!--h3 class="section-title" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 3.125em;">About us</h3>
                <div class="section-title-divider"></div-->
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" alt="" style="height:410px;object-fit: cover;" id="aboutImg">
            </div>
            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" alt="" style="height:400px;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">
                <h2 class="about-title" style="margin-bottom: 14px;">
                    We provide excellent food and quality services for our customers.</h2>
                <p class="about-text">
                    Mi Alma Restaurant is a Latin fusion restaurant brought to Broad Street alongside the newly renovated Bomes Theatre, boasting a luxurious interior, quality ingredients and outstanding service provided by a hard-working staff!
                    <br><br>
                    Services provided at Mi Alma Restaurant include an array of Dominican/Latin cuisine, events and live concerts. We go out of our way to ensure that your time spent at Mi Alma Restaurant is memorable and of the highest quality!
                </p>

                <h3 style="font-weight: bold;color: #333;margin-bottom: 14px;">Check out our Website:</h3>
                <a href="https://www.MiAlmaRestaurant.com" id="menuBox" target="_blank" style="width: 250px; padding-right: 13px;"><h2 id="menuBoxText">View Website</h2></a>
            </div>
        </div>
    </div>
    <br>
</section>

<br id="content-desktop">
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>