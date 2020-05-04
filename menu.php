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
    <link href="css/menu.css" rel="stylesheet">
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
            <img class="d-block w-100" src="img/FoodDrink/4.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
                <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero" style="">
                    <!--<center>
                        <img src="img/logo.png" class="menuHeaderImage" style="padding-bottom: 200px;">
                    </center>-->
                    <center>
                    <div class="menuHeaderBox">
                        <h1 class="menu-heading menuHeaderText" style="top:-10px;">El Ninja Menu</h1>
                    </div>
                    </center>
                </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/FoodDrink/3.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero" style="">

                <center>
                    <div class="menuHeaderBox">
                        <h1 class="menu-heading menuHeaderText" style="color:white;">El Ninja Menu</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/FoodDrink/7.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero" style="">

                <center>
                    <div class="menuHeaderBox">
                        <h1 class="menu-heading menuHeaderText" style="color:white;">El Ninja Menu</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/FoodDrink/8.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero" style="">

                <center>
                    <div class="menuHeaderBox">
                        <h1 class="menu-heading menuHeaderText" style="color:white;">El Ninja Menu</h1>
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


    <div class="container" id="">
        <center>
            <img src="img/logo_ninja.png" style="height:200px;width:300px;object-fit: contain;">
        </center>

        <br> <hr>
        <div id="topofMenu"></div>
        <center>
            <a href="#topofMenu" id="fooddrinkButton" onclick="switchToAppsMenu()">Appetizers</a>
            <a href="#topofMenu" id="fooddrinkButton" onclick="switchToRollsMenu()">Rolls</a>
            <a href="#topofMenu" id="fooddrinkButton" onclick="switchToEntreeMenu()">Entrees</a>
            <a href="#topofMenu" id="fooddrinkButton" onclick="switchToMiscMenu()">Etc.</a>
            <br><br>
            <a href="#topofMenu" style="text-decoration: underline;" onclick="openMenuModal();currentMenuSlide(1)">(View take-out menu)</a>
            <div id="menuModal" class="modal">
                <span class="close cursor" onclick="closeMenuModal()">&times;</span>
                <div class="modal-content">

                    <div class="menuSlides">
                        <div class="numbertext">1 / 2</div>
                        <img id="menuImg" src="img/Menu/takeout_front.jpg" style="width:100%">
                        <a href="img/Menu/takeout_front.jpg" class="mobileViewFullMenu">View Full</a>
                    </div>
                    <div class="menuSlides">
                        <div class="numbertext">2 / 2</div>
                        <img id="menuImg" src="img/Menu/takeout_back.jpg" style="width:100%">
                        <a href="img/Menu/takeout_back.jpg" class="mobileViewFullMenu">View Full</a>
                    </div>

                    <a class="prev" onclick="plusMenuSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusMenuSlides(1)">&#10095;</a>

                </div>
            </div>

        </center>
        <br>
        <!--img src="img/menualma.jpg" class="menuImgTop" alt="drink menu" style=""><br-->
        <div class="menu menu-row menu-wrap menu-center" id="appsDiv">

            <div class="appetizers">
                <h2 style="font-weight: bolder;">APERITIVOS/APPETIZERS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">EL FINAL
                    <span class="menu-item-price2"> $12</span>
                    </span>
                    <p class="menu-item-description2">Torre Ninja con bistec, maduro y aguacate fresco. Servido con salsa de chinola dulce y pico de gallo.<br> Chef Ninja's tower of thinly sliced steak, fried maduros, fresh avocado slices served with sweet chinola sauce and pico de gallo.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CONCONCITOS
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                    </span>
                    <p class="menu-item-description" style="color:black">Trio de canastas de arroz crujiente con un toque de chile dulce y guacamole fresco. Rellenas de ropa vieja, pollo guisado y camarones.<br> A trio of crispy rice baskets with a hint of sweet chili and fresh guacamole, full of ropa vieja, stewed chicken, and shrimp.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">YOLA
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Nuestra famosa canoa de plátano maduro rellena de camarones en salsa Especial del Ninja.<br> Our famous sweet plantain canoes stuffed with shrimps topped by Ninja's Special Sauce.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TERIYAKO OCTOPUS SKEWERS
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pinchos de pulpo a la plancha marinado en teriyaki de ajo.<br> Grilled baby octopus skewers with a garlic teriyaki marinade.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">ROLLITOS DE SALMÓN
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón ahumado envuelto de pepino y queso crema. <br> Smoked salmon wrapped by cucumber slice and cream cheese.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TROPICAL TUNA TARTAR
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Filete de atún, mango fresco y aguacate con un toque de cilantro y mayonesa picante. <br> A delightful mix of diced tuna, fresh mango and avocado with a hint of cilantro and spicy mayo.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">ROCK SHRIMP
                        <span class="menu-item-price" style="float:right;color:black"> $13</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarones fritos con nuestro aioli de ajo picante. <br> Deep-fried shrimp covered with our spicy garlic aioli.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">KANI CROQUETTE
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Ninja's croquetas de kani con jalapeño, cebolla y mayonesa. Servido con nuestro aioli de cilantro cremoso. <br> Ninja's crab cream croquettes with jalapeno, onion, mayo served with creamy cilantro aioli.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">VEGGIE TEMPURA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Verduras de temporada rebozadas y fritas. <br> Seasonal vegetables lightly battered and fried.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EDAMAME
                        <span class="menu-item-price" style="float:right;color:black"> $5</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Guisantes verdes salados al vapor. <br> Steamed seas salted green pea pods.</p>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">APERITIVOS/APPETIZERS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CRISPY CALAMARI
                    <span class="menu-item-price2"> $12</span>
                    </span>
                    <p class="menu-item-description2">Calamares fritos en tempura con nuestro aioli de chipotle cremoso.<br> Tempura fried calamari rings with creamy chipotle aioli.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TUNA TATAKI
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                    </span>
                    <p class="menu-item-description" style="color:black">Atún fresco servido con nuestra cremosa salsa de chinola miso.<br> Lightly-seared fresh tuna served with our creamy miso passion fruit sauce.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CEVICHE DE PULPO
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pulpo, pimientas, cebollas, cilantro y judo de limón. Servido con tostones.<br> Ceviche of octopus, lime juice, peppers and onions, cilantro, served with tostones.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CHICKEN PANKO
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo frito deshuesado al esilo japonés.<br> Japanese style boneless fried chicken.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SWEET 'N SOUR CHICHARRÓN
                        <span class="menu-item-price" style="float:right;color:black"> $10</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Chicharrón de cerdo al estilo dominicano. <br> Dominican-style fried pork belly.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">ROPA VIEJA EMPANADAS
                        <span class="menu-item-price" style="float:right;color:black"> $10</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Rellenas de ropa vieja y mozzarella. <br> Our delicious fried flour pastries filled with shredded steak and mozzarella cheese.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">KANI EMPANADAS
                        <span class="menu-item-price" style="float:right;color:black"> $10</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Rellenas de kani picante y mozzarella. <br> Latin fried flour pastries filled with spicy Japanese kani and mozzarella cheese.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CUBAN EMPANADAS
                        <span class="menu-item-price" style="float:right;color:black"> $10</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Rellenas de pernil, jamón y queso. <br> A Cuban twist to our fried flour pastries filled with slow roasted pork, ham, and mozzarella cheese.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">GYOZA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Dumplings de pollo teriyaki. <br> Japanese chicken teriyaki dumplings.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NINJA'S PICADERA
                        <span class="menu-item-price" style="float:right;color:black"> $40</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo, camarones, chicharrón, longaniza, queso frito, yucca y tostones. <br> Ninja's sample platter (chicken, shrimps, chicharron, longaniza, queso frito, tostones, yuca).</p>
                </div>
            </div>

        </div>
        <div class="menu menu-row menu-wrap menu-center" id="rollsDiv" style="display: none">
            <div class="appetizers">
                <h2 style="font-weight: bolder;">FUSION ROLLS</h2>
                <div class="red-title-divider"></div>
                <!--br id="content-desktop896"-->
                <div class="menu-item2">
                    <span class="menu-item-title2">LA PELA
                    <span class="menu-item-price2"> $15</span>
                    </span>
                    <p class="menu-item-description2">Camarón tempura, queso crema, madura y guacamole. Afuera: Marisco mixto.<br> Shrimp tempura, cream cheese, maduro, guacamole (seafood mix).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LA BROA
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                    </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso frito, madura y guacamole. Afuera: Ropa vieja.<br> Shrimp tempura, queso frito, maduro, guacamole (ropa vieja).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">BAVARO BEACH ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón tempura, queso crema, tocino, maduro y aguacate.<br> Salmon tempura, cream cheese, bacon, maduro, avocado.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EL NINJA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo tempura, tocineta, queso crema, maduro y guacamole. Afuera: Pollo teriyaki.<br> Chicken tempura, bacon, cream cheese, maduro, guacamole (chicken teriyaki).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LA CHAPI
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo tempura, tocineta, queso crema, maduro y guacamole. Afuera: Chicharrón. <br> Chicken tempura, bacon, cream cheese, maduro, guacamole (chicharron).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TAKI TAKI ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $13</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Churrasco, tocineta, queso crema, maduro y aguacate. <br> Churrasco, bacon, cream cheese, maduro, avocado.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CANDELA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso crema and aguacate. Afuera: Camarones picante. <br> Shrimp tempura, cream cheese, avocado (spicy chilli shrimp).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CAPOTILLO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo tempura, queso frito, maduro and guacamole. Afuera: Longaniza guisada. <br> Chicken tempura, queso frito, maduro, guacamole (longaniza guisada).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NO BULTO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo a la plancha, bistec, queso crema, maduro, guacamole y pico de gallo. <br> Grilled chicken, steak, cream cheese, maduro, guacamole, pico de gallo.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EL PATIO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $10</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Longaniza, queso frito y maduro. <br> Longaniza, queso frito, maduro.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">GEISHA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarones tempura, tocineta, mozzarella y maduro. <br> Shrimp tempura, bacon, mozarella, maduro (deep fried).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">VOLCANO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso crema y aguacate. Afuera: Kani picante. <br> Shrimp tempura, cream cheese, avocado (spicy kani).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">MI ALMA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso crema, maduro y aguacate. Afuera: Cangrejo. <br> Shrimp tempura, cream cheese, maduro, avocado (crab meat).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LA ROMANA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón tempura, queso crema, maduro y aguacate. Afuera: Bacalao. <br> Salmon tempura, cream cheese, amaduro, avocado (bacalao).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CONSTANZA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Espárragos tempura, batata japonesa, maduro, guacamole y pico de gallo. <br> Asparagus tempura, Japanese sweet potato, maduro, guacamole, pico de gallo.</p>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">ROLLOS TRADICIONALES/<br>TRADITIONAL ROLLS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CALIFORNIA
                    <span class="menu-item-price2"> $7</span>
                    </span>
                    <p class="menu-item-description2">Kani, aguacate y pepino.<br> Kani, avocado, cucumber.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EEL AVOCADO
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                    </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SPICY TUNA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PHILADELPHIA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón, pepino y queso crema.<br> Salmon, cucumber, cream cheese.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SPICY SALMON
                        <span class="menu-item-price" style="float:right;color:black"> $7</span>
                        </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SHRIMP TEMPURA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">HAMACHI ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Spicy yellowtail.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">RAINBOW ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Kani, pepino, y aguacate. Afuera: hamachi, atún, and salmón. <br> Kani, cucumber, avocado (yellowtail, tuna, salmon).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">OKINAWA ROLL
                    <span class="menu-item-price2"> $14</span>
                    </span>
                    <p class="menu-item-description2">Kani, pepino y queso crema. Afuera: Maduro, guacamole y cangrejo.<br> Kani, cucumber, cream cheese (maduro, guacamole, crab meat).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">ALOHA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                    </span>
                    <p class="menu-item-description" style="color:black">Atún picante y kani. Afuera: Aguacate y salsa de piña.<br> Spicy tuna, kani (avocado, pineapple salsa).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SAKURA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón y pepino. Afuera: Salmón ahumado, aguacate, y tobiko.<br> Salmon, cucumber (smoked salmon, avocado, tobiko).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SAMURAI ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Ensalada de kani y pepino. Afuera: Atún, aguacate, salmón, wakame, and tobiko.<br> Kani salad, cucumber (tuna, avocado, salmon, wakame, tobiko).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">DRAGON ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $13</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, anguila y aguacate. <br> Shrimp tempura, eel, avocado.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">HANA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Tartar de atún, pepino, aguacate, mango y jalapeño. <br> Tuna tartar, cucumber, avocado, mango, jalapeno.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">BLACK ROSE ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Atún picante, salmón ahumando y aguacate. Frito con pico de gallo por encima. <br> Spicy tuna, smoked salmon, avocado (deep fried, pico de gallo).</p>
                </div>
            </div>
        </div>
        <div class="menu menu-row menu-wrap menu-center" id="entreeDiv" style="display: none">
            <div class="entrees">
                <h2 style="font-weight: bolder;">PLATOS FUERTES/ENTREES</h2>
                <div class="red-title-divider"></div>
                <!--br id="content-desktop896"-->
                <div class="menu-item2">
                    <span class="menu-item-title2">LA PELA
                    <span class="menu-item-price2"> $15</span>
                    </span>
                    <p class="menu-item-description2">Camarón tempura, queso crema, madura y guacamole. Afuera: Marisco mixto.<br> Shrimp tempura, cream cheese, maduro, guacamole (seafood mix).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LA BROA
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                    </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso frito, madura y guacamole. Afuera: Ropa vieja.<br> Shrimp tempura, queso frito, maduro, guacamole (ropa vieja).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">BAVARO BEACH ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón tempura, queso crema, tocino, maduro y aguacate.<br> Salmon tempura, cream cheese, bacon, maduro, avocado.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EL NINJA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo tempura, tocineta, queso crema, maduro y guacamole. Afuera: Pollo teriyaki.<br> Chicken tempura, bacon, cream cheese, maduro, guacamole (chicken teriyaki).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LA CHAPI
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo tempura, tocineta, queso crema, maduro y guacamole. Afuera: Chicharrón. <br> Chicken tempura, bacon, cream cheese, maduro, guacamole (chicharron).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TAKI TAKI ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $13</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Churrasco, tocineta, queso crema, maduro y aguacate. <br> Churrasco, bacon, cream cheese, maduro, avocado.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CANDELA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso crema and aguacate. Afuera: Camarones picante. <br> Shrimp tempura, cream cheese, avocado (spicy chilli shrimp).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CAPOTILLO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo tempura, queso frito, maduro and guacamole. Afuera: Longaniza guisada. <br> Chicken tempura, queso frito, maduro, guacamole (longaniza guisada).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NO BULTO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Pollo a la plancha, bistec, queso crema, maduro, guacamole y pico de gallo. <br> Grilled chicken, steak, cream cheese, maduro, guacamole, pico de gallo.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EL PATIO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $10</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Longaniza, queso frito y maduro. <br> Longaniza, queso frito, maduro.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">GEISHA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarones tempura, tocineta, mozzarella y maduro. <br> Shrimp tempura, bacon, mozarella, maduro (deep fried).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">VOLCANO ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso crema y aguacate. Afuera: Kani picante. <br> Shrimp tempura, cream cheese, avocado (spicy kani).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">MI ALMA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, queso crema, maduro y aguacate. Afuera: Cangrejo. <br> Shrimp tempura, cream cheese, maduro, avocado (crab meat).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LA ROMANA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón tempura, queso crema, maduro y aguacate. Afuera: Bacalao. <br> Salmon tempura, cream cheese, amaduro, avocado (bacalao).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CONSTANZA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Espárragos tempura, batata japonesa, maduro, guacamole y pico de gallo. <br> Asparagus tempura, Japanese sweet potato, maduro, guacamole, pico de gallo.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">PLATOS FUERTES/ENTREES</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CALIFORNIA
                    <span class="menu-item-price2"> $7</span>
                    </span>
                    <p class="menu-item-description2">Kani, aguacate y pepino.<br> Kani, avocado, cucumber.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">EEL AVOCADO
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                    </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SPICY TUNA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PHILADELPHIA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón, pepino y queso crema.<br> Salmon, cucumber, cream cheese.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SPICY SALMON
                        <span class="menu-item-price" style="float:right;color:black"> $7</span>
                        </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SHRIMP TEMPURA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">HAMACHI ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Spicy yellowtail.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">RAINBOW ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Kani, pepino, y aguacate. Afuera: hamachi, atún, and salmón. <br> Kani, cucumber, avocado (yellowtail, tuna, salmon).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">OKINAWA ROLL
                    <span class="menu-item-price2"> $14</span>
                    </span>
                    <p class="menu-item-description2">Kani, pepino y queso crema. Afuera: Maduro, guacamole y cangrejo.<br> Kani, cucumber, cream cheese (maduro, guacamole, crab meat).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">ALOHA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                    </span>
                    <p class="menu-item-description" style="color:black">Atún picante y kani. Afuera: Aguacate y salsa de piña.<br> Spicy tuna, kani (avocado, pineapple salsa).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SAKURA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Salmón y pepino. Afuera: Salmón ahumado, aguacate, y tobiko.<br> Salmon, cucumber (smoked salmon, avocado, tobiko).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SAMURAI ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $15</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Ensalada de kani y pepino. Afuera: Atún, aguacate, salmón, wakame, and tobiko.<br> Kani salad, cucumber (tuna, avocado, salmon, wakame, tobiko).</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">DRAGON ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $13</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Camarón tempura, anguila y aguacate. <br> Shrimp tempura, eel, avocado.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">HANA ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Tartar de atún, pepino, aguacate, mango y jalapeño. <br> Tuna tartar, cucumber, avocado, mango, jalapeno.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">BLACK ROSE ROLL
                        <span class="menu-item-price" style="float:right;color:black"> $14</span>
                        </span>
                    <p class="menu-item-description" style="color:black">Atún picante, salmón ahumando y aguacate. Frito con pico de gallo por encima. <br> Spicy tuna, smoked salmon, avocado (deep fried, pico de gallo).</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">CHOFAN</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">HAWAIIAN CHOFAN
                    <span class="menu-item-price2"> $16</span>
                    </span>
                    <p class="menu-item-description2">Con jamón ahumado, camarones, verdura y piña.<br> Hawaiian style chofan brings smoked ham, shrimp, veggies, and pineapple.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">NINJA CHOFAN
                    <span class="menu-item-price2"> $10</span>
                    </span>
                    <p class="menu-item-description2">Arroz frito del Ninja con plátano maduro, verduras, huevo. <br> <b>Su elección:</b> Pollo $4 - Camarones $6<br> Ninja's fried rice with sweet plantain, veggies, egg. <br> <b>Your Choice:</b> Chicken $4 - Shrimp $6</p>
                </div>
            </div>

        </div>
        <div class="menu menu-row menu-wrap menu-center" id="miscDiv" style="display: none">
            <!-- Soups/Salad/Sides/Dessert/Kid Menu go here-->
        </div>

        <br>
        <span class="menu-item-name">IMPORTANTE: Algunos artículos vienen crudos o parcialmente cocinados y pueden incrementar el riesgo de enfermedades por alimentos.
        Los consumidores que son especialmente vulnerables solo deben de comer carnes, mariscos y otras comidas de animales completamente cocinados.
        Por favor notifíquemos inmediatamente de cualquier alergia que usted tenga.
        <br> <br>
        IMPORTANT: Some items come raw or partially cooked and may increase the risk of foodborne illness. Consumers who are especially
        vulnerable should only eat meat, seafood and other fully cooked animal foods. Please notify us immediately of any allergies you have.</span>

    </div>


<script>
    var apps = document.getElementById("appsDiv");
    var rolls = document.getElementById("rollsDiv");
    var entrees = document.getElementById("entreeDiv");
    var misc = document.getElementById("miscDiv");

    function switchToAppsMenu() {
        apps.style.display = "flex";
        rolls.style.display = "none";
        entrees.style.display = "none";
        misc.style.display = "none";
    }
    function switchToRollsMenu() {
        apps.style.display = "none";
        rolls.style.display = "flex";
        entrees.style.display = "none";
        misc.style.display = "none";
    }
    function switchToEntreeMenu() {
        apps.style.display = "none";
        rolls.style.display = "none";
        entrees.style.display = "flex";
        misc.style.display = "none";
    }
    function switchToMiscMenu() {
        apps.style.display = "none";
        rolls.style.display = "none";
        entrees.style.display = "none";
        misc.style.display = "flex";
    }
</script>

<script>

    function openMenuModal() {
        document.getElementById("menuModal").style.display = "block";
    }

    function closeMenuModal() {
        document.getElementById("menuModal").style.display = "none";
    }

    var menuSlideIndex = 1;
    showMenuSlides(menuSlideIndex);

    function plusMenuSlides(n) {
        showMenuSlides(menuSlideIndex += n);
    }

    function currentMenuSlide(n) {
        showMenuSlides(menuSlideIndex = n);
    }

    function showMenuSlides(n) {
        var i;
        var slides = document.getElementsByClassName("menuSlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
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

<br>
<br>
<?php include("views/footer.html")?>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<?php include("views/includebottom.html") ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
