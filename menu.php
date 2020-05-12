<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 5/5/2020
 * Time: 10:49 PM
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

    <style>
        .repeating-bg {
            background-image: url(img/ninja_space.png);
            background-repeat: space;
        }
        .top-link {
            transition: all .25s ease-in-out;
            position: fixed;
            bottom: -10px;
            right: -10px;
            display: inline-flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            margin: 0 2em 2em 0;
            border-radius: 50%;
            padding: .25em;
            width: 40px;
            height: 40px;
            background-color: #f7f7f7;
            border: 2px solid red;
        }
        .top-link.show {
            visibility: visible;
            opacity: 1;
        }
        .top-link.hide {
            visibility: hidden;
            opacity: 0;
        }
        .top-link:hover {
            background-color: #f7f7f7;
            transform: scale(1.15);
        }
        /*@media (hover: hover) {
            .top-link:hover {
                background-color: #f7f7f7;
                transform: scale(1.2);
            }}
        }*/
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fadein.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link rel="shortcut icon" href="img/logo_ninja.png" type="image/x-icon">
    <link rel="icon" href="img/logo_ninja.png" type="image/x-icon">

</head>
<body class="repeating-bg">
<!-- Header -->
<?php include("views/nav_pages.html")?>
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/FoodDrink/ElNinjaFood-13.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center" id="hero">
                <center>
                    <div class="">
                        <h1 class="menu-heading menuHeaderText animated fadeInDown" style="top:-10px;">Menu</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <nav id="content-desktop896">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active menunavitem" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true" style="margin-left:355px;">All</a>
            <a class="nav-item nav-link menunavitem" id="nav-app-tab" data-toggle="tab" href="#nav-app" role="tab" aria-controls="nav-app" aria-selected="false">Appetizers</a>
            <a class="nav-item nav-link menunavitem" id="nav-rolls-tab" data-toggle="tab" href="#nav-rolls" role="tab" aria-controls="nav-rolls" aria-selected="false">Rolls</a>
            <a class="nav-item nav-link menunavitem" id="nav-entrees-tab" data-toggle="tab" href="#nav-entrees" role="tab" aria-controls="nav-entrees" aria-selected="false">Entrees</a>
            <a class="nav-item nav-link menunavitem" id="nav-etc-tab" data-toggle="tab" href="#nav-etc" role="tab" aria-controls="nav-etc" aria-selected="false">Etc.</a>
        </div>
    </nav>
    <nav id="content-mobile896">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active menunavitem" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true" style="margin-left: 0px;">All</a>
            <a class="nav-item nav-link menunavitem" id="nav-app-tab" data-toggle="tab" href="#nav-app" role="tab" aria-controls="nav-app" aria-selected="false" style="margin-left: 0px;">Appetizers</a>
            <a class="nav-item nav-link menunavitem" id="nav-rolls-tab" data-toggle="tab" href="#nav-rolls" role="tab" aria-controls="nav-rolls" aria-selected="false" style="margin-left: 0px;">Rolls</a>
            <a class="nav-item nav-link menunavitem" id="nav-entrees-tab" data-toggle="tab" href="#nav-entrees" role="tab" aria-controls="nav-entrees" aria-selected="false" style="margin-left: 0px;">Entrees</a>
            <a class="nav-item nav-link menunavitem" id="nav-etc-tab" data-toggle="tab" href="#nav-etc" role="tab" aria-controls="nav-etc" aria-selected="false" style="margin-left: 0px;">Etc.</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
            <center>
                <br><br>
                <h3 style="font-weight: bolder; color: black">All Items</h3>
            </center>
            <div class="menu menu-row menu-wrap menu-center" id="allDiv" style="margin-top: 40px;">
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
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TERIYAKI OCTOPUS SKEWERS
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
                <div class="entrees">
                    <h2 style="font-weight: bolder;">PLATOS FUERTES/ENTREES</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">MAR Y TIERRA
                    <span class="menu-item-price2"> $38</span>
                    </span>
                        <p class="menu-item-description2">Con churrasco, cola de langosta y camarones en salsa Ninja. Acompañado de puré de yuca y espárragos.<br> Our signature surf and turf comes with churrasco and lobster tail accompanied by yucca mash, asparagus and shrimps in special Ninja sauce.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TERIYAKI STIR FRY
                        <span class="menu-item-price" style="float:right;color:black"> $16-$18</span>
                    </span>
                        <p class="menu-item-description" style="color:black">Servido con arroz de jazmín.<br><b>Elige:</b> Res $18, Pollo $16, Camarones $16 y Tofu Teriyaki $16.<br><br> Served with white jazmin rice. <br><b>Your Choice:</b> Beef $18 - Chicken $16 - Shrimp $18 - Tofu Teriyaki $16.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PECHUGA A LA PLANCHA
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Una pechuga de pollo a la plancha tradcicional servido con tostones.<br> A traditional grilled chicken breast served with tostones.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NINJA'S RIBEYE
                        <span class="menu-item-price" style="float:right;color:black"> $28</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Filete de 12 onzas con nuestro demi-glace de brugal y Shiitake. Servido con yucas fritas.<br> Savory 12oz ribeye steak with our Brugal Shiitake demi-glace served with yucca fries.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CHURRASCO
                        <span class="menu-item-price" style="float:right;color:black"> $24</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Nuestro jugoso churrasco a la parrilla acompañado por chimichurri asiático y puré de yuca. <br> Our juicy, grilled skirt steak accompanied by Asian chimichurri and yucca mash.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">POLLO NINJA
                        <span class="menu-item-price" style="float:right;color:black"> $18</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Pechuga de pollo rellena de longaniza y mozzarella. Servida con puré de maduro y salsa blanca de tocineta. <br> Chicken breast stuffed with Dominican sausage and mozzarella cheese served with maduro mash and white bacon sauce.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NINJA BANDEJA PAISA
                        <span class="menu-item-price" style="float:right;color:black"> $26</span>
                        </span>
                        <p class="menu-item-description" style="color:black">La versión del Ninja famoso plato colombiano; Chicharrón, churrasco, longaniza, huevo frito, maduros, arroz y frijoles. <br> Ninja's version of the signature Colombian dish; Pork belly, skirt steak, sausage, fried egg, maduros, rice and beans.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">PLATOS FUERTES/ENTREES</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TOMAHAWK 2:2
                        <span class="menu-item-price" style="float:right;color:black"> $100</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Nuestro Tomahawk de 32 onzas para dos. Acompañado con papas horneadas, verduras chinas, mazorca de maíz y teriyaki con ajo. <br> Our 32oz Tomahawk for two comes accompanied with baked potatoes, Chinese veggies, Mexican street corn and garlic teriyaki.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">HANGER STEAK
                        <span class="menu-item-price" style="float:right;color:black"> $20</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Nuestro corte de Hanger Steak viene con un demi-glace de hongos y yucas fritas. <br> Our cut of Hanger Steak comes with a mushroom demi-glace and yucca fries.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SALMON A LA ISLA
                        <span class="menu-item-price" style="float:right;color:black"> $22</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Salmón a la parilla con salsa asiática sobre puré de ajo y espárragos. <br> Perfectly grilled salmon with Asian creole sauce over garlic mashed potatoes and asparagus.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PESCADO RELLENO
                        <span class="menu-item-price" style="float:right;color:black"> $26</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Una cubera roja crujiente relleno de puré de maduro con bacalao y nuestra famosa Salsa Especial Ninja por encima. <br> Crispy red snapper filled with maduro mash, topped by bacalao and our famous Ninja's Special Sauce.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LANGOSTA RELLENA
                        <span class="menu-item-price" style="float:right;color:black"> $38</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Langosta fresca rellena de mariscos mixto con Salsa de Coco por arriba. Servica con puré de ajo. <br> A whole fresh lobster stuffed with a fresh variety of seafood, topped by Salsa de Coco with garlic mashed potatoes.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">RISOTTO DOMINICANO
                        <span class="menu-item-price" style="float:right;color:black"> $22</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Con guandules y coco y camarones picante.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">ACOMPAÑAMIENTOS/SIDES</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PURÉ DE PAPAS CON AJO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> GARLIC MASHED POTATOES</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">TOSTONES
                    <span class="menu-item-price2"> $4-$6</span>
                    </span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PURE DE PLATANO MADURO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> MADURO MASH</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">ARROZ BLANCO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> WHITE RICE</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">ARROZ CON HABICHUELA
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> RICE N' BEANS</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PURÉ DE YUCA
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> YUCCA MASH</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">VEGETALES SALTEADO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> SAUTEED VEGGIES</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PAPAS FRITAS
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> FRENCH FRIES</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">YUCAS FRTAS
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> YUCCA FRIES</span>
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
                        <p class="menu-item-description2">Arroz frito del Ninja con plátano maduro, verduras, huevo. <br> <b>Su elección:</b> Pollo $4 - Camarones $6<br><br> Ninja's fried rice with sweet plantain, veggies, egg. <br> <b>Your Choice:</b> Chicken $4 - Shrimp $6</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">ENSALADAS/SALADS</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">KANI SALAD
                    <span class="menu-item-price2"> $12</span>
                    </span>
                        <p class="menu-item-description2">Mezcla de lechuga, kani, aguacate, pepino, cebolla, y nuestro aderezo cremoso de jengibre.<br> Mixed greens, kani, avocado, cucumber, onion, creamy ginger dressing.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">TROPICAL SALAD
                    <span class="menu-item-price2"> $10</span>
                    </span>
                        <p class="menu-item-description2">Mezcla de lechuga, mango, queso feta, nueces, cebolla, tomates cherry, pimientos and aguacate y nuestra vinagreta balsámica asiática. <br> <b>Su elección:</b> Carne de res $6 - Camarones $6 - Pollo $4<br><br> Mixed greens, mango, feta cheese, walnuts, onion, cherry tomatoes, bell peppers, avocado, Asian balsamic vinaigrette. <br> <b>Your Choice:</b> Beef $6 - Shrimp $6 - Chicken $4</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">WAKAME SALAD
                    <span class="menu-item-price2"> $6</span>
                    </span>
                        <p class="menu-item-description2">Ensalada de alga Japonesa.<br> Japanese seaweed salad.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">MENU DE NIÑOS/KID'S MENU</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">DOMINICANO ROLL
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Salami, queso frito y maduro.<br> Salami, questo frito, maduro.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHICKEN PANKO W/ FRIES
                    <span class="menu-item-price2"> $7</span>
                    <br> CHICKEN PANKO CON PAPAS FRITAS </span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHEESEBURGER W/ FRIES
                    <span class="menu-item-price2"> $7</span>
                    <br> HAMBURGUESA CON QUESO Y PAPAS FRITAS</span>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">POSTRES/DESSERTS</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">BANANA TEMPURA
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro banana tempura frita con helado de vainilla.<br> Fried banana tempura with vanilla ice cream.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">FLAN
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro delicioso flan de huevo endulzado; también conocido, como créme caramel.<br> Our delicious sweetened egg custard, AKA creme carame.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHINOLA TRES LECHES
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro tres leches de chinola con una nube de crema batida de vainilla.<br> Our passion fruit flavored tres leches cake with vanilla whipped cream.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">IMOCHI
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Postre japones relleno de helado.<br> Japanese dessert with ice cream filling.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHOCOLATE MOUSSE
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro triple mousse de diferentes chocolates.<br> Our multilayered triple chocolate mousse.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">SOPAS/SOUPS</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">SOPA DE MARISCO
                    <span class="menu-item-price2"> $10</span>
                    </span>
                        <p class="menu-item-description2">Nuestro sabrosa sopa de mariscos y vegetales frescos.<br> Our savory broth of fresh seafood and veggies.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">MISO SOUP
                    <span class="menu-item-price2"> $5</span>
                    </span>
                        <p class="menu-item-description2">Nuestra sopa Japonesa tradicional; soybean, tofu, seaweed, cebolletas.<br> Our traditional Japanese soup; Soybean broth with tofu, seaweed, and scallions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-app" role="tabpanel" aria-labelledby="nav-app-tab">
            <div class="menu menu-row menu-wrap menu-center" id="appsDiv" style="margin-top: 40px;">
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
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TERIYAKI OCTOPUS SKEWERS
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
        </div>
        <div class="tab-pane fade" id="nav-rolls" role="tabpanel" aria-labelledby="nav-rolls-tab">
            <div class="menu menu-row menu-wrap menu-center" id="rollsDiv" style="margin-top: 40px;" >
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
        </div>
        <div class="tab-pane fade" id="nav-entrees" role="tabpanel" aria-labelledby="nav-entrees-tab">
            <div class="menu menu-row menu-wrap menu-center" id="entreeDiv" style="margin-top: 40px;">
                <div class="entrees">
                    <h2 style="font-weight: bolder;">PLATOS FUERTES/ENTREES</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">MAR Y TIERRA
                    <span class="menu-item-price2"> $38</span>
                    </span>
                        <p class="menu-item-description2">Con churrasco, cola de langosta y camarones en salsa Ninja. Acompañado de puré de yuca y espárragos.<br> Our signature surf and turf comes with churrasco and lobster tail accompanied by yucca mash, asparagus and shrimps in special Ninja sauce.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TERIYAKI STIR FRY
                        <span class="menu-item-price" style="float:right;color:black"> $16-$18</span>
                    </span>
                        <p class="menu-item-description" style="color:black">Servido con arroz de jazmín.<br><b>Elige:</b> Res $18, Pollo $16, Camarones $16 y Tofu Teriyaki $16.<br><br> Served with white jazmin rice. <br><b>Your Choice:</b> Beef $18 - Chicken $16 - Shrimp $18 - Tofu Teriyaki $16.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PECHUGA A LA PLANCHA
                        <span class="menu-item-price" style="float:right;color:black"> $16</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Una pechuga de pollo a la plancha tradcicional servido con tostones.<br> A traditional grilled chicken breast served with tostones.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NINJA'S RIBEYE
                        <span class="menu-item-price" style="float:right;color:black"> $28</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Filete de 12 onzas con nuestro demi-glace de brugal y Shiitake. Servido con yucas fritas.<br> Savory 12oz ribeye steak with our Brugal Shiitake demi-glace served with yucca fries.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CHURRASCO
                        <span class="menu-item-price" style="float:right;color:black"> $24</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Nuestro jugoso churrasco a la parrilla acompañado por chimichurri asiático y puré de yuca. <br> Our juicy, grilled skirt steak accompanied by Asian chimichurri and yucca mash.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">POLLO NINJA
                        <span class="menu-item-price" style="float:right;color:black"> $18</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Pechuga de pollo rellena de longaniza y mozzarella. Servida con puré de maduro y salsa blanca de tocineta. <br> Chicken breast stuffed with Dominican sausage and mozzarella cheese served with maduro mash and white bacon sauce.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">NINJA BANDEJA PAISA
                        <span class="menu-item-price" style="float:right;color:black"> $26</span>
                        </span>
                        <p class="menu-item-description" style="color:black">La versión del Ninja famoso plato colombiano; Chicharrón, churrasco, longaniza, huevo frito, maduros, arroz y frijoles. <br> Ninja's version of the signature Colombian dish; Pork belly, skirt steak, sausage, fried egg, maduros, rice and beans.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">PLATOS FUERTES/ENTREES</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">TOMAHAWK 2:2
                        <span class="menu-item-price" style="float:right;color:black"> $100</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Nuestro Tomahawk de 32 onzas para dos. Acompañado con papas horneadas, verduras chinas, mazorca de maíz y teriyaki con ajo. <br> Our 32oz Tomahawk for two comes accompanied with baked potatoes, Chinese veggies, Mexican street corn and garlic teriyaki.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">HANGER STEAK
                        <span class="menu-item-price" style="float:right;color:black"> $20</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Nuestro corte de Hanger Steak viene con un demi-glace de hongos y yucas fritas. <br> Our cut of Hanger Steak comes with a mushroom demi-glace and yucca fries.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">SALMON A LA ISLA
                        <span class="menu-item-price" style="float:right;color:black"> $22</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Salmón a la parilla con salsa asiática sobre puré de ajo y espárragos. <br> Perfectly grilled salmon with Asian creole sauce over garlic mashed potatoes and asparagus.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PESCADO RELLENO
                        <span class="menu-item-price" style="float:right;color:black"> $26</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Una cubera roja crujiente relleno de puré de maduro con bacalao y nuestra famosa Salsa Especial Ninja por encima. <br> Crispy red snapper filled with maduro mash, topped by bacalao and our famous Ninja's Special Sauce.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">LANGOSTA RELLENA
                        <span class="menu-item-price" style="float:right;color:black"> $38</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Langosta fresca rellena de mariscos mixto con Salsa de Coco por arriba. Servica con puré de ajo. <br> A whole fresh lobster stuffed with a fresh variety of seafood, topped by Salsa de Coco with garlic mashed potatoes.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">RISOTTO DOMINICANO
                        <span class="menu-item-price" style="float:right;color:black"> $22</span>
                        </span>
                        <p class="menu-item-description" style="color:black">Con guandules y coco y camarones picante.</p>
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
                        <p class="menu-item-description2">Arroz frito del Ninja con plátano maduro, verduras, huevo. <br> <b>Su elección:</b> Pollo $4 - Camarones $6<br><br> Ninja's fried rice with sweet plantain, veggies, egg. <br> <b>Your Choice:</b> Chicken $4 - Shrimp $6</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-etc" role="tabpanel" aria-labelledby="nav-etc-tab">
            <div class="menu menu-row menu-wrap menu-center" id="miscDiv" style="margin-top: 40px;" >
                <div class="entrees">
                    <h2 style="font-weight: bolder;">ACOMPAÑAMIENTOS/SIDES</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PURÉ DE PAPAS CON AJO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> GARLIC MASHED POTATOES</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">TOSTONES
                    <span class="menu-item-price2"> $4-$6</span>
                    </span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PURE DE PLATANO MADURO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> MADURO MASH</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">ARROZ BLANCO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> WHITE RICE</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">ARROZ CON HABICHUELA
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> RICE N' BEANS</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PURÉ DE YUCA
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> YUCCA MASH</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">VEGETALES SALTEADO
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> SAUTEED VEGGIES</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">PAPAS FRITAS
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> FRENCH FRIES</span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">YUCAS FRTAS
                    <span class="menu-item-price2"> $4-$6</span>
                    <br> YUCCA FRIES</span>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">ENSALADAS/SALADS</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">KANI SALAD
                    <span class="menu-item-price2"> $12</span>
                    </span>
                        <p class="menu-item-description2">Mezcla de lechuga, kani, aguacate, pepino, cebolla, y nuestro aderezo cremoso de jengibre.<br> Mixed greens, kani, avocado, cucumber, onion, creamy ginger dressing.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">TROPICAL SALAD
                    <span class="menu-item-price2"> $10</span>
                    </span>
                        <p class="menu-item-description2">Mezcla de lechuga, mango, queso feta, nueces, cebolla, tomates cherry, pimientos and aguacate y nuestra vinagreta balsámica asiática. <br> <b>Su elección:</b> Carne de res $6 - Camarones $6 - Pollo $4<br><br> Mixed greens, mango, feta cheese, walnuts, onion, cherry tomatoes, bell peppers, avocado, Asian balsamic vinaigrette. <br> <b>Your Choice:</b> Beef $6 - Shrimp $6 - Chicken $4</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">WAKAME SALAD
                    <span class="menu-item-price2"> $6</span>
                    </span>
                        <p class="menu-item-description2">Ensalada de alga Japonesa.<br> Japanese seaweed salad.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">MENU DE NIÑOS/KID'S MENU</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">DOMINICANO ROLL
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Salami, queso frito y maduro.<br> Salami, questo frito, maduro.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHICKEN PANKO W/ FRIES
                    <span class="menu-item-price2"> $7</span>
                    <br> CHICKEN PANKO CON PAPAS FRITAS </span>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHEESEBURGER W/ FRIES
                    <span class="menu-item-price2"> $7</span>
                    <br> HAMBURGUESA CON QUESO Y PAPAS FRITAS</span>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">SOPAS/SOUPS</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">SOPA DE MARISCO
                    <span class="menu-item-price2"> $10</span>
                    </span>
                        <p class="menu-item-description2">Nuestro sabrosa sopa de mariscos y vegetales frescos.<br> Our savory broth of fresh seafood and veggies.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">MISO SOUP
                    <span class="menu-item-price2"> $5</span>
                    </span>
                        <p class="menu-item-description2">Nuestra sopa Japonesa tradicional; soybean, tofu, seaweed, cebolletas.<br> Our traditional Japanese soup; Soybean broth with tofu, seaweed, and scallions.</p>
                    </div>
                </div>
                <div class="entrees">
                    <h2 style="font-weight: bolder;">POSTRES/DESSERTS</h2>
                    <div class="red-title-divider"></div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">BANANA TEMPURA
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro banana tempura frita con helado de vainilla.<br> Fried banana tempura with vanilla ice cream.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">FLAN
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro delicioso flan de huevo endulzado; también conocido, como créme caramel.<br> Our delicious sweetened egg custard, AKA creme carame.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHINOLA TRES LECHES
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro tres leches de chinola con una nube de crema batida de vainilla.<br> Our passion fruit flavored tres leches cake with vanilla whipped cream.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">IMOCHI
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Postre japones relleno de helado.<br> Japanese dessert with ice cream filling.</p>
                    </div>
                    <div class="menu-item2">
                    <span class="menu-item-title2">CHOCOLATE MOUSSE
                    <span class="menu-item-price2"> $7</span>
                    </span>
                        <p class="menu-item-description2">Nuestro triple mousse de diferentes chocolates.<br> Our multilayered triple chocolate mousse.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <span class="menu-item-name">IMPORTANTE: Algunos artículos vienen crudos o parcialmente cocinados y pueden incrementar el riesgo de enfermedades por alimentos.
        Los consumidores que son especialmente vulnerables solo deben de comer carnes, mariscos y otras comidas de animales completamente cocinados.
        Por favor notifíquemos inmediatamente de cualquier alergia que usted tenga.
        <br> <br>
        IMPORTANT: Some items come raw or partially cooked and may increase the risk of foodborne illness. Consumers who are especially
        vulnerable should only eat meat, seafood and other fully cooked animal foods. Please notify us immediately of any allergies you have.</span>
</div>
<br>
<br>
<?php include("views/footer.html")?>

<a class="top-link hide" href="" id="js-top">
    <img src="img/arrow.png" style="width: 65%; height: 55%;">
</a>
<script>
    const scrollToTopButton = document.getElementById('js-top');

    const scrollFunc = () => {
        let y = window.scrollY;

        if (y > 0) {
            scrollToTopButton.className = "top-link show";
        } else {
            scrollToTopButton.className = "top-link hide";
        }
    };

    window.addEventListener("scroll", scrollFunc);

    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;

        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 10);
        }
    };

    scrollToTopButton.onclick = function(e) {
        e.preventDefault();
        scrollToTop();
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>