<!doctype html>
<html lang="en">

<head>
    <title>StarUmroh<?= $title ?></title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("<?= base_url() ?>/template/umroh/images/banner/banner-6.jpg") 0% 0%;
        }

        .side-bar .booking-form {
            padding: 0px 23px 40px;
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
                    <li class=""><a href="<?= base_url() ?>umroh/app/index">Beranda<span></span></a></li>
                    <li class=""><a href="#">Tentang Kami<span></span></a></li>
                    <li class=""><a href="<?= base_url() ?>umroh/app/paket">Paket Umroh<span></span></a></li>
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