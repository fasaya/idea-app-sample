<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/style.css">
    <link rel="stylesheet" id="cpswitch" href="<?= base_url() ?>template/umroh/css/green.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="<?= base_url() ?>template/umroh/css/magnific-popup.css">

    <style>
        #main-homepage #tour-offers {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(template/umroh/images/banner/banner-6.jpg) 0% 0%;
        }
    </style>
</head>


<body id="main-homepage">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>
            </div><!-- end form-center -->
        </div><!-- end overlay-content -->
    </div><!-- end overlay -->


    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        </ul>
                    </div><!-- end info -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li><a href="login.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>

                        </ul>
                    </div><!-- end links -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end top-bar -->

    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>UMROH</a>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class=""><a href="#">Beranda<span></span></a></li>
                    <li class=""><a href="#">Tentang Kami<span></span></a></li>
                    <li class=""><a href="#">Paket Umroh<span></span></a></li>
                    <li class=""><a href="#">Persyaratan<span></span></a></li>
                    <li class=""><a href="#">Blog<span></span></a></li>
                    <li class=""><a href="#">Testimoni<span></span></a></li>
                    <li></li>
                </ul>
            </div><!-- end navbar collapse -->
        </div><!-- end container -->
    </nav><!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Umroh</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->

                <div class="list-group panel">

                    <a href="#" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Beranda<span></span></a>
                    <a href="#" class="list-group-item"><span><i class=""></i></span>Tentang kami<span></span></a>
                    <a href="#" class="list-group-item"><span><i class=""></i></span>Paket Umroh<span></span></a>
                    <a href="#" class="list-group-item"><span><i class=""></i></span>Persyaratan<span></span></a>
                    <a href="#" class="list-group-item"><span><i class=""></i></span>Blog<span></span></a>
                    <a href="#" class="list-group-item"><span><i class=""></i></span>Testiomoni<span></span></a>




                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->


    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">
            <ul class="slides">

                <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(template/umroh/images/banner/banner-1.jpg) 50% 0%; background-size:cover; height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>Umroh Menjadi Lebih Mudah dengan</h2>
                            <h1>Star Umroh</h1>
                            <a href="#" class="btn btn-default">View More</a>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(template/umroh/images/banner/banner-2.jpg) 50% 0%; background-size:cover; height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>Rencanakan umroh Anda bersama</h2>
                            <h1>Star Umroh</h1>
                            <!-- <a href="#" class="btn btn-default">View More</a> -->
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="nav nav-tabs center-tabs">
                            <li class="active"><a href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="st-text">Cari paket umroh</span></a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="tours" class="tab-pane in active">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                            <div class="form-group left-icon">
                                                <input type="text" class="form-control" placeholder="Kota Keberangkatan" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Bulan Keberangkatan</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group right-icon">
                                                <select class="form-control">
                                                    <option selected>Semua Maskapai</option>
                                                    <option>Etihad Airways</option>
                                                    <option>Garuda Indonesia</option>
                                                    <option>Emirates Airways</option>
                                                    <option>Qatar Airways</option>
                                                    <option>Singapore Airlines</option>
                                                    <option>Cathay Pasific Airlines</option>
                                                    <option>Turkish Airlines</option>
                                                    <option>Saudia Airlines</option>
                                                    <option>Scoot Airlines</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>

                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button class="btn btn-orange">Cari Paket</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end tours -->

                        </div><!-- end tab-content -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->


    <!--=============== HOTEL OFFERS ===============-->

    <!-- end hotel-offers -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Harga Terbaik</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p> -->
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-4 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Aman</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p> -->
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-4 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Terpercaya</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p> -->
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--=============== TOUR OFFERS ===============-->
    <section id="tour-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2 style="color: white;">Paket Umroh</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/umroh/images/tour-1.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">Rp 20.200.000<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Umroh Ekonomi 9 Hari</a>
                                        <p>Jakarta - Jeddah</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/umroh/images/tour-2.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">Rp 21.750.000<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Umroh Silver 9 Hari</a>
                                        <p>Jakarta - Jeddah</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/umroh/images/tour-3.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">Rp 24.700.000<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Umroh Anshar 10 Hari</a>
                                        <p>Medan - Jeddah</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="main-block tour-block">
                                <div class="main-img">
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/umroh/images/tour-4.jpg" class="img-responsive" alt="tour-img" />
                                    </a>
                                </div><!-- end offer-img -->

                                <div class="offer-price-2">
                                    <ul class="list-unstyled">
                                        <li class="price">Rp 24.700.000<a href="#"><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </div><!-- end offer-price-2 -->

                                <div class="main-info tour-info">
                                    <div class="main-title tour-title">
                                        <a href="#">Umroh Syiar 10 Hari</a>
                                        <p>Medan - Jeddah</p>
                                        <div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star grey"></i></span>
                                        </div>
                                    </div><!-- end tour-title -->
                                </div><!-- end tour-info -->
                            </div><!-- end tour-block -->
                        </div><!-- end item -->

                    </div><!-- end owl-tour-offers -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">Lihat Semua Paket</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end tour-offers -->


    <!--=============== CRUISE OFFERS ===============-->

    <!-- end cruise-offers -->


    <!--==================== VIDEO BANNER ===================-->

    <!-- end video-banner -->


    <!--================= FLIGHT OFFERS =============-->

    <!-- end flight-offers -->


    <!--==================== HIGHLIGHTS ====================-->

    <!-- end highlights -->


    <!--================ VEHICLE OFFERS ==============-->

    <!-- end vehicle-offers -->


    <!--==================== TESTIMONIALS ====================-->

    <!-- end testimonials -->


    <!--================ LATEST BLOG ==============-->
    <section id="latest-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Blog</h2>
                        <hr class="heading-line" />
                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/umroh/images/latest-blog-1.jpg" class="img-responsive" alt="blog-img" />
                                    </a>
                                </div><!-- end latest-img -->

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li>
                                    </ul>
                                </div><!-- end latest-info -->

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title">
                                            <a href="#">Travel Insuranve Benefits</a>
                                            <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->

                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div><!-- end latest-desc -->
                            </div><!-- end latest-block -->
                        </div><!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block latest-block">
                                <div class="main-img latest-img">
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/umroh/images/latest-blog-2.jpg" class="img-responsive" alt="blog-img" />
                                    </a>
                                </div><!-- end latest-img -->

                                <div class="latest-info">
                                    <ul class="list-unstyled">
                                        <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li>
                                    </ul>
                                </div><!-- end latest-info -->

                                <div class="main-info latest-desc">
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 main-title">
                                            <a href="#">Travel Guideline Agents</a>
                                            <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->

                                    <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                </div><!-- end latest-desc -->
                            </div><!-- end latest-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end latest-blog -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">COMPANY</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Flight</a></li>
                            <li><a href="#">Hotel</a></li>
                            <li><a href="#">Tours</a></li>
                            <li><a href="#">Cruise</a></li>
                            <li><a href="#">Cars</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                        <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-bottom -->

    </section><!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="<?= base_url() ?>template/umroh/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/jquery.flexslider.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/custom-navigation.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/custom-flex.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/custom-owl.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/custom-date-picker.js"></script>
    <script src="<?= base_url() ?>template/umroh/js/custom-video.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>