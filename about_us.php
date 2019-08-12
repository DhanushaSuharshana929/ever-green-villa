<!doctype html>
<?php
include './class/include.php';
$ABOUT_US = new Page(2);
?>
<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Vilena template">
        <meta name="keywords" content="hotel, resort, hotel booking, tour, living hotel, motel, event, hotel template">
        <meta name="author" content="Unicoder">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <!-- Font Link -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">

        <!-- Required style of the theme -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/layerslider.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/color.css" id="color-change">
        <link rel="stylesheet" href="css/fontawesome-all-5.2.0.min.css">
        <link rel="stylesheet" href="webfonts/flaticon/flaticon.css">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>

        <title>Evergreen Villa | About Us</title>
    </head>
    <body>
       

        <div id="page_wrapper">
            <div class="">
                <!-- Header 4 Section Start -->
                <?php include 'header-top.php'; ?>
                <!-- Header 4 Section End --> 

                <!-- Page Banner Section Start -->
                <div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
                    <div class="container">
                        <div class="row py-80">
                            <div class="col-sm-6">
                                <h1 class="banner-title text-white">About Us</h1>
                            </div>
                            <div class="col-sm-6">
                                <ul class="pages-link">
                                    <li><a href="index.php">Home</a></li>
                                    <li>/</li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Banner Section End --> 

                <!-- About Us Section Start -->
                <section class="full-row about-us-2 bg-white">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="main-title-area mb-4 mt-5">
                                    <h2 class="title"><?php echo $ABOUT_US->title; ?></h2>
                                </div>
                                <p><?php echo $ABOUT_US->description; ?></p>
                            </div>
                            <div class="col-md-4 about-us-img">
                                <img src="img/squire/1.jpg">
                            </div>
                        </div>

                    </div>
                </section>
                <!-- About Us Section Start --> 


                <!-- Footer Section Start -->
                <?php include './footer.php'; ?>
                <!-- Footer Section End --> 

                <div class="full-row bg-secondery p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copy-right py-4 text-white text-center"> <span>Copyright 2018 The Vilena All Rights Reserved.</span> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright Section Start -->
               
                <!-- Copyright Section End -->
                <div class="scroll-to-top"> <a href="#" class="btn-scroll" data-target="body"><i class="fa fa-angle-up" aria-hidden="true"></i><b>Back to Top</b></a> </div>
            </div>
        </div>
        <!-- Wrapper End --> 

        <!-- Jquery links --> 
        <script src="js/jquery.min.js"></script> 
        <script src="js/greensock.js"></script> 
        <script src="js/layerslider.transitions.js"></script> 
        <script src="js/layerslider.kreaturamedia.jquery.js"></script> 
        <script src="js/popper.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/common.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/jquery.cookie.js"></script> 
        <script src="js/custom.js"></script> 

        <!-- For Home page5 side nav --> 
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginRight = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginRight = "0";
            }
        </script>
    </body>

</html>