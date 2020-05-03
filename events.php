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

    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/events.css" rel="stylesheet">
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
            <img class="d-block w-100" src="img/Events/Concert-15.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Concert-16.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center "  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Concert-29.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center" id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Concert-29.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Concert-31.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Optimo%20Concert-24.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Optimo%20Concert-25.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Optimo%20Concert-26.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Optimo%20Concert-27.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Events/Optimo%20Concert-28.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="eventHeaderText">Events</h1>
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
        <img src="img/logo_ninja.png" style="height:200px;width:300px;object-fit: contain;">
    </center>

    <hr style="margin-bottom:0px;">
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our upcoming <strong style="color:deepskyblue">Events</strong></h1>
        <h5 class="" style="text-align: center;font-size: 17px;">Celebrate your next special occasion with us.</h5>
        <div class="section-title-divider" style="width:300px;"></div>
    </div>

    <h2 style="text-align: center;color:black;margin-bottom: 5px;font-weight: 600">Special Events</h2>

    <div class="row" id="videoRow" style="display: inline; padding-top: 0px;">
        <center>
            <iframe id="galleryVid" width="79%" height="430px" src="https://www.youtube.com/embed/CzvKBdZu98c?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </center>
    </div>



    <div class="row" id="normalDiv">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/superbowl_LIV.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Super Bowl Party</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        49ers vs. Chiefs <br>
                        Buffalo/BBQ Chicken Wings - $6.00 <br>
                        Nachos/Tacos - $6.00
                        <br><br>
                        <strong>Date: Sunday, February 2nd</strong><br>
                        <strong>Start: 5pm</strong><br>
                        <br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/noche_bohemia.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Noche Bohemia con JanetG</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        Reservaciones: <br> (401) 215-7824, <br> (401) 648-0715
                        <br><br>
                        <strong>Date: Wednesday, February 5th</strong><br>
                        <strong>Start: 6pm</strong><br>
                        <strong>End: 11pm</strong><br>
                        <br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6"></div>
</div>
<div class="col-md-6"></div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/la_insuperable.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">La Insuperable En Vivo</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        Reservas: (401) 215-7824
                        <br>
                        <a href="img/Events/insuperable_seating.jpeg" target="_blank">View Seating Chart</a>
                        <br><br>
                        <strong>Date: Saturday, February 8th</strong><br>
                        <strong>Tickets: $30</strong><br>
                        <strong>VIP Tickets: $50</strong>
                        <br><br><br><br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/insuperable_seating.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">La Insuperable - Seating Chart</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        <a href="img/Events/insuperable_seating.jpeg" target="_blank">View Seating Chart</a>
                        <br><br>
                        <strong>Date: Saturday, February 8th</strong><br>
                        <strong>Tickets: $30</strong><br>
                        <strong>VIP Tickets: $50</strong>
                        <br><br><br><br><br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
    <div class="container">
        <div class="row">
            <div class="card-deck" style="width:80%;margin:auto;">
                <div class="card" style="border-color: deepskyblue">
                    <img class="card-img-top" src="img/Events/makeup.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                    <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                        <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Clases De Maquillaje Profesional</h5>
                        <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                            Reservations: <br>
                            Yinelis - (401) 588-0974<br>
                            Ysmel - (401) 286-1004
                            <br><br>
                            <strong>Date: Sunday, February 9th</strong><br>
                            <strong>Start: 10am</strong><br>
                            <strong>End: 3pm</strong><br>
                            <strong>Price: $60 for the class, $20 deposit</strong>
                            <br><br>
                        </p>

                    </div>
                    <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                        <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>

                    <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                        <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>
                </div>
                <div class="card" style="border-color: deepskyblue">
                    <img class="card-img-top" src="img/Events/el_ninja_valentines.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                    <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                        <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">El Ninja Valentine's Day Event</h5>
                        <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                            Reservas: <br> Ronny Batista: (917) 385-8241, <br> Keiry Luciano: (401) 215-7824
                            <br><br>
                            <strong>Date: Saturday, February 14th</strong><br>
                            <strong>Start: 5pm</strong><br>
                            <strong>End: 1am</strong><br>
                            <strong>Price: $150</strong>
                            <br><br>
                        </p>

                    </div>
                    <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                        <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>

                    <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                        <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>

<div class="container">
    <div class="row">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/chaval3.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">El Chaval</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        Reservaciones: <br>
                        (401) 499-4689 <br>
                        (401) 215-7824
                        <br><br>
                        <strong>Date: Friday, April 24th</strong><br>
                        <strong>Start: 9pm</strong><br>
                        <strong>End: 2am</strong><br>
                        <strong>Tickets: $35</strong>
                        <br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/fernando_villalona.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Fernando Villalona</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        <b>50 Años De Historia</b><br>
                        Reservaciones: <br>
                        (401) 215-7824 <br>
                        (401) 603-6965
                        <br><br>
                        <strong>Date: Friday, May 15th</strong><br>
                        <strong>Tickets: $30</strong><br>
                        <br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
        </div>
    </div>
</div>

    <br><br>

    <h2 style="text-align: center;color:black;font-weight: 600">Recurring Events</h2>
    <div class="container" style="">
        <div class="col-md-6"></div>
        <!--hr style="margin-bottom:0px;">
        <div class="col-md-6"></div>
        <div class="row" style="display: inline;padding-top: -10px;" >
            <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our past <strong style="color:deepskyblue">Events</strong></h1>
            <div class="section-title-divider" style="width:300px;"></div>
        </div-->
        <!--<div class="row" id="videoRow" style="display: inline; padding-top: -10px;">
            <center>
                <video id="video" style="margin-bottom: 30px" controls>
                    <source src="vid/event_video.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </center>
        </div>-->
        <div class="row" id="normalDiv2">
            <div class="card-deck" style="width:84%;margin:auto;">
                <div class="card" style="border-color: deepskyblue">
                    <img class="card-img-top" src="img/Events/event9.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                    <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                        <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Miércoles De Sushi & Domingo De Brunch!</h5>
                        <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                            Sushi Wednesday and Sunday Brunch! <br>
                            Call Keiry for reservations: 401-215-7824.
                            <br><br>
                            <strong>Date: Every Wednesday and Sunday</strong><br><br><br>
                            <!--strong>Start: 12pm</strong><br>
                            <!--strong>End: </strong><br-->
                        </p>

                    </div>
                    <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                        <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>

                    <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                        <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>
                </div>
                <div class="card" style="border-color: deepskyblue">
                    <img class="card-img-top" src="img/Events/event10.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                    <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                        <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">100 NFL</h5>
                        <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                            Every Thursday at 8:00pm.<br>
                            Buffalo/BBQ chicken wings $6.00. <br>
                            Nachos/Tacos $6.00.
                            <br><br>
                            <strong>Date: Every Thursday</strong><br>
                            <strong>Start: 8pm</strong><br>
                            <!--strong>End: 1am</strong><br-->
                        </p>

                    </div>
                    <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                        <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>

                    <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                        <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                            The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
<div class="col-md-6"></div>
</div>

<br><br>



<!--div class="container">
    <center>
        <img src="img/logo.png" style="height:200px;width:300px;object-fit: contain;">
    </center>

    <hr style="margin-bottom:0px;">
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our upcoming <strong>Events</strong></h1>
        <h5 class="" style="text-align: center;font-size: 17px;">Celebrate your next special occasion with us.</h5>
        <div class="section-title-divider" style="width:300px;"></div>
    </div>
    <div class="row" id="videoRow" style="display: inline; padding-top: -10px;">
        <center>
            <iframe id="galleryVid" width="67%" height="430px" src="https://www.youtube.com/embed/1V5h9hi-lf0?rel=0&amp;showinfo=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </center>
    </div>

    <div class="row">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="col-md-3"></div>
            <div class="card" style="border-color: deepskyblue">
                <img class="card-img-top" src="img/Events/event8.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">El Primer Tipicazo</h5>
                    <p class="card-text" style="background-color: #D0FBFF; color=black;padding-left:10px;padding-right:10px;">
                        Drink specials from 9pm to 10pm.
                        <br><br>
                        <strong>Date: Friday, October 11th</strong><br>
                        <strong>Tickets: $20</strong><br>
                        <strong>Start: 9pm</strong><br>
                        <strong>End: 2am</strong><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: deepskyblue;height:50px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: deepskyblue;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-6"></div>

</div-->
    <div class="col-md-6"></div>
</div>

<br>
<br id="content-desktop">
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
