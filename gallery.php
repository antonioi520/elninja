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
    <link href="css/gallery.css" rel="stylesheet">
<!--    <link href="css/menu.css" rel="stylesheet">-->
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
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-13.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero">
               <!-- <center>
                    <img src="img/logo.png" class="galleryHeaderImage">
                </center>-->
                <center>
                    <div class="galleryHeaderBox">
                        <h1 class="menu-heading galleryHeaderText">Gallery</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero">
                <center>
                    <div class="galleryHeaderBox">
                        <h1 class="menu-heading galleryHeaderText">Gallery</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero">
                <center>
                    <div class="galleryHeaderBox">
                        <h1 class="menu-heading galleryHeaderText">Gallery</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="arrowRemove">
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




<div class="container">
<!--    <h1 class="menu-heading">Gallery</h1>-->
    <center>
        <img src="img/logo_ninja.png" style="height:200px;width:300px;object-fit: contain;">
    </center>
    <br>
    <hr>
    <h2 style="text-align:center; color:black;padding-bottom:0px;">Food & Drinks</h2>
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
        </div>
    </div>

    <br>

    <h2 style="text-align:center; color:black;padding-bottom:0px;">Interior (Cafe)</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-5.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-6.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-9.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-10.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-11.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-12.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-13.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-14.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-15.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-16.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-17.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-19.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-20.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-21.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-22.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-23.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-24.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-26.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-27.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-29.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(20)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <h2 style="text-align:center; color:black;padding-bottom:0px;">Interior (Theater)</h2>
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
    </div>

    <br>

    <h2 style="text-align:center; color:black;padding-bottom:0px;">Staff</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/staff.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/staff3.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/MiAlmaCafeOpeningCeremony-8.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(3)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>
    <h2 style="text-align:center; color:black;padding-bottom:0px;">Menu</h2>
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
        </div>
    </div>

    <div id="foodModal" class="modal">
        <span class="close cursor" onclick="closeFoodModal()">&times;</span>
        <div class="modal-content">

            <div class="foodSlides">
                <div class="numbertext">1 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-1.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">2 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-2.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">3 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-3.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">4 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-4.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">5 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-5.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">6 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-6.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">7 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-7.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">8 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-8.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">9 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-9.jpg" style="width:100%" alt="">
            </div>

            <div class="foodSlides">
                <div class="numbertext">10 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-10.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">11 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-11.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">12 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-12.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">13 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-13.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">14 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-14.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">15 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-15.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">16 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-16.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">17 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-17.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">18 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-18.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">19 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-19.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">20 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-20.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">21 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-21.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">22 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-22.jpg" style="width:100%" alt="">
            </div>
            <div class="foodSlides">
                <div class="numbertext">23 / 23</div>
                <img class="demo cursor" id="galleryImg" src="img/FoodDrink/ElNinjaFood-23.jpg" style="width:100%" alt="">
            </div>

            <a class="prev" onclick="plusFoodSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusFoodSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container" style="height: 25px;">
                <p id="caption"></p>
            </div>

        </div>
    </div>

    <div id="interiorModal" class="modal">
        <span class="close cursor" onclick="closeInteriorModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorSlides">
                <div class="numbertext">1 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-5.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">2 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-6.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">3 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-9.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">4 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-10.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">5 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-11.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">6 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-12.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">7 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-13.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">8 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-14.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">9 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-15.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">10 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-16.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">11 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-17.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">12 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-19.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">13 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-20.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">14 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-21.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">15 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-22.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">16 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">17 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-24.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">18 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-26.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">19 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">20 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-29.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="interiorTModal" class="modal">
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
    </div>

    <div id="staffModal" class="modal">
        <span class="close cursor" onclick="closeStaffModal()">&times;</span>
        <div class="modal-content">

            <div class="staffSlides">
                <div class="numbertext">1 / 3</div>
                <img id="staffImg" src="img/Staff/staff.jpg" style="width:100%">
            </div>

            <div class="staffSlides">
                <div class="numbertext">2 / 3</div>
                <img id="staffImg" src="img/Staff/staff3.jpg" style="width:100%">
            </div>

            <div class="staffSlides">
                <div class="numbertext">3 / 3</div>
                <img id="staffImg" src="img/Staff/MiAlmaCafeOpeningCeremony-8.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusStaffSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusStaffSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="menuModal" class="modal">
        <span class="close cursor" onclick="closeMenuModal()">&times;</span>
        <div class="modal-content">

            <div class="menuSlides">
                <div class="numbertext">1 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-001.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">2 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-002.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">3 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-003.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">4 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-004.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">5 / 8</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-005.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">6 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/El%20Ninja%20Ingles-page-006.jpg" style="width:100%" alt="English Menu">
            </div>
            <div class="menuSlides">
                <div class="numbertext">7 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-001.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">8 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-002.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">9 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-003.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">10 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-004.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">11 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-005.jpg" style="width:100%" alt="Menú Español">
            </div>
            <div class="menuSlides">
                <div class="numbertext">12 / 12</div>
                <img class="demo2 cursor" id="galleryImg" src="img/Menu/ElNinjaEspanol-page-006.jpg" style="width:100%" alt="Menú Español">
            </div>

            <a class="prev" onclick="plusMenuSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusMenuSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container" style="height: 25px;">
                <p id="caption2"></p>
            </div>
        </div>
    </div>

    <script>
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
            var dots = document.getElementsByClassName("demo2");
            var captionText = document.getElementById("caption2");
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
