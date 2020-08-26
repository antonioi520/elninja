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
                        <h1 class="menu-heading menuHeaderText animated fadeInDown" style="top:-10px;">El Ninja Menu</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div style="text-align: center;margin-bottom: 5px;">
        <button class=" meet1 lang-button1" type="button" onclick="Restaurant()">Restaurant</button>
        <button class=" meet1 lang-button1" type="button" onclick="Takeout()">Takeout</button>
    </div>

    <div id="restarauntMenu">
        <div style="text-align: center;margin-bottom: 5px;">
            <button class="draw meet lang-button" type="button" onclick="myFunction()">English</button>
            <button class="draw meet lang-button" type="button" onclick="myFunction1()">Español</button>
        </div>


        <div id="english">
            <?php include 'views/Menu/EnglishMenu.php' ?>
        </div>
        <div style="display:none" id="spanish">
            <?php include 'views/Menu/SpanishMenu.php' ?>
        </div>
    </div>

    <div style="display:none" id="takeoutMenu">
        <div style="text-align: center;margin-bottom: 5px;">
            <button class="draw meet lang-button" type="button" onclick="myFunctionT()">English</button>
            <button class="draw meet lang-button" type="button" onclick="myFunction1T()">Español</button>
        </div>


        <div id="englishT">
            <?php include 'views/Menu/TakeoutMenu.php' ?>
        </div>
        <div style="display:none" id="spanishT">
            <?php include 'views/Menu/TakeoutMenuSpanish.php' ?>
        </div>

    </div>

    <br><br>
    <span class="menu-item-name">
        <center>
            IMPORTANTE: el 15% de la propina se agregará a las fiestas hasta el 5 y el 20% de la propina se agregará a las fiestas de 6 o más.
            <br><br>
            IMPORTANT: 15% of gratuity will be added to all parties of 5 or more.
            <br>
            IMPORTANT: 20% of gratuity will be added to all parties of 6 or more.
        </center>
    </span>

    <br>
    <br>
    <span class="menu-item-name">IMPORTANTE: Algunos artículos vienen crudos o parcialmente cocinados y pueden incrementar el riesgo de enfermedades por alimentos.
        Los consumidores que son especialmente vulnerables solo deben de comer carnes, mariscos y otras comidas de animales completamente cocinados.
        Por favor notifíquemos inmediatamente de cualquier alergia que usted tenga.
        <br> <br>
        IMPORTANT: Some items come raw or partially cooked and may increase the risk of foodborne illness. Consumers who are especially
        vulnerable should only eat meat, seafood and other fully cooked animal foods. Please notify us immediately of any allergies you have.
    </span>
</div>
<br>
<br>
<?php include("views/footer.html")?>

<a class="top-link hide" href="" id="js-top">
    <img src="img/arrow.png" style="width: 65%; height: 55%;">
</a>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
<script>
    function Restaurant() {
        var x = document.getElementById("restarauntMenu");
        var y = document.getElementById("takeoutMenu");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }
    }
    function Takeout() {
        var x = document.getElementById("takeoutMenu");
        var y = document.getElementById("restarauntMenu");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }
    }

    function myFunction() {
        var x = document.getElementById("english");
        var y = document.getElementById("spanish");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }
    }
    function myFunction1() {
        var x = document.getElementById("spanish");
        var y = document.getElementById("english");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }
    }
    function myFunctionT() {
        var x = document.getElementById("englishT");
        var y = document.getElementById("spanishT");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }
    }
    function myFunction1T() {
        var x = document.getElementById("spanishT");
        var y = document.getElementById("englishT");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }
    }

</script>

</body>
</html>