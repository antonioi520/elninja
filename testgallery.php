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

                <?php
                $dirname = "img/FoodAndDrinkThumbs/";
                $images = glob($dirname."*.jpg");
                $i = 1;

                foreach($images as $image) {
                    echo '<div class="column"><img id="galleryImg" style="width:100%" src="'.$image.'" onclick="openFoodModal();currentFoodSlide('.$i.')" class="hover-shadow cursor"/></div>';
                    $i++;
                }

                ?>

        </div>
    </div>

    <br>
    <br>

    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Interior</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">

            <?php
            $dirname = "img/InteriorThumbsNew/";
            $images = glob($dirname."*.jpg");
            $i = 1;

            foreach($images as $image) {
                echo '<div class="column"><img id="galleryImg" style="width:100%" src="'.$image.'" onclick="openInteriorModal();currentInteriorSlide('.$i.')" class="hover-shadow cursor"/></div>';
                $i++;
            }

            ?>

        </div>
    </div>

    <br>

    <h2 class="gallery-header" style="text-align:center; color:black;padding-bottom:0px;">Staff</h2>
    <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">

            <?php
            $dirname = "img/StaffThumbsNew/";
            $images = glob($dirname."*.jpg");
            $i = 1;
            foreach($images as $image) {
                echo '<div class="column"><img id="galleryImg" style="width:100%" src="'.$image.'" onclick="openStaffModal();currentStaffSlide('.$i.')" class="hover-shadow cursor"/></div>';
                $i++;
            }

            ?>

        </div>
    </div>

    <br>

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

    <br>

    <h2 class="section-title-lowercase gallery-header collapsible" style="text-align:center; color:black;font-weight: 700">El Ninja Tasting (7/1/20)</h2>
    <div class="content">
        <br>
        <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
        <br>
        <div class="gallery-border">
        <div class="row">

            <?php
            $dirname = "img/ElNinjaTasting70120Thumbs/";
            $images = glob($dirname."*.jpg");
            $i = 1;

            foreach($images as $image) {
                echo '<div class="column"><img id="galleryImg" style="width:100%" src="'.$image.'" onclick="openTastingModal();currentTastingSlide('.$i.')" class="hover-shadow cursor"/></div>';
                $i++;
            }

            ?>

        </div>
    </div>
    </div>
    <br>

    <h2 class="section-title-lowercase gallery-header collapsible" style="text-align:center; color:black;font-weight: 700">El Ninja Grand Opening (7/16/20)</h2>
    <div class="content">
        <br>
        <div class="section-title-divider" style="margin-bottom:-10px; background-color:red;"></div>
        <br>
        <div class="gallery-border">
            <div class="row">

                <?php
                $dirname = "img/ElNinjaGrandOpening71620Thumbs/";
                $images = glob($dirname."*.jpg");
                $i = 1;

                foreach($images as $image) {
                    echo '<div class="column"><img id="galleryImg" style="width:100%" src="'.$image.'" onclick="openOpeningModal();currentOpeningSlide('.$i.')" class="hover-shadow cursor"/></div>';
                    $i++;
                }

                ?>

            </div>

        </div>
    </div>

    <br>

<!--- Modals -->
    <div id="foodModal" class="modal">
        <span class="close cursor" onclick="closeFoodModal()">&times;</span>
        <div class="modal-content">
            <?php
            $dirname = "img/FoodAndDrink/";
            $images = glob($dirname."*.jpg");
            $i = 1;
            foreach($images as $image) {
                echo
                    '<div class="foodSlides"> <div class="numbertext">'.$i.' / 47</div><img class="demo cursor" id="galleryImg" style="width:100%" src="'.$image.'" /></div>';
                    $i++;
            }
            ?>
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
            <?php
            $dirname = "img/InteriorNew/";
            $images = glob($dirname."*.jpg");
            $i = 1;
            foreach($images as $image) {
                echo
                    '<div class="interiorSlides"> <div class="numbertext">'.$i.' / 46</div><img class="demo cursor" id="galleryImg" style="width:100%" src="'.$image.'" /></div>';
                $i++;
            }
            ?>

            <a class="prev" onclick="plusInteriorSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorSlides(1)">&#10095;</a>

        </div>
    </div>
    <div id="staffModal" class="modal">
        <span class="close cursor" onclick="closeStaffModal()">&times;</span>
        <div class="modal-content">
            <?php
            $dirname = "img/StaffNew/";
            $images = glob($dirname."*.jpg");
            $i = 1;
            foreach($images as $image) {
                echo
                    '<div class="staffSlides"> <div class="numbertext">'.$i.' / 29</div><img class="demo cursor" id="galleryImg" style="width:100%" src="'.$image.'" /></div>';
                $i++;
            }
            ?>

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
    <div id="tastingModal" class="modal">
        <span class="close cursor" onclick="closeTastingModal()">&times;</span>
        <div class="modal-content">
            <?php
            $dirname = "img/ElNinjaTasting70120/";
            $images = glob($dirname."*.jpg");
            $i = 1;
            foreach($images as $image) {
                echo
                    '<div class="tastingSlides"> <div class="numbertext">'.$i.' / 27</div><img class="demo cursor" id="galleryImg" style="width:100%" src="'.$image.'" /></div>';
                $i++;
            }
            ?>

            <a class="prev" onclick="plusTastingSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusTastingSlides(1)">&#10095;</a>

        </div>
    </div>
    <div id="openingModal" class="modal">
        <span class="close cursor" onclick="closeOpeningModal()">&times;</span>
        <div class="modal-content">
            <?php
            $dirname = "img/ElNinjaGrandOpening71620/";
            $images = glob($dirname."*.jpg");
            $i = 1;
            foreach($images as $image) {
                echo
                    '<div class="openingSlides"> <div class="numbertext">'.$i.' / 125</div><img class="demo cursor" id="galleryImg" style="width:100%" src="'.$image.'" /></div>';
                $i++;
            }
            ?>

            <a class="prev" onclick="plusOpeningSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusOpeningSlides(1)">&#10095;</a>

        </div>
    </div>


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

