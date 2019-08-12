<!doctype html>
<?php
include './class/include.php';
$id = $_GET["id"];
$rooms = new Room($id);
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

        <title>Evergreen Villa | Accomadation</title>
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
                                <h1 class="banner-title text-white">Accomadation</h1>
                            </div>
                            <div class="col-sm-6">
                                <ul class="pages-link">
                                    <li><a href="index.php">Home</a></li>
                                    <li>/</li>
                                    <li>Accomadation</li>
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
                                <div class="room-item-details">
                                    <div class="img-slide">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
                                                $ROOMPHOTO = RoomPhoto::getRoomPhotosById($id);
                                                foreach ($ROOMPHOTO as $key => $roomphoto) {
                                                    if ($key < 1) {
                                                        ?>
                                                        <div class="carousel-item active"> <img src="upload/room/gallery/<?php echo $roomphoto['image_name'] ?>" alt="Image not found!"> </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="carousel-item"> <img src="upload/room/gallery/<?php echo $roomphoto['image_name'] ?>" alt="Image not found!"> </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="slider-arrow"> <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <i class="fas fa-angle-double-left"></i> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="fas fa-angle-double-right"></i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="room-detail-info bg-white">
                                        <div class="float-left">
                                            <h3><?php echo $rooms->title ?></h3>
                                             </div>
                                        <div class="float-right text-right">
                                            <div class="amount-per-night"><b>Rs.<?php echo $rooms->price ?>.00</b> </div>
                                            <div class="review"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>  </div>
                                        </div>
                                    </div>
                                    <div class="text-block-1 mt-4">
                                        <p><?php echo $rooms->description; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="top-title">Other Accomadation</h3>
                                <div class="row">


                                    <div class="widget widget_posts">

                                        <ul>
                                            <?php
                                            $ROOM = new Room(NULL);
                                            foreach ($ROOM->all() as $rooms) {
                                                ?>
                                                <li>
                                                    <div class="post-item mb-4 bg-color box">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-5">
                                                                <div class=""> <a href="view-accomadation.php?id=<?php echo $rooms["id"]; ?>"><img src="upload/room/<?php echo $rooms['image_name'] ?>" alt="Image not found!" ></a> </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-7 div-padding" >
                                                                <div class="post-detail post-detail-padding">
                                                                    <h5 class="title h5-title"><a class="text-secondery" href="view-accomadation.php?id=<?php echo $rooms["id"]; ?>"><?php echo $rooms['title'] ?></a></h5>
                                                                    <p class="p-des"><?php echo substr($rooms['short_description'], 0, 65) ?>...</p>
                                                                    <button>
                                                                        <a href="view-accomadation.php?id=<?php echo $rooms["id"]; ?>">View More</a>
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
                                <div class="copy-right py-4 text-white text-center"> <span>Copyright 2019 Evergreen Villa All Rights Reserved.</span> </div>
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