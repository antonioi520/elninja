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
    <title>Mi Alma Restaurant</title>
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
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">


</head>
<body>
<!-- Header -->


<?php include("views/nav_pages.html")?>
<BR>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/TheaterInterior/concert-37.jpg" alt="Second slide" style="height:600px;filter:brightness(50%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="serviceHeaderText">Services</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-12.jpg" alt="Third slide" style="height:600px;filter:brightness(50%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center "  id="hero">

                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="serviceHeaderText">Services</h1>
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
                <center>
                    <h1 class="" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Highlights</h1>
                <center>
                <div class="section-title-divider"></div>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/Staff/MiAlmaCafeOpeningCeremony-8.jpg" alt="" style="height:auto;object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/Staff/MiAlmaCafeOpeningCeremony-8.jpg" alt="" style="height:auto;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title" style="margin-bottom: 10px;">Chef's Recommendations</h2>
                <p class="about-text" style="padding-left:2px;">
                    Be sure to ask your server about the chef's recommendation for the day!
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">Weekly Specials</h2>
                <p class="about-text" style="padding-left:2px;">
                    Don't forget to ask staff about the weekly special next time you dine with us!
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">À La Carte</h2>
                <p class="about-text" style="padding-left:2px;">
                    Come in and order your food à la carte.
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">Take Out</h2>
                <p class="about-text" style="padding-left:3px;">
                    Give us a call at (401) 648-0715 and we'll prepare your order ahead of time for you! When it's ready,
                    pick it up on location at 1017 Broad Street Providence, RI 02905.
                </p>

                <a href="menu" id="menuBox"><h2 id="menuBoxText">View Menu</h2></a>

            </div>
        </div>
    </div>
</section>

</section>-->
<!--==========================
  Subscrbe Section
  ============================-->
<section id="subscribe">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <img src="img/imgheader3.png" style="text-align: center;display: block;margin:auto;">
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Catering</h1>
                    <center>
                <div class="section-title-divider"></div>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/FoodDrink/MiAlmaCafe-2.jpg" alt="" style="width:520px; height: 330px; object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/FoodDrink/MiAlmaCafe-2.jpg" alt="" style="width:520px; height: 330px; object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title">Catering at the Bomes Theater</h2>
                <p class="about-text">
                    At Mi Alma Restaurant, we provide an array of catering services for our customers.
                    If you are looking to host an event at the Bomes Theater, we can also
                    cater for your event there!
                </p>

                <br>

                <h2 class="about-title">Catering for personal events</h2>
                <p class="about-text">
                    Our catering services are not limited to just events hosted on location at the Bomes Theater, we also
                    cater for various other events including weddings, banquets, family gatherings and parties.
                </p>

                <br id="content-desktop">

            </div>
        </div>
    </div>
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