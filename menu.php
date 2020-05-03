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
            <a href="#topofMenu" id="fooddrinkButton" onclick="switchToFoodMenu()">Food</a>
            <a href="#topofMenu" id="fooddrinkButton" onclick="switchToDrinkMenu()">Drinks</a>
            <br><br>
            <p style="color: red; font-weight: bold">Note: Drinks are unavailable for take out orders!</p>
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
        <div class="menu menu-row menu-wrap menu-center" id="foodDiv">

            <div class="appetizers">
                <h2 style="font-weight: bolder;">APERITIVOS/APPETIZERS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CALAMARI FRITO
                    <span class="menu-item-price2"> $10</span>
                        <BR> FRIED CALAMARI </span>
                    <p class="menu-item-description2">Cherry pepper y salsa marinara.<br> Cherry peppers and marinara sauce.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">CAMARONES PICANTES
                        <span class="menu-item-price" style="float:right;color:black"> $12</span>
                        <BR>SPICY SHRIMP </span>
                    <p class="menu-item-description" style="color:black">Salteados con ajo, tomates frescos, mantequilla y vino blanco.<br> Sautéed with garlic, fresh tomatoes, butter and wine.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">BERENJENAS PARMESANA
                        <span class="menu-item-price" style="float:right;color:black"> $8</span>
                        <BR>EGGPLANT PARMESAN </span>
                    <p class="menu-item-description" style="color:black">Rodajas de berenjenas, salsa marinara y queso mozzarella gratinado.<br> Eggplant slices, marinara sauce, mozzarella au gratin.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">PASTELITOS VARIADOS
                        <span class="menu-item-price" style="float:right;color:black"> $6</span>
                        <BR>MEAT PIE </span>
                    <p class="menu-item-description" style="color:black">Pollo - Carne - Pizza.<br> Chicken - Beef - Pizza.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title" style="color:black;font-weight: bolder">ALITAS
                        <span class="menu-item-price" style="float:right;color:black"> $5</span>
                        <BR>CHICKEN WINGS </span>
                    <p class="menu-item-description" style="color:black">BBQ - BUFFALO.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">CARNES/MEAT</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">PECHUGA AL GRILL EN SALSA AL AJILLO
                        <span class="menu-item-price2"> $12</span>
                        <BR> GRILLED CHICKEN BREAST IN GARLIC <br id="content-mobile"> SAUCE </span>

                    <p class="menu-item-description2">Con puré de papa.<br> With mashed potatoes.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">RABO DE RES ESTOFADO
                        <span class="menu-item-price2"> $16</span>
                        <BR> STEWED OXTAIL </span>
                    <p class="menu-item-description2">Marinado y cocinado lentamente. Servido con arroz y habichuealas. <br>
                    Marinated & slow cooked. Served with rice & beans.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CHURRASCO ANGUS </span>
                    <span class="menu-item-price2" style="font-weight: bold;"> $22</span>
                    <p class="menu-item-description2">Corte cocinado a su gusto con tope de chimichurri. Servido con tostones y ensaladas. <br>
                    Cooked to your liking and topped with chimichurri. Served with tostones and salad.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">BISTEC ENCEBOLLADO
                        <span class="menu-item-price2"> $16</span>
                        <BR> STEAK AND ONIONS </span>
                    <p class="menu-item-description2">Servido con arroz y habichuealas. <br>
                        Served with rice & beans.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">MARISCOS/SEAFOOD</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CAMARONES FUSIÓN
                        <span class="menu-item-price2"> $12</span>
                        <BR> FUSION SHRIMP </span>

                    <p class="menu-item-description2">Con gajos de papa y mantequilla picante. <br> With potato wedges and spicy butter. </p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">SALMON AL GRILL CON CHIMICHURRI DE OLIVAS
                    <span class="menu-item-price2" style="font-weight: bold;"> $18</span>
                    <br> GRILLED SALMON WITH OLIVE CHIMI</span>
                    <p class="menu-item-description2">Acompañado con puré de papa. <br> Served with mashed potatoes. </p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">PULPO AL GRILL
                    <span class="menu-item-price2" style="font-weight: bold;"> $16</span>
                    <BR> GRILLED OCTOPUS</span>
                    <p class="menu-item-description2">Marinado con ajo, paprika y perejil. Servido con tostones. <br>
                        Marinated with garlic, paprika and parsely. Served with fried plantain.</p>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">ENSALADA/SALAD</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">ENSALADA MI ALMA
                        <span class="menu-item-price2"> $10</span>
                        <BR> MI ALMA SALAD </span>
                    <p class="menu-item-description2">Mezcla de lechuga, tiras de steak, tomates, zanahorias, y parmesano. Aderezo de orégano fresco. <br>
                        Lettuce mix, steak tips, tomatoes, carrots, parmesan. Fresh oregano dressing.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">ENSALADA CESAR CON POLLO
                        <span class="menu-item-price2"> $10</span>
                        <BR> CAESAR SALAD WITH CHICKEN </span>
                    <p class="menu-item-description2"> </p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">ENSALADA DE PULPO
                        <span class="menu-item-price2"> $10</span>
                        <BR> OCTOPUS SALAD </span>
                    <p class="menu-item-description2">Con pimientos, cebolla, cilantro y limón. <br>
                        With peppers, onions, cilantro and lime.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">ARROCES/RICE</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">RISOTTO MAR CARIBE
                        <span class="menu-item-price2"> $22</span>
                        <BR> CARIBBEAN SEA RISOTTO </span>
                    <p class="menu-item-description2">Camarones, calamares, pulpo en salsa pomodoro y parmesano. <br>
                    Shrimp, calamari, octopus in pomodoro sauce and parmesan.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">RISOTTO DE AUYAMA Y CHURRASCO </span>
                    <span class="menu-item-price2"> $16</span>
                    <p class="menu-item-description2"></p>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">CALDOS/SOUP</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">CREMA DE AUYAMA
                        <span class="menu-item-price2"> $6</span>
                        <BR> DOMINICAN PUMPKIN CREAM </span>
                    <p class="menu-item-description2">Con tope de parmesano rallado. <br> With parmesan.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">PARA COMPARTIR/TO SHARE</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">PICADERA DE MARISCOS
                    <span class="menu-item-price2"> $20</span>
                        <br> SEAFOOD PLATTER </span>
                    <p class="menu-item-description2">Calamares, camarones, pescado y papas fritas. <br> Calamari, shrimp, fish and French fries.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">PICALONGA
                        <span class="menu-item-price2"> $18</span>
                        <BR> DOMINICAN PLATTER </span>
                    <p class="menu-item-description2">Longaniza, chuleta ahumada, queso y tostones. <br>
                        Fried beef, longaniza, smoked pork chops, cheese and fried plantains.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">NACHOS
                        <span class="menu-item-price2"> $10</span>
                        <BR> LOADED NACHOS </span>
                    <p class="menu-item-description2">Res, pico de gallo, queso fundido, guacamole, jalapeños y sour cream. <br>
                        Beef, pico de gallo, melted cheese, guacamole, jalapeño and sour cream.</p>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">PASTAS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">LINGUINE AL SALMÓN
                    <span class="menu-item-price2"> $14</span>
                    <BR> SALMON LINGUINE </span>
                    <p class="menu-item-description2">Cremosa salsa aurora con vodka. <br> Creamy aurora sauce and vodka.</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">LINGUINE CUATRO QUESO CON POLLO
                    <span class="menu-item-price2"> $12</span>
                    <BR> FOUR CHEESE LINGUINE WITH CHICKEN </span>
                    <p class="menu-item-description2"></p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">LINGUINE CON CAMARONES EN SALSA BLANCA
                    <span class="menu-item-price2"> $14</span>
                    <BR> SHRIMP LINGUINE IN WHITE SAUCE </span>
                    <p class="menu-item-description2"></p>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">ACOMPAÑAMIENTOS/SIDES</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Tostones/Fried Plantains</span>
                    <span class="menu-item-price2" style="font-weight: bold;"> $3</span> <br>

                    <span class="menu-item-title2">Papas fritas/French Fries</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Arroz y Habichuelas/Rice and beans</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Ensalada/Salad</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Pure de papa/Mashed Potatoes</span>
                    <span class="menu-item-price2"> $3</span> <br>

                    <span class="menu-item-title2">Vegetales/Vegetables</span>
                    <span class="menu-item-price2"> $3</span>
                </div>
            </div>
            <div class="appetizers">
                <h2 style="font-weight: bolder;">PARA LOS PEQUEÑOS/KIDS</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Pechuga de pollo y papas frita/Chicken Tenders & Fries</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Palitos de queso/Cheese Sticks</span>
                    <span class="menu-item-price2"> $5</span> <br>

                    <span class="menu-item-title2">Queso frito y maduros/Fried cheese with sweet plantains</span>
                    <span class="menu-item-price2"> $10</span> <br>
                </div>
            </div>
            <div class="entrees">
                <h2 style="font-weight: bolder;">MOFONGO</h2>
                <div class="red-title-divider"></div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Step 1: MAJADO/MASH </span>
                    <span class="menu-item-price2"> $2</span>
                    <p class="menu-item-description2">Chicarrón de cerdo/Pork Belly</p>
                    <p class="menu-item-description2">Chuleta ahumada/Pork Chops</p>
                    <p class="menu-item-description2">Queso/Cheese</p>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Step 2: RELLENO/FILLING </span><br>

                    <span class="menu-item-title2">Chicarrón de cerdo/Pork Belly</span>
                    <span class="menu-item-price2"> $12</span><br>

                    <span class="menu-item-title2">Chuleta ahumada/Pork Chops</span>
                    <span class="menu-item-price2"> $14</span><br>

                    <span class="menu-item-title2">Rabo/Oxtail</span>
                    <span class="menu-item-price2"> $16</span><br>

                    <span class="menu-item-title2">Queso/Cheese</span>
                    <span class="menu-item-price2"> $12</span><br>

                    <span class="menu-item-title2">Pollo/Chicken</span>
                    <span class="menu-item-price2"> $12</span><br>

                    <span class="menu-item-title2">Churrasco/Skirt Steak</span>
                    <span class="menu-item-price2"> $14</span><br>

                    <span class="menu-item-title2">Camarones/Shrimp</span>
                    <span class="menu-item-price2"> $14</span><br>

                    <span class="menu-item-title2">Mariscos/Seafood</span>
                    <span class="menu-item-price2"> $18</span><br>
                </div>
                <div class="menu-item2">
                    <span class="menu-item-title2">Step 3: TOPE/TOPPINGS </span>

                    <p class="menu-item-description2">Queso rallado/Shredded Cheese</p>
                    <p class="menu-item-description2">Pico de gallo</p>
                    <p class="menu-item-description2">Queso Fundido/Melted Cheese</p>
                </div>
            </div>
        </div>
        <div class="menu menu-row menu-wrap menu-center" id="drinkDiv" style="display: none">
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
        <span class="menu-item-name">IMPORTANTE: Algunos artículos vienen crudo o parcialmente cocinando y puede incrementar el riesgo de enfermedades por alimentos.
        Los consumidores que son especialmente vulnerables sólo debe de comer carnes, mariscos y otras comida de animales completamente cocinados.
        Por favor notifiquemos inmediantamente de cualquier alergia que usted tenga.
        <br> <br>
        IMPORTANT: Some menu items are raw or partially cooked and can increase your risk of food borne illness. Consumers who are especially
        vulnerable to food borne illness should only eat meat, seafood and other food that is thoroughly cooked. Please notify us immediately of any
        food allergies you have.</span>

    </div>


<script>
    var food = document.getElementById("foodDiv");
    var drink = document.getElementById("drinkDiv");


    function switchToFoodMenu() {
        food.style.display = "flex";
        drink.style.display = "none";
    }
    function switchToDrinkMenu() {
        food.style.display = "none";
        drink.style.display = "flex";
    }
    //test
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
