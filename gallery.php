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
    <link href="css/fadein.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
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
            <img class="d-block w-100" src="img/Interior/ENR-Tasting-73%20-%20Copy.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero">
               <!-- <center>
                    <img src="img/logo.png" class="galleryHeaderImage">
                </center>-->
                <center>
                    <div class="">
                        <h1 class="big-heading bigHeaderText animated fadeInDown" style="top:-10px;">Gallery</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>

</div>

<div class="container">
<!--    <h1 class="menu-heading">Gallery</h1>-->
    <center>
        <img src="img/logo_ninja.png" style="height:200px;width:300px;object-fit: contain;">
    </center>
    <br>
    <hr>
    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Food & Drinks</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-1.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-2.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-3.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-4.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-5.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-6.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-7.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-8.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-9.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-10.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-11.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-12.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-13.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-14.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-15.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-16.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-17.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-18.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-19.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-20.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(20)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-21.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(21)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-22.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(22)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ElNinjaFood-23.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(23)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-2.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(24)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-4.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(25)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-21.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(26)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-38.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(27)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-44.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(28)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-46.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(29)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-8.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(30)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-9.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(31)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-10.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(32)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-11.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(33)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-20.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(34)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-87.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(35)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-91.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(36)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-93.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(37)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-95.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(38)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-98.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(39)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-99.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(40)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-100.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(41)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-101.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(42)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-110.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(43)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-114.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(44)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-121.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(45)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-127.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(46)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/ENR-Tasting-137.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(47)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>
    <br>

    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Interior</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/1.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/2.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/3-ninja.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/4-ninja.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/5.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/6.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/7.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-3.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-5.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-6.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-9.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-11.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-1.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-2.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-4.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-7.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-14.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-15.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-17.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-23.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(20)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-24.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(21)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-26.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(22)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-27.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(23)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-28.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(24)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-29.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(25)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-30.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(26)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-32.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(27)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-33.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(28)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-34.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(29)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-35.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(30)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-37.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(31)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-38.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(32)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-39.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(33)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-41.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(34)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-42.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(35)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-43.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(36)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-47.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(37)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-48.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(38)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-49.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(39)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-50.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(40)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-71.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(41)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-72.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(42)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-73.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(43)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-74.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(44)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-74.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(45)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/ENR-Tasting-76.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(46)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <!--h2 style="text-align:center; color:black;padding-bottom:0px;">Interior (Theater)</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-2.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-7.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-9.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-37.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-38.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-39.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-41.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-42.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-43.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-44.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-45.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-46.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/DSC_0895.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(13)" class="hover-shadow cursor">
            </div>
        </div>
    </div-->

    <br>

    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Staff</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/s1.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/s3.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-4.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-14.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-20.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-25.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-26.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-28.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-53.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-39.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-51.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/NinjaThumbs/ENR%20-%20Heeadshots%20&%20Photoshoot-52.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-18.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-19.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-22.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-41.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-13.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-16.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-44.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-58.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(20)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-59.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(21)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-61.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(22)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-66.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(23)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-68.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(24)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-76.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(25)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-86.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(26)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-118.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(27)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-123.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(28)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/ENR-Tasting-139.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(29)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br><br>

    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Videos</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/v1.png" style="width:100%" onclick="openVideoModal();currentVideoSlide(1)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <!--br>
    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Menu</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/El%20Ninja%20Ingles-page-001.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/El%20Ninja%20Ingles-page-002.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/El%20Ninja%20Ingles-page-003.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/El%20Ninja%20Ingles-page-004.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/El%20Ninja%20Ingles-page-005.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/El%20Ninja%20Ingles-page-006.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/ElNinjaEspanol-page-001.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/ElNinjaEspanol-page-002.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/ElNinjaEspanol-page-003.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/ElNinjaEspanol-page-004.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/ElNinjaEspanol-page-005.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/ElNinjaEspanol-page-006.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/Menu%20Drinks-1.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/Menu%20Drinks-2.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/Menu%20Drinks-3.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(15)" class="hover-shadow cursor">
            </div>
        </div>
    </div-->

    <br>
    <?php include("views/Gallery/el_ninja_tasting.html") ?>
    <?php include("views/Gallery/el_ninja_opening.html") ?>
    <!--br>
    <!--?php include("views/Gallery/el_ninja_weekend.html") ?>
    <br>
    <!--?php include("views/Gallery/el_ninja_valentines.html") ?-->
    <br>

    <div id="foodModal" class="modal">
        <span class="close cursor" onclick="closeFoodModal()">&times;</span>
        <div class="modal-content">

            <div class="foodSlides">
                <div class="numbertext">1 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-1.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">2 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-2.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">3 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-3.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">4 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-4.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">5 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-5.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">6 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-6.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">7 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-7.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">8 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-8.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">9 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-9.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">10 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-10.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">11 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-11.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">12 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-12.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">13 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-13.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">14 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-14.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">15 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-15.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">16 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-16.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">17 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-17.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">18 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-18.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">19 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-19.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">20 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-20.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">21 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-21.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">22 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-22.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">23 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-23.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">24 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-2.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">25 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-4.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">26 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-21.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">27 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-38.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">28 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-44.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">29 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-46.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">30 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-8.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">31 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-9.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">32 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-10.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">33 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-11.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">34 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-20.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">35 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-87.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">36 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-91.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">37 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-93.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">38 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-95.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">39 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-98.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">40 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-99.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">41 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-100.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">42 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-101.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">43 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-110.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">44 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-114.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">45 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-121.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">46 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-127.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">47 / 47</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ENR-Tasting-137.jpg" style="width:100%" alt="">
            </div>

            <a class="prev" onclick="plusFoodSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusFoodSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container" style="height: 25px;">
                <p id="caption" style="color:white;"></p>
            </div>

        </div>
    </div>

    <div id="interiorModal" class="modal">
        <span class="close cursor" onclick="closeInteriorModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorSlides">
                <div class="numbertext">1 / 46</div>
                <img id="interiorImg" src="img/Interior/1.jpeg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">2 / 46</div>
                <img id="interiorImg" src="img/Interior/2.jpeg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">3 / 46</div>
                <img id="interiorImg" src="img/Interior/3.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">4 / 46</div>
                <img id="interiorImg" src="img/Interior/4.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">5 / 46</div>
                <img id="interiorImg" src="img/Interior/5.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">6 / 46</div>
                <img id="interiorImg" src="img/Interior/6.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">7 / 46</div>
                <img id="interiorImg" src="img/Interior/7.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">8 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-3.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">9 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-5.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">10 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-6.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">11 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-9.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">12 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-11.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">13 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-1.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">14 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-2.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">15 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-4.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">16 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-7.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">17 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-14.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">18 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-15.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">19 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-17.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">20 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-23.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">21 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-24.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">22 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-26.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">23 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-27.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">24 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-28.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">25 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-29.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">26 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-30.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">27 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-32.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">28 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-33.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">29 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-34.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">30 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-35.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">31 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-37.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">32 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-38.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">33 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-39.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">34 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-41.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">35 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-42.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">36 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-43.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">37 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-47.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">38 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-48.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">39 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-49.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">40 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-50.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">41 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-71.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">42 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-72.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">43 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-73.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">44 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-74.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">45 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-75.jpg" style="width:100%">
            </div>
            <div class="interiorSlides">
                <div class="numbertext">46 / 46</div>
                <img id="interiorImg" src="img/Interior/ENR-Tasting-76.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorSlides(1)">&#10095;</a>

        </div>
    </div>

    <!--div id="interiorTModal" class="modal">
        <span class="close cursor" onclick="closeInteriorTModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorTSlides">
                <div class="numbertext">1 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-2.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">2 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-7.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">3 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-9.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">4 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-37.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">5 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-38.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">6 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-39.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">7 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-41.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">8 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-42.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">9 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-43.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">10 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-44.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">11 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-45.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">12 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-46.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">13 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/DSC_0895.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorTSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorTSlides(1)">&#10095;</a>

        </div>
    </div-->

    <div id="staffModal" class="modal">
        <span class="close cursor" onclick="closeStaffModal()">&times;</span>
        <div class="modal-content">

            <div class="staffSlides">
                <div class="numbertext">1 / 29</div>
                <img id="staffImg" src="img/Staff/s1.JPG" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">2 / 29</div>
                <img id="staffImg" src="img/Staff/s3.JPG" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">3 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-4.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">4 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-14.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">5 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-20.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">6 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-25.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">7 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-26.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">8 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-28.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">9 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-53.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">10 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-39.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">11 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-51.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">12 / 29</div>
                <img id="staffImg" src="img/Ninja/ENR%20-%20Heeadshots%20&%20Photoshoot-52.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">13 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-18.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">14 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-19.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">15 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-22.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">16 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-41.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">17 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-13.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">18 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-16.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">19 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-44.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">20 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-58.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">21 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-59.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">22 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-61.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">23 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-66.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">24 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-68.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">25 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-76.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">26 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-86.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">27 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-118.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">28 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-123.jpg" style="width:100%">
            </div>
            <div class="staffSlides">
                <div class="numbertext">29 / 29</div>
                <img id="staffImg" src="img/Staff/ENR-Tasting-139.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusStaffSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusStaffSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="videoModal" class="modal">
        <span class="close cursor" onclick="closeVideoModal()">&times;</span>
        <div class="modal-content">

            <div class="videoSlides">
                <div class="numbertext">1 / 1</div>
                <div id="content-desktop">
                    <center>
                        <video width="480" height="480" controls>
                            <source src="vid/valentines.MP4" type="video/mp4">
                        </video>
                    </center>
                </div>

                <div id="content-mobile">
                    <center>
                        <video width="90%" height="90%" controls>
                            <source src="vid/valentines.MP4" type="video/mp4">
                        </video>
                    </center>
                </div>

            </div>

            <a class="prev" onclick="plusVideoSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusVideoSlides(1)">&#10095;</a>

        </div>
    </div>

    <!--div id="menuModal" class="modal">
        <span class="close cursor" onclick="closeMenuModal()">&times;</span>
        <div class="modal-content">

            <div class="menuSlides">
                <div class="numbertext">1 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-001.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">2 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-002.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">3 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-003.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">4 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-004.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">5 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-005.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">6 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-006.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">7 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-001.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">8 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-002.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">9 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-003.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">10 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-004.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">11 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-005.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">12 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-006.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">13 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/Menu%20Drinks-1.png" style="width:100%" alt="Drinks Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">14 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/Menu%20Drinks-2.png" style="width:100%" alt="Drinks Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">15 / 15</div>
                <img class="demomenu cursor" id="galleryImg" src="img/Menu/Menu%20Drinks-3.png" style="width:100%" alt="Drinks Menu">
            </div>

            <a class="prev" onclick="plusMenuSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusMenuSlides(1)">&#10095;</a>

            <div class="caption-container" style="height: 25px;">
                <p id="captionmenu" style="color:white;"></p>
            </div>
        </div>
    </div-->

    <?php include("views/Gallery/Modals/Event_Modal-Min.html") ?>
    <?php include("views/Gallery/Modals/Tasting_Modal.html") ?>
    <?php include("views/Gallery/Modals/Grand_Opening_Modal.html") ?>
    <?php include("views/Gallery/Modals/Ninja_Weekend_Modal.html") ?>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        function openEventModal() {
            document.getElementById("eventModal").style.display = "block";
        }

        function closeEventModal() {
            document.getElementById("eventModal").style.display = "none";
        }

        function openTastingModal() {
            document.getElementById("tastingModal").style.display = "block";
        }

        function closeTastingModal() {
            document.getElementById("tastingModal").style.display = "none";
        }

        function openOpeningModal() {
            document.getElementById("openingModal").style.display = "block";
        }

        function closeOpeningModal() {
            document.getElementById("openingModal").style.display = "none";
        }

        function openEventModalWeekend() {
            document.getElementById("eventModalWeekend").style.display = "block";
        }

        function closeEventModalWeekend() {
            document.getElementById("eventModalWeekend").style.display = "none";
        }

        function openFoodModal() {
            document.getElementById("foodModal").style.display = "block";
        }

        function closeFoodModal() {
            document.getElementById("foodModal").style.display = "none";
        }

        function openInteriorModal() {
            document.getElementById("interiorModal").style.display = "block";
        }

        function closeInteriorModal() {
            document.getElementById("interiorModal").style.display = "none";
        }

        function openInteriorTModal() {
            document.getElementById("interiorTModal").style.display = "block";
        }

        function closeInteriorTModal() {
            document.getElementById("interiorTModal").style.display = "none";
        }

        function openStaffModal() {
            document.getElementById("staffModal").style.display = "block";
        }

        function closeStaffModal() {
            document.getElementById("staffModal").style.display = "none";
        }

        function openMenuModal() {
            document.getElementById("menuModal").style.display = "block";
        }

        function closeMenuModal() {
            document.getElementById("menuModal").style.display = "none";
        }

        function openVideoModal() {
            document.getElementById("videoModal").style.display = "block";
        }

        function closeVideoModal() {
            document.getElementById("videoModal").style.display = "none";
        }

        var eventSlideIndex = 1;
        showEventSlides(eventSlideIndex);

        var tastingSlideIndex = 1;
        showTastingSlides(tastingSlideIndex);

        var openingSlideIndex = 1;
        showOpeningSlides(openingSlideIndex);

        var eventSlideWeekendIndex = 1;
        showEventSlidesWeekend(eventSlideWeekendIndex);

        var foodSlideIndex = 1;
        showFoodSlides(foodSlideIndex);

        var interiorSlideIndex = 1;
        showInteriorSlides(interiorSlideIndex);

        var interiorTSlideIndex = 1;
        showInteriorTSlides(interiorTSlideIndex);

        var staffSlideIndex = 1;
        showStaffSlides(staffSlideIndex);

        var menuSlideIndex = 1;
        showMenuSlides(menuSlideIndex);

        var videoSlideIndex = 1;
        showVideoSlides(videoSlideIndex);

        function plusEventSlides(n) {
            showEventSlides(eventSlideIndex += n);
        }

        function currentEventSlide(n) {
            showEventSlides(eventSlideIndex = n);
        }

        function plusVideoSlides(n) {
            showVideoSlides(videoSlideIndex += n);
        }

        function currentVideoSlide(n) {
            showVideoSlides(videoSlideIndex = n);
        }

        function plusTastingSlides(n) {
            showTastingSlides(tastingSlideIndex += n);
        }

        function currentTastingSlide(n) {
            showTastingSlides(tastingSlideIndex = n);
        }

        function plusOpeningSlides(n) {
            showOpeningSlides(openingSlideIndex += n);
        }

        function currentOpeningSlide(n) {
            showOpeningSlides(openingSlideIndex = n);
        }

        function plusEventSlidesWeekend(n) {
            showEventSlidesWeekend(eventSlideWeekendIndex += n);
        }

        function currentEventSlidesWeekend(n) {
            showEventSlidesWeekend(eventSlideWeekendIndex = n);
        }

        function plusFoodSlides(n) {
            showFoodSlides(foodSlideIndex += n);
        }

        function currentFoodSlide(n) {
            showFoodSlides(foodSlideIndex = n);
        }

        function plusInteriorSlides(n) {
            showInteriorSlides(interiorSlideIndex += n);
        }

        function currentInteriorSlide(n) {
            showInteriorSlides(interiorSlideIndex = n);
        }

        function plusInteriorTSlides(n) {
            showInteriorTSlides(interiorTSlideIndex += n);
        }

        function currentInteriorTSlide(n) {
            showInteriorTSlides(interiorTSlideIndex = n);
        }

        function plusStaffSlides(n) {
            showStaffSlides(staffSlideIndex += n);
        }

        function currentStaffSlide(n) {
            showStaffSlides(staffSlideIndex = n);
        }

        function plusMenuSlides(n) {
            showMenuSlides(menuSlideIndex += n);
        }

        function currentMenuSlide(n) {
            showMenuSlides(menuSlideIndex = n);
        }

        function showEventSlides(n) {
            var i;
            var slides = document.getElementsByClassName("eventSlides");
            var dots = document.getElementsByClassName("demo3");
            var captionText = document.getElementById("caption3");
            if (n > slides.length) {eventSlideIndex = 1}
            if (n < 1) {eventSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[eventSlideIndex-1].style.display = "block";
            dots[eventSlideIndex-1].className += " active";
            captionText.innerHTML = dots[eventSlideIndex-1].alt;
        }

        function showVideoSlides(n) {
            var i;
            var slides = document.getElementsByClassName("videoSlides");
            var dots = document.getElementsByClassName("demo6");
            var captionText = document.getElementById("caption6");
            if (n > slides.length) {videoSlideIndex = 1}
            if (n < 1) {videoSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[videoSlideIndex-1].style.display = "block";
            dots[videoSlideIndex-1].className += " active";
            captionText.innerHTML = dots[videoSlideIndex-1].alt;
        }

        function showTastingSlides(n) {
            var i;
            var slides = document.getElementsByClassName("tastingSlides");
            var dots = document.getElementsByClassName("demoTasting");
            var captionText = document.getElementById("captionTasting");
            if (n > slides.length) {tastingSlideIndex = 1}
            if (n < 1) {tastingSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[tastingSlideIndex-1].style.display = "block";
            dots[tastingSlideIndex-1].className += " active";
            captionText.innerHTML = dots[tastingSlideIndex-1].alt;
        }

        function showOpeningSlides(n) {
            var i;
            var slides = document.getElementsByClassName("openingSlides");
            var dots = document.getElementsByClassName("demoOpening");
            var captionText = document.getElementById("captionOpening");
            if (n > slides.length) {openingSlideIndex = 1}
            if (n < 1) {openingSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[openingSlideIndex-1].style.display = "block";
            dots[openingSlideIndex-1].className += " active";
            captionText.innerHTML = dots[openingSlideIndex-1].alt;
        }

        function showEventSlidesWeekend(n) {
            var i;
            var slides = document.getElementsByClassName("eventSlidesWeekend");
            var dots = document.getElementsByClassName("demo4");
            var captionText = document.getElementById("caption4");
            if (n > slides.length) {eventSlideWeekendIndex = 1}
            if (n < 1) {eventSlideWeekendIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[eventSlideWeekendIndex-1].style.display = "block";
            dots[eventSlideWeekendIndex-1].className += " active";
            captionText.innerHTML = dots[eventSlideWeekendIndex-1].alt;
        }

        function showFoodSlides(n) {
            var i;
            var slides = document.getElementsByClassName("foodSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {foodSlideIndex = 1}
            if (n < 1) {foodSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[foodSlideIndex-1].style.display = "block";
            dots[foodSlideIndex-1].className += " active";
            captionText.innerHTML = dots[foodSlideIndex-1].alt;
        }

        function showInteriorSlides(n) {
            var i;
            var slides = document.getElementsByClassName("interiorSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {interiorSlideIndex = 1}
            if (n < 1) {interiorSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[interiorSlideIndex-1].style.display = "block";
            dots[interiorSlideIndex-1].className += " active";
            captionText.innerHTML = dots[interiorSlideIndex-1].alt;
        }

        function showInteriorTSlides(n) {
            var i;
            var slides = document.getElementsByClassName("interiorTSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {interiorTSlideIndex = 1}
            if (n < 1) {interiorTSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[interiorTSlideIndex-1].style.display = "block";
            dots[interiorTSlideIndex-1].className += " active";
            captionText.innerHTML = dots[interiorTSlideIndex-1].alt;
        }

        function showStaffSlides(n) {
            var i;
            var slides = document.getElementsByClassName("staffSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {staffSlideIndex = 1}
            if (n < 1) {staffSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[staffSlideIndex-1].style.display = "block";
            dots[staffSlideIndex-1].className += " active";
            captionText.innerHTML = dots[staffSlideIndex-1].alt;
        }

        function showMenuSlides(n) {
            var i;
            var slides = document.getElementsByClassName("menuSlides");
            var dots = document.getElementsByClassName("demomenu");
            var captionText = document.getElementById("captionmenu");
            if (n > slides.length) {menuSlideIndex = 1}
            if (n < 1) {menuSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[menuSlideIndex-1].style.display = "block";
            dots[menuSlideIndex-1].className += " active";
            captionText.innerHTML = dots[menuSlideIndex-1].alt;
        }
    </script>
</div>

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
