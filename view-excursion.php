<!doctype html>
<?php
include './class/include.php';
$id = $_GET["id"];
$attraction = new Attraction($id);
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

                <section class="full-row bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="place-item-details">
                                    <div class="place-detail-info">
                                        <h3><?php echo $attraction->title ?></h3>
                                        <span>Blue water beach and white sand test</span>
                                    </div>
                                    <div class="mt-5">

                                        <div class="photo-gallery"> 
                                            <?php
                                            $ATTRACTION_PHOTOS = AttractionPhoto::getAttractionPhotosById($id);
                                            foreach ($ATTRACTION_PHOTOS as $key => $attraction_photo) {
                                                if ($key < 6) {
                                                    ?>
                                                    <a href="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" class="img_view" data-fancybox="gallery">
                                                        <div class="overlay-secondery-opacity-40"> <span class="text-primary xy-center"><i class="fa fa-plus"></i></span> <img src="upload/attraction/gallery/thumb/<?php echo $attraction_photo['image_name'] ?>" alt="Image not found!"> </div>
                                                    </a> 
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="line"></div>
                                    <p><?php echo $attraction->description ?></p>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="top-title">Other Excursion</h3>
                                <div class="row">


                                    <div class="widget widget_posts">

                                        <ul>
                                              <?php
                                                $ATTRACTION = new Attraction(NULL);
                                                foreach ($ATTRACTION->all() as $attraction) {
                                                    ?>
                                                <li>
                                                    <div class="post-item mb-4 bg-color box">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-md-7">
                                                                <div class=""> <a href="view-excurtion.php?id=<?php echo $attraction['id'] ?>"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="Image not found!" ></a> </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-7 div-padding" >
                                                                <div class="post-detail post-detail-padding">
                                                                    <h5 class="title h5-title"><a class="text-secondery" href="view-excurtion.php?id=<?php echo $attraction['id'] ?>"><?php echo substr($attraction['title'], 0, 13)?>...</a></h5>
                                                                    <p class="p-des"><?php echo substr($attraction['short_description'], 0, 45) ?>...</p>
                                                                    <button>
                                                                        <a href="view-excurtion.php?id=<?php echo $attraction['id'] ?>">View More</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--wd-post end-->
                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                    </div><!--widget_posts end-->

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Footer Section Start -->
                <?php include './footer.php'; ?>
                <!-- Footer Section End --> 

                <!-- Copyright Section Start -->
                <div class="full-row bg-secondery p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copy-right py-4 text-white text-center"> <span>Copyright 2019 The Vilena All Rights Reserved.</span> </div>
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