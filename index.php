<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>
<style>
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
<?php include("views/header.html") ?>

<link href="css/mobile.css" rel="stylesheet">
<link href="css/fadein.css" rel="stylesheet">
<body>
<!-- Header -->

<?php include("views/nav.html") ?>


<div class="headerwrapper">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Interior/1.jpeg" class="d-block w-100" alt="..." style="height:59.375em;filter: brightness(25%) grayscale(80%);object-fit: cover;">
                <div class="carousel-caption d-md-block" id="hero" style="top:25%;">
                    <center>
                        <h1 class="headertext animated fadeInDown" style="margin-bottom: 0">Welcome To</h1><br>
<!--                        <h1 class="headertext shadow">EL NINJA</H1>-->
                    </center>
                    <center>
                        <img src="img/logo_ninja.png" class="imglogohead" style="margin-bottom: 30px;margin-top: -15px;">
                    </center>
                    <center>
                        <a href="#contact" id="box" style="margin-top: 1em;display:block">
                            <h2 id="headerHours">View Hours</h2>
                        </a>
                    </center>
                    <center>
                        <ul class="headericons">
                            <li style="display: inline;padding:0.5em;"> <div id="test"><a href="#" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                            <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/elninjari/" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                        </ul>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<!--br><br>

<!--div>
    <center>
        <img id="content-desktop896" style="max-width: 30%; max-height:30%;" src="img/comingsoon.jpg">
        <img id="content-mobile896" style="max-width: 100%; max-height:100%;" src="img/comingsoon.jpg">
    </center>
</div-->



<!--==========================
  About Section
  ============================-->
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title" style="font-family: 'Trade Winds';letter-spacing: 0.05em;font-size: 3.125em;">About us</h3>
                <div class="red-title-divider" style="margin-top: -30px;"></div>
                <br>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/Staff/s3.JPG" alt="" style="height:612px;object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/Staff/s3.JPG" alt="" style="height:612px;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">
                <h2 class="about-title" style="margin-bottom: 14px;">We provide incredible Latin/Japanese fusion dishes!</h2>
                <p class="about-text">
                    El Ninja Restaurant is a Latin fusion sushi restaurant brought to Broad Street alongside the newly renovated Bomes Theatre,
                    headed by world-class chef El Ninja and a talented staff, that uses only the finest ingredients!
                </p>
                <p class="about-text">
                    We provide an array of services including Japanese/Latin cuisine, events and
                    chef specials. El Ninja Restaurant serves traditional Japanese cuisine, alongside Japanese/Latin fusion dishes that will blow you away!
                </p>
                <h3 style="font-weight: bold;color: #333;margin-bottom: 14px;">Find Us:</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.441479542669!2d-71.41606578456141!3d41.797249079228706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f8915b52b9f%3A0xabd739480c18098c!2s1007%20Broad%20St%2C%20Providence%2C%20RI%2002905!5e0!3m2!1sen!2sus!4v1588373414872!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;max-width:100%;" allowfullscreen=></iframe>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-intro" style="display:block;background-color: #fff0f0"> <!--f3f2ee og color-->
    <div class="content-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 hov-img-zoom">
                            <a href="services"><img src="img/FoodDrink/ElNinjaFood-12.jpg" alt="IMG-INTRO" class="introimg"></a>
                        </div>

                        <div class="wrap-text-blo1">
                            <a href="services" style="text-decoration: none;"><h4 class="introText">
                                    Our Services
                                </h4></a>

                            <p class="introNormaltext">
                                Take a look at some of the services we provide at El Ninja Restaurant.
                            </p>

                            <a href="services" class="introLearn" style="text-decoration: none;">
                                Learn More
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                <br id="content-mobile896"><br id="content-mobile896">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <a href="events"><img src="img/FoodDrink/ElNinjaFood-17.jpg" alt="IMG-INTRO" class="introimg"></a>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="events" style="text-decoration: none;"><h4 class="introText">
                                    Our Events
                                </h4></a>

                            <p class="introNormaltext">
                                Interested in coming to an event? Check out our page for a list upcoming events.
                            </p>

                            <a href="events" class="introLearn" style="text-decoration: none;">
                                Learn More
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                <br id="content-mobile896"><br id="content-mobile896">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                            <a href="gallery"><img src="img/FoodDrink/ElNinjaFood-18.jpg" alt="IMG-INTRO" class="introimg"></a>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="gallery" style="text-decoration: none;"><h4 class="introText">
                                    Our Gallery
                                </h4></a>

                            <p class="introNormaltext">
                                Explore our image gallery full of food, events and the restaurant itself.
                            </p>

                            <a href="gallery" class="introLearn" style="text-decoration: none;">
                                Learn More
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--<section id="scrollparallax">-->
<!--    <div class="container wow fadeInUp">-->
<!--        <div class="row">-->
<!--            <div class="col-md-8">-->
<!---->
<!--            </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--images in middle -->
<!--section id="middleImages">
    <div class="wrapper" id="iphone">
        <div class="row" style="overflow: hidden;">
            <div class="col-lg-6">
                <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:20%;">
                    <img src="img/imgheader3.png" style="object-fit: contain;">
                    <h1 style="color:white;font-weight: bolder;padding-top: 10%;margin-bottom: 0;">OUR INGREDIENTS</h1>
                    <strong style="color:white;letter-spacing: 0.05em;">We use fresh ingredients of the highest quality and prepare them expertly, ensuring a quality dining experience.</strong><br><br><br>
                    <a href="menu.php" id="ingredientBox" style="height: 4.000em;"><h2 id="ingredientBoxText">View Menu</h2></a>
                </div>
                <img src="img/FoodDrink/MiAlmaCafe-3.jpg" alt="food" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(30%);float:left;">
            </div>
            <div class="col-lg-6">
                <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:20%;">
                    <img src="img/imgheader3.png">
                    <h1 style="color:white;font-weight: bolder;padding-top: 10%;margin-bottom: 0;">OUR SERVICES</h1>
                    <strong style="color:white;letter-spacing: 0.05em;">Our staff consists of our top notch servers and chefs providing every utility at our disposal
                        to ensure that our customers leave satisfied.</strong><br><br><br>
                    <a href="services.php" id="ingredientBox" style="width:15.000em; height: 4.000em;"><h2 id="ingredientBoxText">View Services</h2></a>
                </div>
                <img src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" alt="" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(30%);">
            </div>
        </div>
    </div>
</section-->
<!--contact-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title" style="font-family: 'Trade Winds';letter-spacing: 0.05em;font-size: 3.125em;">Contact Us</h3>
                <div class="section-title-divider" style="background-color: #ee2929; margin-top: -30px;"></div>
                <p class="section-description">Send us a message and we'll get back to you as soon as we can!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-push-2" style="padding-bottom: 0.625em;">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage">One or more of your entries appears to be invalid, please try again.</div>
                    <form action="" method="post" role="form" class="contactForm" id="myForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" minlength="4"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"  placeholder="Message" minlength="2" required></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <!-- captcha-->
                            <div class="g-recaptcha" data-sitekey="6LfyMaoUAAAAAGI59fbDwBbcF9dY-4Yp8vEmbBsf" data-callback="recaptchaCallback"></div>
                        </div>

                        <!--div class="text-center"><button value="Submit" type="submit" onclick="recaptchaCallbackSubmit()">Submit</button></div-->
                        <div class="text-center"><button disabled type="submit" style="background-color: #ee2929;">Disabled</button></div>

                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-4 col-md-push-2">
                <div class="info">
                    <br id="content-mobile">
                    <div>
                        <i class="fas fa-phone" style="color: #ee2929;"></i><h4 style="padding-left:1.6em;">Phone</h4>
                        <p>(401) 467-2581</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="far fa-calendar-alt" style="color: #ee2929;"></i><h4 style="padding-left:1.6em;">Hours</h4>
                        <strong>Mon:</strong><p style="padding-left:0;"> Closed</p><br>
                        <strong>Tue-Thur:</strong><p style="padding-left:0;"> 4pm-12am</p><br>
                        <strong>Fri:</strong><p style="padding-left:0;"> 4pm-12am</p><br>
                        <strong>Sat-Sun:</strong><p style="padding-left:0;"> 12pm-12am</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="fas fa-location-arrow" style="color: #ee2929;"></i><h4 style="padding-left:1.6em;">Location</h4>
                        <p>1007 Broad Street</p><br>
                        <p>Providence, RI 02905</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- #footer -->
<?php include("views/footer.html")?>

<div id="content-mobile896">
    <a class="top-link hide" href="" id="js-top">
        <img src="img/arrow.png" style="width: 65%; height: 55%;">
    </a>
</div>

<?php include("views/includebottom.html") ?>

<script type="text/javascript">
    var frm = $('#myForm');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: "send_email.php",
            data: frm.serialize(),
            success: function (data) {
                return false;
            },
            error: function()
            {
                $("#errormessage").show();
                return false;
            }
        });

        ev.preventDefault();
    });
</script>
<script>
    var invalidClassName = 'invalid'
    var inputs = document.querySelectorAll('input, select, textarea')
    inputs.forEach(function (input) {
        // Add a css class on submit when the input is invalid.
        input.addEventListener('invalid', function () {
            input.classList.add(invalidClassName)
        })

        // Remove the class when the input becomes valid.
        // 'input' will fire each time the user types
        input.addEventListener('input', function () {
            if (input.validity.valid) {
                input.classList.remove(invalidClassName)
            }
        })
    })
</script>
<script>
    function recaptchaCallbackSubmit(){
        //var response = grecaptcha.getResponse().length;
        if(grecaptcha.getResponse().length > 0){
            //captcha validated and got response code
            $("#sendmessage").show();
            $("#errormessage").hide();
            grecaptcha.reset();
            return false;
        }else{
            $("#myForm")[0].reset();
            grecaptcha.reset();
            $("#errormessage").show();
            $("#sendmessage").hide();

            return false;
        }
    }
</script>
<script>
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 1) {
            $('.bg-blackish').css('background-color', 'rgba(0,0,0,.6)');
        } else {
            $('.bg-blackish').css('background', 'transparent');
        }
    });
</script>
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
</body>
</html>
