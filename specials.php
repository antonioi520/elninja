
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
    <link href="css/css.css" rel="stylesheet">
    <link href="css/fadein.css" rel="stylesheet">

    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/events.css" rel="stylesheet">
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
            <img class="d-block w-100" src="img/Interior/5.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="eventHeaderBox">
                        <h1 class="big-heading bigHeaderText animated fadeInDown" style="top:-10px;">Specials</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>

</div>

<div class="container" style="">
    <center>
        <img src="img/logo_ninja.png" style="height:200px;width:300px;object-fit: contain;">
    </center>

    <hr style="margin-bottom:0px;">
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our <strong style="color:#ee2929">Specials</strong></h1>
        <br>
        <div class="red-title-divider" style="width:300px;"></div>
    </div>

    <br>

     <h2 style="text-align: center;color:black;margin-bottom: 5px;font-weight: 600">Check out our current special offers!</h2>
    <br>

    <div style="padding:20px;border:3px double #ee2929 ">
        <h3 style="text-align: center;margin-bottom: 10px;">Mondays</h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <h5 style="text-align: center;">None</h5>

        <h3 style="text-align: center;margin-bottom: 10px;">Tuesdays</h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <h5 style="text-align: center;">None</h5>

        <h3 style="text-align: center;margin-bottom: 10px;">Wednesdays</h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <div class="row">

            <!--<div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                <div class="row no-gutters">
                  <div class="col-md-4" style="border: 1px outset #fbca67">
                    <img src="img/Specials/drinks special.jpeg" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background-image: url(img/ninja_space.png);">
                        <br>
                      <h5 class="card-title" style="font-size: 30px;">15% Off Drinks</h5><br>
                      <p class="card-text" style="font-size: 20px;">Wednesdays and Thursdays</p>
                      <br>
                      <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                      <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                    </div>
                  </div>
                </div>
              </div>-->
        </div>


        <div class="row">

            <div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                <div class="row no-gutters">
                  <div class="col-md-4" style="border: 1px outset #fbca67">
                    <img src="img/Specials/sushi special 2.jpg" class="card-img" alt="..." style="object-fit:cover;height:256px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background-image: url(img/ninja_space.png);">
                        <br>
                      <h5 class="card-title" style="font-size: 30px;">$10 All Sushi Rolls / <br> $10 Todo Sushi</h5>

                      <p class="card-text" style="font-size: 20px;">Wednesdays</p>
                      <br>
                      <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                      <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <div class="row">

            <div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                <div class="row no-gutters">
                  <div class="col-md-4" style="border: 1px outset #fbca67">
                    <img src="img/Specials/sushi special.jpg" class="card-img" alt="..." style="object-fit:cover;height:256px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background-image: url(img/ninja_space.png);">
                        <br>
                      <h5 class="card-title" style="font-size: 30px;">$10 All Sushi Rolls / <br> $10 Todo Sushi</h5>

                      <p class="card-text" style="font-size: 20px;">Wednesdays</p>
                      <br>
                      <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                      <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <br>
        <h3 style="text-align: center;margin-bottom: 10px;">Thursdays</h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <div class="row">
            <!--<div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                <div class="row no-gutters">
                  <div class="col-md-4" style="border: 1px outset #fbca67">
                    <img src="img/Specials/drinks special.jpeg" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background-image: url(img/ninja_space.png);">
                        <br>
                      <h5 class="card-title" style="font-size: 30px;">15% Off Drinks</h5><br>
                      <p class="card-text" style="font-size: 20px;">Wednesdays and Thursdays</p>
                      <br>
                      <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                      <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                    </div>
                  </div>
                </div>
              </div>-->
        </div>

        <div class="row">
            <div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                <div class="row no-gutters">
                  <div class="col-md-4" style="border: 1px outset #fbca67">
                    <img src="img/Specials/ninja fongo 1.jpg" class="card-img" alt="..." style="object-fit:cover;height:256px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background-image: url(img/ninja_space.png);">
                        <br>
                      <h5 class="card-title" style="font-size: 30px;">Jueves de NinjaFongo / <br> Thursday of NinjaFongo</h5>
                      <p class="card-text" style="font-size: 20px;">Thursdays</p>
                      <br>
                      <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                      <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                <div class="row no-gutters">
                  <div class="col-md-4" style="border: 1px outset #fbca67">
                    <img src="img/Specials/ninja fongo 2.jpg" class="card-img" alt="..." style="object-fit:cover;height:256px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="background-image: url(img/ninja_space.png);">
                        <br>
                        <h5 class="card-title" style="font-size: 30px;">Jueves de NinjaFongo / <br> Thursday of NinjaFongo</h5>
                      <p class="card-text" style="font-size: 20px;">Thursdays</p>
                      <br>
                      <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                      <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <br>


        <h3 style="text-align: center;margin-bottom: 10px;">Fridays</h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <h5 style="text-align: center;">None</h5>
        <div class="row">
              <!--<div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                  <div class="row no-gutters">
                    <div class="col-md-4" style="border: 1px outset #fbca67">
                      <img src="img/Specials/special5_2.jpg" class="card-img" alt="..." style="object-fit:cover; height:263px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" style="background-image: url(img/ninja_space.png);">
                          <br>
                        <h5 class="card-title" style="font-size: 30px;">Boca Chica a la Diabla</h5>
                        <p class="card-text" style="font-size: 20px;">$35</p>
                        <br>
                        <p class="card-text" style="font-size: 15px;">Friday & Satuday</p>
                        <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                        <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                      </div>
                    </div>
                  </div>
                </div>-->
          </div>



        <h3 style="text-align: center;margin-bottom: 10px;">Saturday (July 17th) </h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <h5 style="text-align: center;color:#ee2929;font-weight: bold;font-size: 25px;">1 Year Anniversary!</h5>
        <img src="img/Home/1yearposter.JPG" alt="" style="height:612px;object-fit: cover;display: block;margin-left: auto;margin-right: auto;" id="aboutImg">
        <br>
        <video width="736" height="258" controls style="display: block;margin-left: auto;margin-right: auto; max-width:100%">
            <source src="img/ninja1year.MP4" type="video/mp4">
        </video>
        <div class="row">
            <div class="text-center">
            </div>
             <!-- <div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                  <div class="row no-gutters">
                    <div class="col-md-4" style="border: 1px outset #fbca67">
                      <img src="img/Specials/special5_2.jpg" class="card-img" alt="..." style="object-fit:cover; height:263px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" style="background-image: url(img/ninja_space.png);">
                          <br>
                        <h5 class="card-title" style="font-size: 30px;">Boca Chica a la Diabla</h5>
                        <p class="card-text" style="font-size: 20px;">$35</p>
                        <br>
                        <p class="card-text" style="font-size: 15px;">Friday & Satuday</p>
                        <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                        <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                      </div>
                    </div>
                  </div>
                </div>-->
          </div>
        <br/>


        <h3 style="text-align: center;margin-bottom: 10px;">Sundays</h3>
        <div class="red-title-divider" style="height:.0100em;width:200px;padding:0px;margin-bottom:10px;"></div>
        <h5 style="text-align: center;">None</h5>
          <div class="row">
              <!--<div class="card text-center mb-3" style="max-width: 740px;margin: 0 auto;border: 2px ridge">
                  <div class="row no-gutters">
                    <div class="col-md-4" style="border: 1px outset #fbca67">
                      <img src="img/Specials/special4.jpg" class="card-img" alt="..." style="object-fit:cover; height:261px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" style="background-image: url(img/ninja_space.png);">
                          <br>
                        <h5 class="card-title" style="font-size: 30px;">Ninja Brunch</h5>
                        <p class="card-text" style="font-size: 15px;">Mimosa $5/$15</p>
                        <p class="card-text" style="font-size: 15px;">Sangria $6/$25</p> <br>
                        <p class="card-text" style="font-size: 15px;">Sundays 12pm - 4pm</p>

                        <p class="card-text"><small class="text-muted">1007 Broad Street Providence, RI 02905</small></p>
                        <p class="card-text"><small class="text-muted">(401) 467-2581</small></p>
                      </div>
                    </div>
                  </div>
                </div>-->
          </div>
    </div>



<div class="col-md-6"></div>
</div>

<br>
<br id="content-desktop">

<?php include("views/footer.html")?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
