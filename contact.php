<!doctype html>
<?php
include './class/include.php';
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
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>

        <title>Evergreen Villa | Contact Us</title>
    </head>
    <body>

        <div id="page_wrapper">
            <div class="">
                <!-- Header 4 Section Start -->
                <?php include './header-top.php'; ?> 
                <!-- Header 4 Section End --> 

                <!-- Page Banner Section Start -->
                <div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
                    <div class="container">
                        <div class="row py-80">
                            <div class="col-sm-6">
                                <h1 class="banner-title text-white">Contact Us</h1>
                            </div>
                            <div class="col-sm-6">
                                <ul class="pages-link">
                                    <li><a href="index-7.html">Home</a></li>
                                    <li>/</li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Banner Section End -->


                <section class="full-row bg-white pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="bg-secondery contact-info">
                                    <h2 class="down-line-left title mb-5">Contact Info</h2>
                                    <div class="text-block-4 mb-4">
                                        <h5>Address</h5>
                                        <p>Deniyaya, Akurassa, Matara.</p>
                                    </div>
                                    <div class="text-block-4 mb-4">
                                        <h5>Message Us</h5>
                                        <span>info@sinharajaecovilla.com</span> </div>
                                    <div class="text-block-4">
                                        <h5>Call Us</h5>
                                        <span>+94-71-669-3502</span> </div>
                                    <ul class="social-media-3">
                                        <li><a href="#"></a></li>
                                    </ul>
                                    <ul class="social-media-3 mt-5 clearfix">
                                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="contact-form-1 contact_page">
                                    <div class="main-title-area mb-5">
                                        <h2 class="title mb-3">Get In Touch</h2>
                                        <span class="subtext text-secondary">Let’s Send Us Message Here</span>
                                    </div>
                                    <div id="contact-form" class="form-style-1 pb-4" action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="txtFullName" name="txtFullName" placeholder="Your Name" type="text">
                                                    <span id="spanFullName"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="txtEmail" name="txtEmail" placeholder="Your Email" type="text">
                                                    <span id="spanEmail"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" id="txtSubject" name="txtSubject" placeholder="Subject" type="text">
                                                    <span id="spanSubject"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="txtMessage" name="txtMessage" cols="30" rows="6" placeholder="Message"></textarea>
                                                    <span id="spanMessage"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center Default-clr-hvr">
                                                <div class="form-group">
                                                    <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                </div>
                                                <div class="col-md-12">
                                                    <span id="capspan" ></span>
                                                </div>
                                            </div>    
                                            <div class="col-md-4   Default-clr-hvr"  >
                                                <div class="form-group" style="width: 74%;">
                                                    <?php include("./contact-form/captchacode-widget.php"); ?>
                                                </div> 
                                            </div>
                                            <div class="col-sm-4 col-md-4">
                                                <div class="div-check" >
                                                    <img src="contact-form/img/checking.gif" id="checking" style="width:50%"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" id="btnSubmit" value="send message" class="btn btn-primary-bg mt-3">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="dismessage" align="center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="full-row bg-gray p-0">
                    <div class="container-fluid">
                        <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.32717083107!2d79.91496081477251!3d6.851329195048676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd97320a087%3A0xfa4766a56acdd267!2sSynotec+Holdings+Pvt.+Ltd!5e0!3m2!1sen!2slk!4v1565075488494!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- Footer Section Start -->
                <?php include './footer.php'; ?>
                <!-- Footer Section End --> 

                <!-- Copyright Section Start -->
                <div class="full-row bg-secondery p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copy-right py-4 text-white text-center"> <span>Copyright 2018 The Vilena All Rights Reserved.</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <script src="js/jquery.cookie.js"></script> 
        <script src="js/custom.js"></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>

        <!-- Map jQuery --> 
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs"></script> 
        <script src="js/map.scripts.js"></script> 

    </body>

</html>