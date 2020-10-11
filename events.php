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
    <link href="css/fadein.css" rel="stylesheet">

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
            <img class="d-block w-100" src="img/Interior/5.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="big-heading bigHeaderText animated fadeInDown" style="top:-10px;">Events</h1>
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
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our upcoming <strong style="color:#ee2929">Events</strong></h1>
        <h5 class="" style="text-align: center;font-size: 17px;">Celebrate your next special occasion with us.</h5>
        <div class="red-title-divider" style="width:300px;"></div>
    </div>

    <div class="row" id="videoRow" style="display: inline; padding-top: 0px;">
        <center>
            <video width="480" height="272" controls>
                <source src="vid/trailer.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </center>
    </div>

    <br>

    <h2 style="text-align: center;color:black;margin-bottom: 5px;font-weight: 600">Special Events</h2>
    <br>
    <div class="row" id="normalDiv">
        <div class="card-deck" style="width:80%;margin:auto;">
            <!--div class="col-md-3"></div-->
            <div class="card" style="border-color: #ee2929">
                <img class="card-img-top" src="img/grand_opening_eng.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Grand Opening</h5>
                    <p class="card-text" style="background-color: #FFE7E7; color=black;padding-left:10px;padding-right:10px;">
                        For Reservations: <br>
                        Chinito - (646) 484-0030 <br>
                        Keiry - (401) 215-7824 <br>
                        Ligia - (401) 639-2136
                        <br><br>
                        <strong>Date: Thursday, July 16th</strong><br>
                        <strong>Start: 5pm</strong><br>
                        <strong>End: 12am</strong><br>
                        <br>
                    </p>
                </div>
                <div id="content-desktop" class="card-footer" style="background-color: #ee2929;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        El Ninja Restaurant, 1007 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: #ee2929;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        El Ninja Restaurant, 1007 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: #ee2929">
                <img class="card-img-top" src="img/grand_opening_spa.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Gran Apertura</h5>
                    <p class="card-text" style="background-color: #FFE7E7; color=black;padding-left:10px;padding-right:10px;">
                        Para Reservaciones: <br>
                        Chinito - (646) 484-0030 <br>
                        Keiry - (401) 215-7824 <br>
                        Ligia - (401) 639-2136
                        <br><br>
                        <strong>Date: Jueves, Julio 16th</strong><br>
                        <strong>Start: 5pm</strong><br>
                        <strong>End: 12am</strong><br>
                        <br>
                    </p>
                </div>
                <div id="content-desktop" class="card-footer" style="background-color: #ee2929;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        El Ninja Restaurant, 1007 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: #ee2929;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        El Ninja Restaurant, 1007 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <!--div class="col-md-3"></div-->
        </div>
    </div>

    <!--br><br id="content-desktop896">

    <h2 style="text-align: center;color:black;font-weight: 600">Recurring Events</h2>
    <div class="container" style="">
        <div class="col-md-6"></div>
        <div class="row" id="normalDiv2">
            <div class="card-deck" style="width:84%;margin:auto;">
                <div class="col-md-3"></div>
                <div class="card" style="border-color: #ee2929">
                    <img class="card-img-top" src="img/sushi_takeout_updated.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                    <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                        <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Monday open for sushi take out only!</h5>
                        <p class="card-text" style="background-color: #FFE7E7; color=black;padding-left:10px;padding-right:10px;">
                            <strong>Call: (401) 467-2588</strong> <br>
                            <strong>Call: (401) 467-2581</strong> <br>
                            View our <a href="menu">Takeout menu!</a>
                            <br><br>
                            <strong>Date: Mondays</strong><br>
                            <strong>Start: 3pm</strong><br>
                            <strong>End: 10pm</strong><br>
                            <br>
                        </p>
                    </div>
                    <div id="content-desktop" class="card-footer" style="background-color: #ee2929;height:50px;">
                        <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                            El Ninja Restaurant, 1007 Broad Street, Providence, RI 02905</small>
                    </div>

                    <div id="content-mobile" class="card-footer" style="background-color: #ee2929;height:60px;">
                        <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                            El Ninja Restaurant, 1007 Broad Street, Providence, RI 02905</small>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
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
