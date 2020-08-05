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
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
    <link href="css/delivery.css" rel="stylesheet">
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
                Download the Grubhub app on your phone using <a href="https://www.grubhub.com/mobile_home">this link!</a>
                Alternatively, you can use the <a href="https://www.grubhub.com/">Grubhub website</a> to place an order for delivery from El Ninja.
                Click on the button below to view El Ninja Restaurant in Grubhub and place an order!
            </p>

            <br>
            <a href="https://www.grubhub.com/restaurant/el-ninja-restaurant-1007-broad-st-providence/2286392" target="_blank" id="menuBox" style="width: 315px; height: 75px;"><h2 id="menuBoxText">View in Grubhub</h2></a>
        </div>

        <div class="col-lg-6 about-img" id="content-desktop896">
            <img src="img/grubhub.jpg" style="width:600px;height:330px;margin-top: 10px;">
        </div>

        <div class="col-lg-6 about-img" id="content-mobile896">
            <center>
                <img src="img/grubhub.jpg" style="width:100%;object-fit: scale-down;" id="aboutImg">
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
                Download the Uber Eats app for
                <a href="https://play.google.com/store/apps/details?id=com.ubercab.eats&hl=en_US">Android</a> or
                <a href="https://apps.apple.com/us/app/uber-eats-food-delivery/id1058959277">iPhone</a> here!
                Alternatively, you can use the <a href="https://www.ubereats.com/">Uber Eats website</a> to place an order for delivery from El Ninja.
                Click on the button below to view El Ninja Restaurant in Uber Eats and place an order!
            </p>

            <br>
            <a href="https://www.ubereats.com/providence/food-delivery/el-ninja-restaurant/zUUOdDlkQfm2CVsvURRPTA" target="_blank" id="menuBox" style="width: 320px; height: 75px;"><h2 id="menuBoxText">View in Uber Eats</h2></a>

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
    <div class="delivery-body repeating-bg">
        <div class="delivery-section">
            <h2 class="delivery-section-title">APPETIZERS</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">El Final</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Chef Ninja’s tower of thinly sliced steak, fried maduros, fresh avocado slices served with sweet chinola sauce and pico de gallo.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Conconcitos</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    A trio of crispy rice baskets with a hint of sweet chili and fresh guacamole, full of ropa vieja, stewed chicken, and shrimp.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Yola</div>
                <div class="delivery-item-price">$17</div>
                <div class="delivery-item-description">
                    Our famous sweet plantain canoes stuffed with shrimps topped by Ninja’s Special Sauce.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Rock Shrimp</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Deep-fried shrimp covered with our spicy garlic aioli.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Kani Croquette</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Ninja’s crab cream croquettes with jalapeno, onion, mayo served with creamy cilantro aioli.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Edamame</div>
                <div class="delivery-item-price">$7</div>
                <div class="delivery-item-description">
                    Steamed sea salted green pea pods.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Crispy Calamari</div>
                <div class="delivery-item-price">$13</div>
                <div class="delivery-item-description">
                    Tempura fried calamari rings with creamy chipotle aioli.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Ceviche De Pulpo</div>
                <div class="delivery-item-price">$18</div>
                <div class="delivery-item-description">
                    Ceviche of octopus, lime juice, peppers and onions, cilantro, served with tostones.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Sweet ‘n Sour Chicharrón</div>
                <div class="delivery-item-price">$14</div>
                <div class="delivery-item-description">
                    Dominican-style fried pork belly.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Ropa Vieja Empanadas</div>
                <div class="delivery-item-price">$10</div>
                <div class="delivery-item-description">
                    Our delicious fried flour pastries filled with shredded steak and mozzarella cheese.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Kani Empanadas</div>
                <div class="delivery-item-price">$10</div>
                <div class="delivery-item-description">
                    Latin fried flour pastries filled with spicy Japanese kani and mozzarella cheese.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Cuban Empanadas</div>
                <div class="delivery-item-price">$10</div>
                <div class="delivery-item-description">
                    A Cuban twist to our fried flour pastries filled with slow roasted pork, ham, and mozzarella cheese.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Gyoza</div>
                <div class="delivery-item-price">$8</div>
                <div class="delivery-item-description">
                    Japanese chicken teriyaki dumplings.
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">TRADITIONAL ROLLS</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">California</div>
                <div class="delivery-item-price">$8</div>
                <div class="delivery-item-description">
                    Kani, avocado, cucumber.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Eel Avocado</div>
                <div class="delivery-item-price">$9</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Spicy Tuna</div>
                <div class="delivery-item-price">$9</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Philadelphia</div>
                <div class="delivery-item-price">$9</div>
                <div class="delivery-item-description">
                    Salmon, cucumber, cream cheese.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Spicy Salmon</div>
                <div class="delivery-item-price">$8</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Shrimp Tempura</div>
                <div class="delivery-item-price">$9</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Hamachi Roll</div>
                <div class="delivery-item-price">$9</div>
                <div class="delivery-item-description">
                    Spicy yellowtail.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Rainbow Roll</div>
                <div class="delivery-item-price">$13</div>
                <div class="delivery-item-description">
                    Kani, cucumber, avocado (yellowtail, tuna, salmon).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Okinawa Roll</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Kani, cucumber, cream cheese (maduro, guacamole, crab meat).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Aloha Roll</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Spicy tuna, kani (avocado, pineapple salsa).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Sakura Roll</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Salmon, cucumber (smoked salmon, avocado, tobiko).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Samurai Roll</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Kani salad, cucumber (tuna, avocado, salmon, wakame, tobiko).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Dragon Roll</div>
                <div class="delivery-item-price">$14</div>
                <div class="delivery-item-description">
                    Shrimp tempura, eel, avocado.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Hana Roll</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Tuna tartar, cucumber, avocado, mango, jalapeno.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Black Rose Roll</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Spicy tuna, smoked salmon, avocado (deep fried, pico de gallo).
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">FUSION ROLLS</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">La Pela</div>
                <div class="delivery-item-price">$17</div>
                <div class="delivery-item-description">
                    Shrimp tempura, cream cheese, maduro, guacamole (seafood mix).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">La Broa</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Shrimp tempura, queso frito, maduro, guacamole (ropa vieja).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Bavaro Beach Roll</div>
                <div class="delivery-item-price">$14</div>
                <div class="delivery-item-description">
                    Salmon tempura, cream cheese, bacon, maduro, avocado.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">El Ninja Roll</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Chicken tempura, bacon, cream cheese, maduro, guacamole (chicken teriyaki).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">La Chapi</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Chicken tempura, bacon, cream cheese, maduro, guacamole (chicharron).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Taki Taki Roll</div>
                <div class="delivery-item-price">$15</div>
                <div class="delivery-item-description">
                    Churrasco, bacon, cream cheese, maduro, avocado.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Candela Roll</div>
                <div class="delivery-item-price">$18</div>
                <div class="delivery-item-description">
                    Shrimp tempura, cream cheese, avocado (spicy chilli shrimp).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">No Bulto Roll</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Grilled chicken, steak, cream cheese, maduro, guacamole, pico de gallo.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">El Patio Roll</div>
                <div class="delivery-item-price">$12</div>
                <div class="delivery-item-description">
                    Longaniza, queso frito, maduro.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Geisha Roll</div>
                <div class="delivery-item-price">$18</div>
                <div class="delivery-item-description">
                    Shrimp tempura, bacon, mozzarella, maduro (deep fried).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Volcano Roll</div>
                <div class="delivery-item-price">$17</div>
                <div class="delivery-item-description">
                    Shrimp tempura, cream cheese, avocado (spicy kani).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Mi Alma Roll</div>
                <div class="delivery-item-price">$17</div>
                <div class="delivery-item-description">
                    Shrimp tempura, cream cheese, maduro, avocado (crab meat).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">La Romana Roll</div>
                <div class="delivery-item-price">$17</div>
                <div class="delivery-item-description">
                    Salmon tempura, cream cheese, maduro, avocado (bacalao).
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Constanza Roll</div>
                <div class="delivery-item-price">$10</div>
                <div class="delivery-item-description">
                    Asparagus tempura, Japanese sweet potato, maduro, guacamole, pico de gallo.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Capotillo Roll</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Chicken tempura, queso frito, maduro, guacamole (longaniza guisada).
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">SALADS</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Wakame Salad</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                    Japanese seaweed salad.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Tropical Salad</div>
                <div class="delivery-item-price">$10</div>
                <div class="delivery-item-description">
                    Mixed greens, mango, feta cheese, walnuts, onion, cherry tomatoes, bell peppers, avocado, Asian balsamic vinaigrette.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Beef Tropical Salad</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Mixed greens, mango, feta cheese, walnuts, onion, cherry tomatoes, bell peppers, avocado, Asian balsamic vinaigrette.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Shrimp Tropical Salad</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Mixed greens, mango, feta cheese, walnuts, onion, cherry tomatoes, bell peppers, avocado, Asian balsamic vinaigrette.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chicken Tropical Salad</div>
                <div class="delivery-item-price">$14</div>
                <div class="delivery-item-description">
                    Mixed greens, mango, feta cheese, walnuts, onion, cherry tomatoes, bell peppers, avocado, Asian balsamic vinaigrette.
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">SOUPS</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Miso Soup</div>
                <div class="delivery-item-price">$5</div>
                <div class="delivery-item-description">
                    Our traditional Japanese soup; Soybean broth with tofu, seaweed, and scallions.
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">ENTREE</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Mar y Tierra</div>
                <div class="delivery-item-price">Market Price</div>
                <div class="delivery-item-description">
                    Our signature surf and turf comes with churrasco and lobster tail accompanied by yucca mash, asparagus and shrimps in special Ninja sauce.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Beef Teriyaki Stir Fry</div>
                <div class="delivery-item-price">$18</div>
                <div class="delivery-item-description">
                    Served with white jasmine rice.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chicken Teriyaki Stir Fry</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Served with white jasmine rice.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Shirmp Teriyaki Stir Fry</div>
                <div class="delivery-item-price">$18</div>
                <div class="delivery-item-description">
                    Served with white jasmine rice.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Tofu Teriyaki Stir Fry</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Served with white jasmine rice.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Churrasco</div>
                <div class="delivery-item-price">$27</div>
                <div class="delivery-item-description">
                    Our juicy, grilled skirt steak accompanied by Asian chimichurri and yucca mash.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Pollo Ninja</div>
                <div class="delivery-item-price">$20</div>
                <div class="delivery-item-description">
                    Chicken breast stuffed with Dominican sausage and mozzarella cheese served with maduro mash and white bacon sauce.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Pechuga a la Plancha</div>
                <div class="delivery-item-price">$18</div>
                <div class="delivery-item-description">
                    A traditional grilled chicken breast served with tostones.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Hanger Steak</div>
                <div class="delivery-item-price">$22</div>
                <div class="delivery-item-description">
                    Our cut of Hanger Steak comes with a mushroom demi-glace and yucca fries.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Salmon a la Isla </div>
                <div class="delivery-item-price">$24</div>
                <div class="delivery-item-description">
                    Perfectly grilled salmon with Asian creole sauce over garlic mashed potatoes and asparagus.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Pescado Relleno</div>
                <div class="delivery-item-price">$28</div>
                <div class="delivery-item-description">
                    Crispy red snapper filled with maduro mash topped by bacalao and our famous Ninja’s Special Sauce.
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">CHOFAN</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Hawaiian Chofan</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Hawaiian style chofan brings smoked ham, shrimp, veggies, and pineapple.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Plain Ninja Chofan</div>
                <div class="delivery-item-price">$10</div>
                <div class="delivery-item-description">
                    Ninja’s fried rice with sweet plantain, veggies, egg.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chicken Ninja Chofan</div>
                <div class="delivery-item-price">$14</div>
                <div class="delivery-item-description">
                    Ninja’s fried rice with chicken, sweet plantain, veggies, egg.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Shrimp Ninja Chofan</div>
                <div class="delivery-item-price">$16</div>
                <div class="delivery-item-description">
                    Ninja’s fried rice with shrimp, sweet plantain, veggies, egg.
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">KIDS MENU</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Dominicano Roll</div>
                <div class="delivery-item-price">$8</div>
                <div class="delivery-item-description">
                    Salami, queso frito, maduro.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chicken Panko w/ Fries</div>
                <div class="delivery-item-price">$8</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Cheeseburger w/ Fries</div>
                <div class="delivery-item-price">$8</div>
                <div class="delivery-item-description">
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">DESSERTS</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Flan</div>
                <div class="delivery-item-price">$7</div>
                <div class="delivery-item-description">
                    Our delicious sweetened egg custard, also known as crème caramel.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chinola Tres Leches</div>
                <div class="delivery-item-price">$7</div>
                <div class="delivery-item-description">
                    Our passion fruit flavored tres leches cake with a cloud of vanilla whipped cream.
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chocolate Mousse</div>
                <div class="delivery-item-price">$7</div>
                <div class="delivery-item-description">
                    Our multilayered triple chocolate mousse .
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">SIDES</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Garlic Mashed Potatoes</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Tostones</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Maduro Mash</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">White Rice</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Rice N' Beans</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Yucca Mash</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Sauteed Veggies</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">French Fries</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Yucca Fries</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">SAUCES</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Ninja Sauce</div>
                <div class="delivery-item-price">$3</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chinola Sauce</div>
                <div class="delivery-item-price">$1</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Spicy Mayo</div>
                <div class="delivery-item-price">$1</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Eel Sauce</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Bacon Sauce</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">JUICES</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Virgin Ninja Punch</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Morir Soñando</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Chinola</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Guava</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Mango</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Lemonade</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Strawberry</div>
                <div class="delivery-item-price">$6</div>
                <div class="delivery-item-description">
                </div>
            </div>
        </div>

        <div class="delivery-section">
            <h2 class="delivery-section-title">SODA</h2>
            <div class="delivery-dots"></div>
            <div class="delivery-item">
                <div class="delivery-item-name">Coca Cola</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Sprite</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Gingerale</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Diet Coke</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
            <div class="delivery-item">
                <div class="delivery-item-name">Sunkist</div>
                <div class="delivery-item-price">$2</div>
                <div class="delivery-item-description">
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <span class="delivery-item-name">IMPORTANTE: Algunos artículos vienen crudos o parcialmente cocinados y pueden incrementar el riesgo de enfermedades por alimentos.
        Los consumidores que son especialmente vulnerables solo deben de comer carnes, mariscos y otras comidas de animales completamente cocinados.
        Por favor notifíquemos inmediatamente de cualquier alergia que usted tenga.
        <br> <br>
        IMPORTANT: Some items come raw or partially cooked and may increase the risk of foodborne illness. Consumers who are especially
        vulnerable should only eat meat, seafood and other fully cooked animal foods. Please notify us immediately of any allergies you have.
    </span>
</div>

<br><br>

<br id="content-desktop896">
<?php include("views/footer.html")?>

<a class="top-link hide" href="" id="js-top">
    <img src="img/arrow.png" style="width: 65%; height: 55%;">
</a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<script>
    var scrollToTopButton = document.getElementById('js-top');

    var scrollFunc = function scrollFunc() {
        var y = window.scrollY;

        if (y > 0) {
            scrollToTopButton.className = "top-link show";
        } else {
            scrollToTopButton.className = "top-link hide";
        }
    };

    window.addEventListener("scroll", scrollFunc);

    var scrollToTop = function scrollToTop() {
        var c = document.documentElement.scrollTop || document.body.scrollTop;

        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 10);
        }
    };

    scrollToTopButton.onclick = function (e) {
        e.preventDefault();
        scrollToTop();
    };
</script>