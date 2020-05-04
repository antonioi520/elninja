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
                    <p class="menu-item-description" style="color:black">Pulpo, pimientas, cebollas, cilantro y judo de limón. Servido con tostones.<br> Ceiviche of octopus, lime juice, peppers and onions, cilantro, served with tostones.</p>
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
                <h2 style="font-weight: bolder;">OTRAS BEBIDAS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Refrescos - Soda</span>
                    <span class="menu-item-price2"> $3</span> <br>
                    <!--p class="menu-item-description2" id="content-desktop">Sprite - Coca Cola - Diet Coke - Ginger Ale - Country Club.</p>
                    <br id="content-desktop"-->
                    <p class="menu-item-description2">Sprite <br>
                        Sprite <br> Coca Cola <br> Diet Coke <br> Ginger Ale <br> Ginger Beer</p>
                    <br>

                    <span class="menu-item-title2">Agua Carbonatadas - Sparkling Water</span>
                    <span class="menu-item-price2"> $3</span> <br>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">SMOOTHIES</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Melocotón - Peach</span>
                    <span class="menu-item-price2"> $4</span> <br>

                    <span class="menu-item-title2">Fresa - Strawberry</span>
                    <span class="menu-item-price2"> $4</span> <br>

                    <span class="menu-item-title2">Lechoza - Papaya</span>
                    <span class="menu-item-price2"> $4</span> <br>

                    <span class="menu-item-title2">Piña Colada Virgen</span>
                    <span class="menu-item-price2"> $4</span> <br>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">CERVEZAS/BEER</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Presidente</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Presidente Light</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Corona</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Modelo</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Heineken</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Blue Moon</span>
                    <span class="menu-item-price2"> $5</span> <br>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">TINTOS/RED WINE</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Woodbridge by Robert Mondavi <br id="content-mobile"> Cabernet Sauvignon </span>
                    <span class="menu-item-price2"> $25</span> <br>
                    <span class="menu-item-title2">Palo Alto Pinot Noir </span>
                    <span class="menu-item-price2"> $35</span> <br>
                    <span class="menu-item-title2">Decoy Cabernet Sauvignon </span>
                    <span class="menu-item-price2"> $40</span>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">ESPUMANTE/SPARKLING</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Prosecco Lunetta </span>
                    <span class="menu-item-price2"> $25</span> <br>
                    <span class="menu-item-title2">Moet Chandon Rose Imperial </span>
                    <span class="menu-item-price2"> $150</span> <br>
                    <span class="menu-item-title2">Moet Ice Imperial </span>
                    <span class="menu-item-price2"> $150</span>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">BLANCO/WHITE WINE</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Woodbridge by Robert Chardonnay </span>
                    <span class="menu-item-price2"> $25</span> <br>
                    <span class="menu-item-title2">Jacob's Creek Moscato </span>
                    <span class="menu-item-price2"> $25</span> <br>
                    <span class="menu-item-title2">Decoy Sauvignon Blanc </span>
                    <span class="menu-item-price2"> $40</span>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">JUGOS/JUICES</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Limón - Lemon</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Chinola - Passion Fruit</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Naranja - Orange</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Manzana - Apple Juice</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Morir Sonando - Orange Julius</span>
                    <span class="menu-item-price2"> $4</span> <br>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">ROSADO/ROSE WINE</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Beringer White Zinfandel </span>
                    <span class="menu-item-price2"> $25</span> <br>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Merqués de Riscal Rosado </span>
                    <span class="menu-item-price2"> $40</span> <br>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">COCKTAILS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Classic Margarita </span>
                    <span class="menu-item-price2"> $10</span>
                    <p class="menu-item-description2">Limón - Fresa - Chinola + Tequila, triple sec, sour mix y zumo de fruta.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Mojitos </span>
                    <span class="menu-item-price2"> $10</span>
                    <p class="menu-item-description2">Limón - Fresa - Coco - Chinola + Ron blanco, menta, limón y zumo de fruta.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Sangria </span>
                    <span class="menu-item-price2"> $9</span> <br>
                    <span class="menu-item-price2"> Pitcher - $26</span>
                    <p class="menu-item-description2">Tinta - Peach - Chinola</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Moscow Mule </span>
                    <span class="menu-item-price2"> $10</span>
                    <p class="menu-item-description2">Vodka, ginger beer, y jugo de limón.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Spiced Pear Martini </span>
                    <span class="menu-item-price2"> $10</span>
                    <p class="menu-item-description2">Vodka de pera, champagne, Elderflower liqueur, canela y jugo de limón.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Mimosa </span>
                    <span class="menu-item-price2"> $8</span>
                    <p class="menu-item-description2">Naranja - Fresa - Peach + Champan y zumo de fruta.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Piña Colada </span>
                    <span class="menu-item-price2"> $9</span>
                    <p class="menu-item-description2">Ron blanco, crema coco, jugo de piña y leche evaporada.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">IMPORTANTE/IMPORTANT</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-name">20% de gratificación será agregado a los grupos de o más personas.
            <br> <br>
            20% gratuity will be added to all parties of 6 or more.</span>
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


<script>
    var apps = document.getElementById("appsDiv");
    var rolls = document.getElementById("rollsDiv");
    var entrees = document.getElementById("entreeDiv");


    function switchToAppsMenu() {
        apps.style.display = "flex";
        rolls.style.display = "none";
        entrees.style.display = "none";
    }
    function switchToRollsMenu() {
        apps.style.display = "none";
        rolls.style.display = "flex";
        entrees.style.display = "none";
    }
    function switchToEntreeMenu() {
        apps.style.display = "none";
        rolls.style.display = "none";
        entrees.style.display = "flex";
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
