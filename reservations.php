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
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/fadein.css" rel="stylesheet">
    <link href="css/reservations.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo_ninja.png" type="image/x-icon">
    <link rel="icon" href="img/logo_ninja.png" type="image/x-icon">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body class="repeating-bg">
<!-- Header -->
<?php include("views/nav_pages.html")?>
<BR>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/Interior/7.jpg" alt="Second slide" style="height:600px;filter:brightness(50%);object-fit: cover">
            <div class="carousel-caption justify-content-center d-md-block d-flex"  id="hero">
                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="big-heading bigHeaderText animated fadeInDown" style="top:-10px;">Reservations</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title" style="font-family: 'Poppins'; font-size: 2.525em;">Make a Reservation</h1>
                <div class="section-title-divider" style="background-color: #ee2929; margin-top: -30px;"></div>
                <center>
                    <p><label style="color: red;">*</label> = required field.</p>
                    <p><label style="color: red;">Note: We are closed on Mondays and Tuesdays!</label></p> <br>
                </center>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-lg-push-12" style="padding-bottom: 0.625em;">
                <div class="form">
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <form action="book_reservation.php" method="post" role="form" class="contactForm" id="myForm">
                        <label for="name">First and Last Name</label> <label style="color: red;">*</label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <label for="email">Email Address</label> <label style="color: red;">*</label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required />
                            <div class="validation"></div>
                        </div>
                        <label for="phone">Phone Number</label> <label style="color: red;">*</label>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="XXX-XXX-XXXX" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                   required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="event_type">Event Type</label> <label style="color: red;">*</label>
                            <select class="form-control" name="event_type" id="event_type">
                                <option disabled selected hidden>Select your event type</option>
                                <option>Dinner</option>
                                <option>Lunch</option>
                                <option>Birthday</option>
                                <option>Wedding</option>
                                <option>Anniversary</option>
                                <option>Holiday</option>
                                <option>Other</option>
                            </select>
                            <div class="validation"></div>
                        </div>
                        <label for="other_type">If Other, please specify.</label>
                        <div class="form-group">
                            <textarea class="form-control" name="other_type" rows="1"  placeholder="" minlength="0"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attendees">Number of Guests</label> <label style="color: red;">*</label>
                            <input type="number" class="form-control" name="attendees" id="attendees" min="1" max="99" required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label> <label style="color: red;">*</label>
                            <input type="date" class="form-control" name="date" id="date" required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="hours_start">Time</label> <label style="color: red;">*</label>
                            <input type="time" onchange="onTimeChangeStart()" class="form-control" name="hours_start" id="hours_start" required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input style="display: none" type="text" class="form-control" name="hours_start_str" id="hours_start_str" />
                        </div>
                        <label for="special_request">Special Requests (If Applicable)</label>
                        <div class="form-group">
                            <textarea class="form-control" name="special_request" rows="5"  placeholder="" minlength="0"></textarea>
                        </div>

                            <!-- captcha-->
                            <div class="g-recaptcha" data-sitekey="6LfyMaoUAAAAAGI59fbDwBbcF9dY-4Yp8vEmbBsf" data-callback="captcha_filled"
                                 data-expired-callback="captcha_expired"></div>

                        <br>
                        <p class="show-tt" data-toggle="tooltip" title="Complete the reCAPTCHA to login." data-placement="bottom">
                        <div class="text-center"><button style="background-color: #ee2929" id="submitButtonn" value="Submit" type="submit">Submit</button></div>
                        <hr>

                        <div id="sendmessage">Your request has been sent. Thank you!</div>
                        <div id="errormessage">One or more of your entries appears to be invalid, please try again.</div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>

<br id="content-desktop">
<?php include("views/footer.html")?>

<script type="text/javascript">
    var frm = $('#myForm');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: "book_reservation.php",
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
    //prevent submit and show tooltip until captch is complete.
    let submit = false;
    $("#submitButtonn").prop('disabled', true);

    function captcha_filled() {
        submit = true;
        $("#submitButtonn").prop('disabled', false);
        $(".show-tt").tooltip('destroy');
    }
    function captcha_expired() {
        submit = false;
        $("#submitButtonn").prop('disabled', true);
        showTooltip();
    }
    function showTooltip () {
        $(".show-tt").tooltip('show');
    }
</script>

<script>
    var startElement = document.getElementById('hours_start');
    var startStr = document.getElementById('hours_start_str');

    function onTimeChangeStart() {
        var timeSplit = startElement.value.split(':'),
            hours,
            minutes,
            meridian;
        hours = timeSplit[0];
        minutes = timeSplit[1];
        if (hours > 12) {
            meridian = 'PM';
            hours -= 12;
        } else if (hours < 12) {
            meridian = 'AM';
            if (hours == 0) {
                hours = 12;
            }
        } else {
            meridian = 'PM';
        }
        startStr.value = (hours + ':' + minutes + ' ' + meridian);
        //alert(startStr.value);
    }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>