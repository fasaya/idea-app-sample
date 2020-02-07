<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Website Event</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>template/event/img/icon/favicon.ico">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/animate.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/owl.carousel.css">
		<!-- icofont css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/icofont.css">
		<!-- Nivo css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/nivo-slider.css">
		<!-- animaton text css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/animate-text.css">
		<!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/material-design-iconic-font.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?= base_url() ?>template/event/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?= base_url() ?>template/event/css/responsive.css">
        <!-- color css -->
		<link href="<?= base_url() ?>template/event/css/color/skin-default.css" rel="stylesheet">
        
		<!-- modernizr css -->
        <script src="<?= base_url() ?>template/event/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--body-wraper-are-start-->
         <div class="wrapper">
         
            <!--slider header area are start-->
            <div class="header-slider-area" id="home">
                <!--header start-->
                <div class="header-area">
                    <!--header-top-start-->
                    <div class="header-top hidden-sm">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 hidden-xs">
                                    <div class="phone-email">
                                        <div class="phone"> <i class="zmdi zmdi-phone"></i>+019 (88) 25184203 </div>
                                        <div class="email"> <a href="mailto:company@domain.com"><i class="zmdi zmdi-email-open"></i>company@domain.com</a> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="login-register">
                                        <div class="login"> <a href="#"><i class="zmdi zmdi-account"></i>Login</a> </div>
                                        <div class="register"> <a href="#"><i class="zmdi zmdi-accounts-add"></i>Register</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header-top-end-->
                    <!--logo menu area start-->
                    <div id="sticker" class="logo-menu-area header-area-2">
                        <div class="container hidden-xs">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="logo">
                                        <a href="index.html"><img src="<?= base_url() ?>template/event/img/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="main-menu text-right">
                                        <nav>
                                            <ul id="nav">
                                                <li><a href="#home">Home</a></li>
                                                <li><a href="#about-event">About</a></li> 
                                                <li><a href="#happen">Happen</a></li>                                               
                                                <li><a href="#speakers">Speakers</a></li>
                                                <li><a href="#news">News</a></li>
                                                <li><a href="event-schedule.html">Schedule</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile-menu-area start -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="logo-02">
                                    <a href="index.html"><img src="<?= base_url() ?>template/event/img/logo-02.png" alt=""></a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="#home">Home</a></li>
                                                <li><a href="#about-event">About</a></li>
                                                <li><a href="#happen">Happen</a></li>
                                                <li><a href="#speakers">Speakers</a></li>
                                                <li><a href="#news">News</a></li>
                                                <li><a href="event-schedule.html">Schedule</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mobile menu area end-->
                    </div>
                    <!--logo menu area start-->
                </div>
                <!-- header End-->
                
                <!--slider area are start-->
                <div class="slider-container bg-overlay">
                    <!-- Slider Image -->
                    <div id="mainSlider" class="nivoSlider slider-image"> 
                        <img src="<?= base_url() ?>template/event/img/slider/slider1.jpg" alt="main slider" title="#htmlcaption1" /> 
                        <img src="<?= base_url() ?>template/event/img/slider/slider2.jpg" alt="main slider" title="#htmlcaption2" /> 
                    </div>
                    <!-- Slider Caption 1 -->
                    <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                        <div class="container">
                            <div class="slide1-text">
                                <div class="middle-text slide-def">
                                    <div class="cap-dec wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                        <p>All Over The worlds</p>
                                    </div>
                                    <div class="cap-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                        <h1>Biggest Designers Meet Up</h1> </div>
                                    <div class="date-address wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                        <div class="event-date"> <i class="zmdi zmdi-calendar-note"></i>Feb 13, 2050 </div>
                                        <div class="event-location"> <i class="zmdi zmdi-pin"></i>15/a Rampura, Bonsrei, Dhaka - 1000 </div>
                                    </div>
                                    <div class="slider-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s"> <a class="btn-def" href="#">Buy Tickets</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Caption 2 -->
                    <div id="htmlcaption2" class="nivo-html-caption slider-caption-1">
                        <div class="container">
                            <div class="slide1-text">
                                <div class="middle-text slide-def">
                                    <div class="cap-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">
                                        <p>All Over The worlds</p>
                                    </div>
                                    <div class="cap-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">
                                        <h1>Biggest Designers Meet Up</h1> </div>
                                    <div class="date-address wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">
                                        <div class="event-date"> <i class="zmdi zmdi-calendar-note"></i>Feb 13, 2050 </div>
                                        <div class="event-location"> <i class="zmdi zmdi-pin"></i>15/a Rampura, Bonsrei, Dhaka - 1000 </div>
                                    </div>
                                    <div class="slider-btn wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s"> <a class="btn-def" href="#">Buy Tickets</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- home slider end -->
                </div>
                <!--slider area are End-->
                <div class="down-arrow"> <a class="see-demo-btn" href="#about-event"><i class="zmdi zmdi-long-arrow-down"></i></a> </div>
            </div>
            <!--slider header area are end-->

            <!--about area are start-->
            <div class="about-area ptb100 fix" id="about-event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="about-left">
                                <div class="about-top">
                                    <h1 class="section-title">About Event</h1>
                                    <div class="total-step">
                                        <div class="descp">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a morless normal distribution of letters, as opposed</p>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="section-title">Detail Event</h1>
                                <div class="total-step">
                                    <div class="about-step">
                                        <h2 class="sub-title">1st Stape to gather</h2>
                                        <div class="descp">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                        </div>
                                    </div>
                                    <div class="about-step">
                                        <h2 class="sub-title">2nd Stape to Create won way</h2>
                                        <div class="descp">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="about-right">
                                <ul>
                                    <li><i class="zmdi zmdi-calendar-note"></i>Feb 13, 2050</li>
                                    <li><i class="zmdi zmdi-pin"></i>15/a Rampura, Bonsrei, Dhaka - 1000 </li>
                                    <li><i class="zmdi zmdi-palette"></i>50,000+ Designers</li>
                                    <li><i class="zmdi zmdi-google-maps"></i>Almost 16+ Countries</li>
                                    <li><i class="zmdi zmdi-accounts"></i>20,000 Seats For Designers</li>
                                    <li><i class="zmdi zmdi-mic-setting"></i>80+ Speaker</li>               
                                </ul>
                                <div class="about-btn"> <a href="#" class="btn-def bnt-2">Register</a> </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--about area are end-->

            <!--what-happen-area start-->
            <div id="happen" class="what-happen-area ptb100 off-white fix">
                <div class="container">
                    <div class="row">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <h1 class="section-title">What Will Happen</h1>
                            <div class="clearfix"></div>
                            <div class="tab-menu-list pt20 mb70 text-center">
                                <ul class="nav happen-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#day-one" aria-controls="day-one" role="tab" data-toggle="tab">13, Feb 2017</a></li>
                                    <li role="presentation"><a href="#day-two" aria-controls="day-two" role="tab" data-toggle="tab">14, Feb 2017</a></li>
                                    <li role="presentation"><a href="#day-three" aria-controls="day-three" role="tab" data-toggle="tab">15, Feb 2017</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="day-one"> 
                                 <div class="row">
                                      <div class="total-happen">
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-rise"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>7.10 am  to  9.00 am</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h1.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-alt"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>9.10 am  to  11.50 am</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h2.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-set"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>12.10 am  to  04.00 pm</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h3.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-full-night"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>4.10 am  to  8.00 pm</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h1.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="day-two"> 
                                     <div class="row">
                                          <div class="total-happen">
                                            <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-set"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>12.10 am  to  04.00 pm</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h3.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-rise"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>7.10 am  to  9.00 am</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h1.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-alt"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>9.10 am  to  11.50 am</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h2.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                           <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-full-night"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>4.10 am  to  8.00 pm</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h1.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                        </div>
                                     </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="day-three"> 
                                     <div class="row">
                                          <div class="total-happen">
                                            <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-alt"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>9.10 am  to  11.50 am</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h2.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                            <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-set"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>12.10 am  to  04.00 pm</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h3.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                            <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-sun-rise"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>7.10 am  to  9.00 am</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h1.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                            <!--single happen start-->
                                            <div class="col-md-12">
                                                <div class="single-happen">
                                                    <div class="happen-top mb30">
                                                        <div class="happen-icon">
                                                            <i class="icofont icofont-full-night"></i>
                                                        </div>
                                                        <div class="happen-time-date">
                                                            <h3>4.10 am  to  8.00 pm</h3>
                                                            <p>14 Feb 2016</p>
                                                        </div>
                                                    </div>
                                                    <div class="happen-bottom">
                                                         <h3 class="happen-heading uppercase">Get Together All designer </h3>
                                                         <div class="happen-details">
                                                             <div class="happen-img">
                                                                 <img src="<?= base_url() ?>template/event/img/team/h1.jpg" alt="">
                                                             </div>
                                                             <div class="happen-text">
                                                                 <p class="uppercase"><strong>Lenao Lorem</strong></p>
                                                                 <p>UX Designer</p>
                                                                 <p class="uppercase">Vanue : Roof 1</p>
                                                             </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--single happen end-->
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--what-happen-area end-->

            <!--speaker section start-->
            <div id="speakers" class="speaker-area pt100 pb85">
                <div class="container">
                    <div class="row">
                      <div class="col-xs-12">
                           <h1 class="section-title">honorable speaker</h1>
                        </div>
                        <div class="clearfix"></div>
                        <div class="total-speaker mt5 crasoule-btn">
                            <!--single-speaker-->
                            <div class="col-md-12">
                                <div class="single-speaker shadow-box text-center">
                                    <img src="<?= base_url() ?>template/event/img/team/team01.jpg" alt="">
                                    <h4 class="speaker-name uppercase"><strong>Patricia Morales</strong></h4>
                                    <p class="speaker-deg">Designer</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--single-speaker-->
                            <!--single-speaker-->
                            <div class="col-md-12">
                                <div class="single-speaker shadow-box text-center">
                                    <img src="<?= base_url() ?>template/event/img/team/team02.jpg" alt="">
                                    <h4 class="speaker-name uppercase"><strong>Patricia Morales</strong></h4>
                                    <p class="speaker-deg">UX Designer</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--single-speaker-->
                            <!--single-speaker-->
                            <div class="col-md-12">
                                <div class="single-speaker shadow-box text-center">
                                    <img src="<?= base_url() ?>template/event/img/team/team03.jpg" alt="">
                                    <h4 class="speaker-name uppercase"><strong>Patricia Morales</strong></h4>
                                    <p class="speaker-deg">Devloper</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--single-speaker-->
                            <!--single-speaker-->
                            <div class="col-md-12">
                                <div class="single-speaker shadow-box text-center">
                                    <img src="<?= base_url() ?>template/event/img/team/team04.jpg" alt="">
                                    <h4 class="speaker-name uppercase"><strong>Patricia Morales</strong></h4>
                                    <p class="speaker-deg">CEO</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--single-speaker-->
                            <!--single-speaker-->
                            <div class="col-md-12">
                                <div class="single-speaker shadow-box text-center">
                                    <img src="<?= base_url() ?>template/event/img/team/team04.jpg" alt="">
                                    <h4 class="speaker-name uppercase"><strong>Patricia Morales</strong></h4>
                                    <p class="speaker-deg">CEO</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--single-speaker-->
                        </div>
                    </div>
                </div>
            </div>
            <!--speaker section end-->

            <!--up comming events area-->
            <div class="upcomming-events-area off-white ptb100">
                  <div class="container">
                      <div class="row">
                          <div class="col-xs-12">
                           <h1 class="section-title">Up Comming Events</h1>
                        </div>
                          <div class="total-upcomming-event col-md-12 col-sm-12 col-xs-12">
                              <div class="single-upcomming shadow-box">
                                 <div class="col-md-4 hidden-sm col-xs-12">
                                     <div class="sue-pic">
                                        <img src="<?= base_url() ?>template/event/img/event/sue-01.jpg" alt=""> 
                                     </div>
                                     <div class="sue-date-time text-center">
                                         <span>26 Mar <br> 2016</span>
                                         <span>09.10 pm</span>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div>
                                        <a href="#">Update Design & Ux Support</a>
                                    </div> 
                                 </div> 
                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                     <div class="venu-no">
                                         <p>Vanue : Hall No 2</p>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-4 col-xs-12">
                                     <div class="upcomming-ticket text-center">
                                         <a href="#" class="btn-def bnt-2 small">Buy A Tickets</a>
                                     </div>
                                 </div>
                              </div>
                              <div class="single-upcomming shadow-box">
                                 <div class="col-md-4 hidden-sm col-xs-12">
                                     <div class="sue-pic">
                                        <img src="<?= base_url() ?>template/event/img/event/sue-02.jpg" alt=""> 
                                     </div>
                                     <div class="sue-date-time text-center">
                                         <span>25 Mar <br> 2016</span>
                                         <span>09.10 pm</span>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div>
                                        <a href="#">Update Design & Ux Support</a>
                                    </div> 
                                 </div> 
                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                     <div class="venu-no">
                                         <p>Vanue : Hall No 2</p>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-4 col-xs-12">
                                     <div class="upcomming-ticket text-center">
                                         <a href="#" class="btn-def bnt-2 small">Buy A Tickets</a>
                                     </div>
                                 </div>
                              </div>
                              <div class="single-upcomming shadow-box">
                                 <div class="col-md-4 hidden-sm col-xs-12">
                                     <div class="sue-pic">
                                        <img src="<?= base_url() ?>template/event/img/event/sue-03.jpg" alt=""> 
                                     </div>
                                     <div class="sue-date-time text-center">
                                         <span>27 Mar <br> 2016</span>
                                         <span>08.10 pm</span>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div>
                                        <a href="#">Update Design & Ux Support</a>
                                    </div> 
                                 </div> 
                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                     <div class="venu-no">
                                         <p>Vanue : Hall No 2</p>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-4 col-xs-12">
                                     <div class="upcomming-ticket text-center">
                                         <a href="#" class="btn-def bnt-2 small">Buy A Tickets</a>
                                     </div>
                                 </div>
                              </div>
                              <div class="single-upcomming shadow-box">
                                 <div class="col-md-4 hidden-sm col-xs-12">
                                     <div class="sue-pic">
                                        <img src="<?= base_url() ?>template/event/img/event/sue-04.jpg" alt=""> 
                                     </div>
                                     <div class="sue-date-time text-center">
                                         <span>29 Mar <br> 2016</span>
                                         <span>06.10 pm</span>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div>
                                        <a href="#">Update Design & Ux Support</a>
                                    </div> 
                                 </div> 
                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                     <div class="venu-no">
                                         <p>Vanue : Hall No 2</p>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-4 col-xs-12">
                                     <div class="upcomming-ticket text-center">
                                         <a href="#" class="btn-def bnt-2 small">Buy A Tickets</a>
                                     </div>
                                 </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <a class="all-events uppercase text-center" href="#">All Events<i class="zmdi zmdi-spinner"></i></a> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>               
            <!--up comming events area-->  

            <!--all-apps-area start-->
            <div class="all-apps-area ptb100">
                    <div class="container">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="apps-cont">
                               <div class="left-app">
                                   <img src="<?= base_url() ?>template/event/img/mobile.png" alt="">
                               </div> 
                                <div class="right-app">
                                    <h1 class="uppercase">Get All Update by Apps</h1>
                                    <p>It is a long established fact that a reader will be distracted by theIpsum is that it has using It is a long established fact that a reader will be distracted.</p>
                                    <div class="app-store">
                                        <a href="#"><img src="<?= base_url() ?>template/event/img/icon/google-play.png" alt=""></a>
                                        <a href="#"><img src="<?= base_url() ?>template/event/img/icon/apple-store.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--all-apps-area end-->

            <!--ready to paly area start-->
            <div class="ready-to-play text-center">
                <div class="full-width-video">
                    <video loop src="<?= base_url() ?>template/event/video/library.mp4" id="video-bg" class="stopfade"></video>
                </div>
                <div class="video-text">
                    <div class="tb-t">
                        <div class="tb-c">
                            <h4 class="uppercase">Ongoing events</h4>
                            <h1 class="uppercase">Play online, all events</h1>
                            <div id="polina">
                                <button><i class='zmdi zmdi-play-circle-outline'></i></button>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--ready to paly area end-->

            <!-- pricing table area start -->
            <div class="pricing-table-area ptb100 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                            <div class="single-pricing-table shadow-box pt50">
                                <div class="price-tag uppercase"> <span>$29.00/day</span> </div>
                                <div class="price-icon"> <img src="<?= base_url() ?>template/event/img/icon/price-01.png" alt=""> </div>
                                <h4 class="uppercase mb40">Silver bokking</h4>
                                <div class="adv-area">
                                    <ul>
                                        <li>Conference Ticket</li>
                                        <li>Free Lunch</li>
                                        <li class="disable">Free Coffee</li>
                                        <li class="disable">Front Table</li>
                                        <li class="disable">Question Support</li>
                                        <li class="disable">More Option</li>
                                    </ul>
                                </div>
                                <div class="price-btn  pt30 pb30"> <a class="btn-def bnt-2 big" href="#">Buy Now</a> </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                            <div class="single-pricing-table shadow-box pt50">
                                <div class="price-tag uppercase"> <span>$39.00/day</span> </div>
                                <div class="price-icon"> <img src="<?= base_url() ?>template/event/img/icon/price-02.png" alt=""> </div>
                                <h4 class="uppercase mb40">Gold bokking</h4>
                                <div class="adv-area">
                                    <ul>
                                        <li>Conference Ticket</li>
                                        <li>Free Lunch</li>
                                        <li>Free Coffee</li>
                                        <li>Front Table</li>
                                        <li class="disable">Question Support</li>
                                        <li class="disable">More Option</li>
                                    </ul>
                                </div>
                                <div class="price-btn  pt30 pb30"> <a class="btn-def bnt-2 big" href="#">Buy Now</a> </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
                            <div class="single-pricing-table shadow-box pt50">
                                <div class="price-tag uppercase"> <span>$49.00/day</span> </div>
                                <div class="price-icon"> <img src="<?= base_url() ?>template/event/img/icon/price-03.png" alt=""> </div>
                                <h4 class="uppercase mb40">Platinum bokking</h4>
                                <div class="adv-area">
                                    <ul>
                                        <li>Conference Ticket</li>
                                        <li>Free Lunch</li>
                                        <li>Free Coffee</li>
                                        <li>Front Table</li>
                                        <li>Question Support</li>
                                        <li>More Option</li>
                                    </ul>
                                </div>
                                <div class="price-btn  pt30 pb30"> <a class="btn-def bnt-2 big" href="#">Buy Now</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pricing table area end -->

            <!--testimonial area are start-->
            <div class="testimonial-area off-white ptb100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" header-bdr text-center">
                                    <h1 class="uppercase mb50">What They Think About Us</h1>
                                    </div>
                                    <div class="total-testimonial testi-border slider-pegi">
                                    <div class="single-testimonial text-center">
                                        <h4 class="author-name uppercase">Rafiq Rana</h4>
                                        <p class="author-deg uppercase">Fashion Expert</p>
                                        <div class="author-img mb25">
                                            <img src="<?= base_url() ?>template/event/img/team/test-01.jpg" alt="">
                                        </div>
                                        <div class="testi-des">
                                            <p>‘‘It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.’’</p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <h4 class="author-name uppercase">Nasir Liton</h4>
                                        <p class="author-deg uppercase">Class Expart</p>
                                        <div class="author-img mb25">
                                            <img src="<?= base_url() ?>template/event/img/team/test-01.jpg" alt="">
                                        </div>
                                        <div class="testi-des">
                                            <p>‘‘It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.’’</p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <h4 class="author-name uppercase">Momen Buhyan</h4>
                                        <p class="author-deg uppercase">Designer</p>
                                        <div class="author-img mb25">
                                            <img src="<?= base_url() ?>template/event/img/team/test-01.jpg" alt="">
                                        </div>
                                        <div class="testi-des">
                                            <p>‘‘It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.’’</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                                                                                 
            <!--testimonial area are start--> 

            <!-- speacial offer are start  -->
            <div class="special-offer-area ptb100">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                            <div class="special-wrap">
                                 <h1 class="section-title white-color">special offer</h1>
                                 <h4 class="uppercase white-color">Buy One Get One free</h4>
                                 <p class="white-color">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                                 <a href="#" class="btn-def bnt-3 red-color">Buy Ticket Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
            <!-- speacial offer are end  --> 

            <!--brand-area are start-->
            <div class="brand-area bg-overlay ptb40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="total-brand">
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/01.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/02.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/03.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/04.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/05.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/06.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/01.png" alt=""></div>
                                <div class="single-brand"><img src="<?= base_url() ?>template/event/img/brand/02.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--brand-area are start-->

            <!--Counter area start-->
            <div class="counter-area pt100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="single-count text-center uppercase">
                               <div class="count-icon">
                                   <img src="<?= base_url() ?>template/event/img/icon/count-01.png" alt="">
                               </div>
                                <h3><span class="counter2">50</span></h3>
                                <p>+ Events</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="single-count text-center uppercase">
                               <div class="count-icon">
                                   <img src="<?= base_url() ?>template/event/img/icon/count-02.png" alt="">
                               </div>
                                <h3><span class="counter2">19</span></h3>
                                <p>+ Location</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="single-count text-center uppercase">
                               <div class="count-icon">
                                   <img src="<?= base_url() ?>template/event/img/icon/count-03.png" alt="">
                               </div>
                                <h3><span class="counter2">12</span></h3>
                                <p>+ Newtwork</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="single-count text-center uppercase">
                               <div class="count-icon">
                                   <img src="<?= base_url() ?>template/event/img/icon/count-04.png" alt="">
                               </div>
                                <h3><span class="counter2">90</span></h3>
                                <p>+ Countries</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="single-count text-center uppercase">
                               <div class="count-icon">
                                   <img src="<?= base_url() ?>template/event/img/icon/count-05.png" alt="">
                               </div>
                                <h3><span class="counter2">5</span></h3>
                                <p>Live Telecast</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="single-count text-center uppercase">
                               <div class="count-icon">
                                   <img src="<?= base_url() ?>template/event/img/icon/count-06.png" alt="">
                               </div>
                                <h3><span class="counter2">200</span></h3>
                                <p>+Idea</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Counter area end-->

            <!-- recent-news-area start-->
            <div id="news" class="recent-news-area pt100 pb90">
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 col-sm-12 col-xs-12 mb50">
                        <h1 class="section-title">Recent News</h1>
                        </div>
                        <div class="clearfix"></div>
                        <div class="total-news crasoule-btn">
                            <div class="col-xs-12">
                                <div class="single-news"> 
                                    <div class="news-img animate-eff">
                                        <a href="#"><img src="<?= base_url() ?>template/event/img/blog/news-01.jpg" alt=""></a>
                                    </div>
                                    <div class="news-contant">
                                        <h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
                                        <p>Post-by :<a href="#"> Admin</a> </p>
                                        <div class="news-bottom shadow-box">
                                            <a href="#"><i class="zmdi zmdi-favorite-outline"></i>5 Like</a>
                                            <a href="#"><i class="zmdi zmdi-comment-text"></i>2 Comment</a>
                                            <a class="read-more" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-news"> 
                                    <div class="news-img animate-eff">
                                        <a href="#"><img src="<?= base_url() ?>template/event/img/blog/news-02.jpg" alt=""></a>
                                    </div>
                                    <div class="news-contant">
                                        <h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
                                        <p>Post-by :<a href="#"> Admin</a> </p>
                                        <div class="news-bottom shadow-box">
                                            <a href="#"><i class="zmdi zmdi-favorite-outline"></i>7 Like</a>
                                            <a href="#"><i class="zmdi zmdi-comment-text"></i>9 Comment</a>
                                            <a class="read-more" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-news"> 
                                    <div class="news-img animate-eff">
                                        <a href="#"><img src="<?= base_url() ?>template/event/img/blog/news-03.jpg" alt=""></a>
                                    </div>
                                    <div class="news-contant">
                                        <h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
                                        <p>Post-by :<a href="#"> Admin</a> </p>
                                        <div class="news-bottom shadow-box">
                                            <a href="#"><i class="zmdi zmdi-favorite-outline"></i>5 Like</a>
                                            <a href="#"><i class="zmdi zmdi-comment-text"></i>2 Comment</a>
                                            <a class="read-more" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-news"> 
                                    <div class="news-img animate-eff">
                                        <a href="#"><img src="<?= base_url() ?>template/event/img/blog/news-01.jpg" alt=""></a>
                                    </div>
                                    <div class="news-contant">
                                        <h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
                                        <p>Post-by :<a href="#"> Admin</a> </p>
                                        <div class="news-bottom shadow-box">
                                            <a href="#"><i class="zmdi zmdi-favorite-outline"></i>10 Like</a>
                                            <a href="#"><i class="zmdi zmdi-comment-text"></i>3 Comment</a>
                                            <a class="read-more" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- recent-news-area end-->

            <!--call to action area start-->
            <div class="call-to-action bg-overlay white-overlay pb100 pt85" style="background: rgba(0, 0, 0, 0) url('<?= base_url() ?>template/event/img/bg/call-to-bg.jpg') repeat scroll 0 0 / cover">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cal-to-wrap">
                                <h1 class="section-title">Enter Your Email Address For Events & News</h1>
                                <form action="#">
                                    <div class="input-box">
                                        <input type="email" placeholder="Enter your E-mail Address" class="info" name="email"> 
                                        <button class="send-btn"><i class="zmdi zmdi-mail-send"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--call to action area End-->  

            <!--map area start-->
            <div id="contact" class="map-area mt100">
              <div id="googleMap"></div>
                <div class="map-content">
                   <div class="content-body">
                   <form id="contact-form" action="mail.php" method="post">
                        <div class="input-box">
                            <input type="text" placeholder="Name" class="info" name="name"> 
                            <input type="email" placeholder="E-mail*" class="info" name="email"> 
                            <input type="text" placeholder="Title" class="info" name="subject"> 
                            <textarea class="area-text" placeholder="Message" name="message"></textarea>
                        </div>
                        <p class="form-messege"></p>
                        <div class="input-box upload-box">
                            <input type="submit" value="Submit" class="submit">
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <!--map area end-->

            <!--information area are start-->
            <div class="information-area off-white ptb100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <h4>Phone</h4>
                                    <p>+ (0192) 5184203</p>
                                    <p>+ (0185) 0950555</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <h4>E-Mail</h4>
                                    <p><a href="mailto:company@email.com">company@email.com</a></p>
                                    <p><a href="mailto:we@company.info">we@company.info</a></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-city-alt"></i>
                                    </div>
                                    <h4>1st Venue</h4>
                                    <p>555 / 2A Sevent Streth</p>
                                    <p>Rampura, Bansree.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-city"></i>
                                    </div>
                                    <h4>1st Venue</h4>
                                    <p>689 / 2B Sevent Streth</p>
                                    <p>Rampura, Bansree.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--information area are start-->

            <!--footer area are start-->
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="social-area">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="payment-area">
                                <ul>
                                    <li><a href=""><img src="<?= base_url() ?>template/event/img/icon/pay-01.jpg" alt=""></a></li>
                                    <li><a href=""><img src="<?= base_url() ?>template/event/img/icon/pay-02.jpg" alt=""></a></li>
                                    <li><a href=""><img src="<?= base_url() ?>template/event/img/icon/pay-03.jpg" alt=""></a></li>
                                    <li><a href=""><img src="<?= base_url() ?>template/event/img/icon/pay-04.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer area are start-->
         </div>   
        <!--body-wraper-are-end-->
		
		<!--==== all js here====-->
		<!-- jquery latest version -->
        <script src="<?= base_url() ?>template/event/js/vendor/jquery-3.1.1.min.js"></script>
		<!-- bootstrap js -->
        <script src="<?= base_url() ?>template/event/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="<?= base_url() ?>template/event/js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="<?= base_url() ?>template/event/js/jquery.meanmenu.js"></script>
		<!-- Nivo js -->
        <script src="<?= base_url() ?>template/event/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="<?= base_url() ?>template/event/js/nivo-slider/nivo-active.js"></script>
		<!-- wow js -->
        <script src="<?= base_url() ?>template/event/js/wow.min.js"></script>
		<!-- Vedio js -->
        <script src="<?= base_url() ?>template/event/js/video.js"></script>
        <!-- Youtube Background JS -->
        <script src="<?= base_url() ?>template/event/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- datepicker js -->
        <script src="<?= base_url() ?>template/event/js/bootstrap-datepicker.js"></script>
		<!-- waypoint js -->
        <script src="<?= base_url() ?>template/event/js/waypoints.min.js"></script>
		<!-- onepage nav js -->
        <script src="<?= base_url() ?>template/event/js/jquery.nav.js"></script>
        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script src="<?= base_url() ?>template/event/js/google-map.js"></script>
        <!-- animate text JS -->
        <script src="<?= base_url() ?>template/event/js/animate-text.js"></script>
		<!-- plugins js -->
        <script src="<?= base_url() ?>template/event/js/plugins.js"></script>
        <!-- ajax-mail js -->
        <script src="<?= base_url() ?>template/event/js/ajax-mail.js"></script>
        <!-- main js -->
        <script src="<?= base_url() ?>template/event/js/main.js"></script>
    </body>
</html>
