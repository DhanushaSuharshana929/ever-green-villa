<!doctype html>
<?php
include './class/include.php';
$ABOUT_US = new Page(1);
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Vilena template">
        <meta name="keywords" content="hotel, resort, hotel booking, tour, living hotel, motel, event, hotel template">
        <meta name="author" content="Unicoder">
        <title>Evergreen Villa | Home</title>
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
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>

        <!-- End Color Settings -->
        <div id="page_wrapper">
            <div class="">
                <!-- Header Section Start -->
                <?php include 'header.php'; ?>
                <!-- Header Section End --> 

                <!-- Slider Start -->
                <?php include 'slider.php'; ?>
                <!-- Slider End --> 

                <!-- Property Search Section Start -->

                <!-- Property Search Section End --> 

                <!-- About Us Section Start -->
                <section class="full-row bg-white top-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">

                                <div class="main-title-area">
                                    <h2 class="title mb-3">Evergreen Villa</h2>
                                </div>
                                <span class="subtext text-secondary mb-4">Days Inn There you go</span>
                                <p><?php echo $ABOUT_US->description; ?></p>
                                <div class="mt-4 flat-medium flat-white clearfix">
                                    <div class="free-service-item bg-info float-left mb-1 mr-1"> <span class="icon bg-primary float-left mr-2 text-center"><i class="flaticon-dish"></i></span>
                                        <h6 class="inner-title text-dark fw-5 py-4">Accomadation</h6>
                                    </div>
                                    <div class="free-service-item bg-info float-left mb-1 mr-1"> <span class="icon bg-primary float-left mr-2 text-center"><i class="flaticon-leaf"></i></span>
                                        <h6 class="inner-title text-dark fw-5 py-4">Nature Trails</h6>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="img-1 mt-sm-30"><img src="img/squire/1.jpg" alt="The Valena"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About Us Section End --> 

                <!-- Living Room 1 Section Start -->
                <section class="full-row bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-title-area text-center">
                                    <h2 class="title left-right-line mb-4">Our Living Rooms</h2>
                                </div>
                                <span class="subtext text-secondary text-center mb-5 box-width">Across the street from the ordinary</span> </div>
                        </div>
                        <div class="row">
                            <?php
                            $ROOM = new Room(NULL);
                            foreach ($ROOM->all() as $key => $rooms) {
                                ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4">
                                        <div class="thumb-top position-relative">
                                            <ul class="facility-icon upper-place-bottom-left">
                                                <li><i class="flaticon-tv"></i></li>
                                                <li><i class="flaticon-wifi"></i></li>
                                            </ul>
                                            <!--                                            <div class="room-size upper-place-bottom-right">12 X 15 Sqft</div>-->
                                            <div class="overflow_hidden"><a href="view-accomadation.php?id=<?php echo $rooms["id"]; ?>"><img src="upload/room/<?php echo $rooms['image_name'] ?>" alt="Booking Room"></a></div>
                                       
                                        </div>
                                        <div class="room-info p-4">
                                            <div class="down-line-left mb-3">
                                                <h6 class="title"><a class="text-secondery" href="view-accommodation.php?id=<?php echo $rooms["id"]; ?>"><?php echo $rooms['title']; ?></a></h6>
                                                <span><?php echo substr($rooms['short_description'], 0, 115) ?>...</span> </div>
                                            <div class="h5 per-night text-secondery">$80<small>/Night</small></div>
                                            <a href="view-accomadation.php?id=<?php echo $rooms["id"]; ?>" class="btn btn-primary float-right">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            <!--                            <div class="col-md-12 mt-5"> <a href="#" class="btn btn-lg-primary m-auto d-table">View All Rooms</a> </div>-->
                        </div>
                    </div>
                </section>
                <!-- Living Room 1 Section End --> 
                <!-- Blank Area Start -->
                <section class="full-row bg-light parallax parallax-mob parallax-tab parallax-tab2 parallax-tab3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-title-area text-center">
                                    <h2 class="title left-right-line mb-3 text-white">Our Services</h2>
                                </div>
                                <span class="subtext text-secondary text-center mb-5 box-width text-white">Across the street from the ordinary</span> </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="service-item-2 mb-4 bg-white"> <i class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view"></i> <a class="service-link" href="service-details.html">
                                        <h5 class="text-secondery">Restaurent</h5>
                                    </a>
                                    <p>We have nice restaurent, where local and chines food.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service-item-2 mb-4 bg-white"> <i class="flaticon-dumbbell-for-training"></i> <a class="service-link" href="service-details.html">
                                        <h5 class="text-secondery">Fitness Zone</h5>
                                    </a>
                                    <p>Large fitness zone for men and women health care.</p>
                                    </li>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service-item-2 mb-4 bg-white"> <i class="flaticon-leaf"></i> <a class="service-link" href="service-details.html">
                                        <h5 class="text-secondery">Beauty & Spa</h5>
                                    </a>
                                    <p>Spa and body message center. Women care center.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service-item-2 mb-4 bg-white"> <i class="flaticon-golf-ball"></i> <a class="service-link" href="service-details.html">
                                        <h5 class="text-secondery">Sports</h5>
                                    </a>
                                    <p>Large golf field with lake and indor sports event.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service-item-2 mb-4 bg-white"> <i class="flaticon-musical-disc-and-dj-hand"></i> <a class="service-link" href="service-details.html">
                                        <h5 class="text-secondery">Event Room</h5>
                                    </a>
                                    <p>Large event room with 1000 people capacity.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="service-item-2 mb-4 bg-white"> <i class="flaticon-swimming-figure"></i> <a class="service-link" href="service-details.html">
                                        <h5 class="text-secondery">Swiming Pool</h5>
                                    </a>
                                    <p>Hight facility swiming pool and water event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blank Area End --> 

                <section class="full-row bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-title-area text-center">
                                    <h2 class="title left-right-line mb-3">Excursion</h2>
                                </div>
                                <span class="subtext text-secondary text-center mb-5 box-width">Everything except excess</span> </div>
                        </div>
                        <div class="row">
                            <?php
                            $ATTRACTION = new Attraction(NULL);
                            foreach ($ATTRACTION->all() as $key => $attraction) {
                                if ($key == 4) {
                                    break;
                                }
                                ?>

                                <div class="col-xl-6">
                                    <div class="post-item-2 hover_zoom mb-4">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-4">
                                                <div class="overflow_hidden"><a href="view-excursion.php?id=<?php echo $attraction["id"]; ?>"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="Image not found!"></a></div>
                                            </div>
                                            <div class="col-xl-6 col-md-8">
                                                <div class="post-detail-2">
                                                    <h6 class="title mb-3"><a class="text-secondery" href="view-excursion.php?id=<?php echo $attraction["id"]; ?>"><?php echo $attraction['title'] ?></a></h6>
                                                    <p style="text-align: justify;"><?php echo substr($attraction['short_description'], 0, 175) ?>...</p>

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
                            <div class="col-md-12 mt-5"> <a href="#" class="btn btn-lg-primary m-auto d-table">View More Excursions</a> </div>
                        </div>
                    </div>
                </section>


                <!-- Awesome Place Section Start -->

                <!-- Awesome Place Section End --> 
                <!-- Testimonial 1 Section Start -->
                <section class="full-row bg-gray p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-title-area text-center">
                                    <h2 class="title left-right-line mb-4">Testimonial</h2>
                                </div>
                                <span class="subtext text-secondary text-center mb-5 box-width">The Best Value Under the Sun</span> 
                            </div>
                            <div class="col-md-12">
                                <div class="testimonial-1 shadow bg-white" style="padding: 75px 100px 50px;">
                                    <div class="row owl-carousel" id="myslide">
                                        <?php
                                        $COMMENT = new Comments(NULL);
                                        foreach ($COMMENT->activeComments() as $comments) {
                                            ?>
                                        <div class="testimonial-item-1"><img src="upload/comments/<?php echo $comments['image_name']?>"  alt="Testimonial Authot" style="width: 100px !important;">
                                                <div class="opinion">
                                                    <p><i class="fas fa-quote-left"></i><?php echo $comments['comment'] ?></p>
                                                    <h5 class="name"><?php echo $comments['name'] ?></h5>
                                                    <span class="designation"><?php echo $comments['title'] ?></span> </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonial 1 Section End --> 

                <!-- Footer 1 Section Start -->

                <?php include './footer.php'; ?>
                <!-- Footer 1 Section End --> 

                <!-- Copyright Start -->
                <div class="full-row bg-secondery p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copy-right py-4 text-white text-center"> <span>Copyright 2019 Evergreen Villa All Rights Reserved.</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright End -->
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
        <script>
            $(document).ready(function () {
//                $(".owl-carousel").owlCarousel();

                $('#myslide').owlCarousel({
                    items: 1,
                    nav: false,
                    dots: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    mouseDrag: true,
                    responsiveClass: true,

                });

//                $('#carousel-example-generic').owlCarousel({
//                    items: 1,
//                    nav: false,
//                    dots: true,
//                    mouseDrag: true,
//                    responsiveClass: false,
//
//                });

            });
        </script>

    </body>
</html>