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
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>

        <title>Evergreen Villa | Excursion</title>
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
                                <h1 class="banner-title text-white">Excursion</h1>
                            </div>
                            <div class="col-sm-6">
                                <ul class="pages-link">
                                    <li><a href="index.php">Home</a></li>
                                    <li>/</li>
                                    <li>Excursion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Banner Section End --> 

                <!-- Awesome Place Section Start -->

                <section class="full-row bg-gray">
                    <div class="container">
                        <div class="row">
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $key => $attraction) {
                                ?>
                                <div class="col-xl-6">
                                    <div class="post-item-2 hover_zoom mb-4">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-4">
                                                <div class="overflow_hidden"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="Image not found!"></div>
                                            </div>
                                            <div class="col-xl-6 col-md-8">
                                                <div class="post-detail-2">
                                                    <h6 class="title mb-3"><a class="text-secondery" href="view-excursion.php?id=<?php echo $attraction["id"]; ?>"><?php echo $attraction['title'] ?></a></h6>
                                                    <p style="text-align: justify;"><?php echo substr($attraction['short_description'], 0, 165) ?>...</p>
                                                    <ul class="icon-in-list-1">
                                                        <a href="view-excursion.php?id=<?php echo $attraction["id"]; ?>" class="btn btn-primary float-right">View More</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>

                <!-- Awesome Place Section End -->

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