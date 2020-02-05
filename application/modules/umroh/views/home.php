<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-1">

    <div class="flexslider slider" id="slider-1">
        <ul class="slides">

            <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('<?= base_url() ?>template/umroh/images/banner/banner-1.jpg') 50% 0%; background-size:cover; height:100%;">
                <div class=" meta">
                    <div class="container">
                        <h2>Umroh Menjadi Lebih Mudah dengan</h2>
                        <h1>Star Umroh</h1>
                        <a href="#" class="btn btn-default">View More</a>
                    </div><!-- end container -->
                </div><!-- end meta -->
            </li><!-- end item-1 -->

            <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('<?= base_url() ?>template/umroh/images/banner/banner-2.jpg') 50% 0%; background-size:cover; height:100%;">
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
                                                <option selected>Maskapai</option>
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
                                        <!-- <button class="btn btn-orange">Cari Paket</button> -->
                                        <a href="<?= base_url() ?>umroh/app/paket" class="btn btn-orange">Cari Paket</a>
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
            <div class="col-sm-4 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-dollar"></i></span>
                    <h3>Harga Terbaik</h3>
                    <!-- <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p> -->
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-4 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                    <h3>Aman</h3>
                    <!-- <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p> -->
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-4 col-md-4">
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
                                    <img src="<?= base_url() ?>template/umroh/images/banner/banner-5.jpg" class="img-responsive" alt="tour-img" />
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
                                    <img src="<?= base_url() ?>template/umroh/images/banner/banner-5.jpg" class="img-responsive" alt="tour-img" />
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
                                    <img src="<?= base_url() ?>template/umroh/images/banner/banner-5.jpg" class="img-responsive" alt="tour-img" />
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
                                    <img src="<?= base_url() ?>template/umroh/images/banner/banner-5.jpg" class="img-responsive" alt="tour-img" />
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
                    <a href="<?= base_url() ?>umroh/app/paket" class="btn btn-orange">Lihat Semua Paket</a>
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
                                    <img src="<?= base_url() ?>template/umroh/images/banner/blog-1.jpg" class="img-responsive" alt="blog-img" />
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
                                        <a href="#">Ternyata Ada Banyak Masjid Dekat Masjid Nabawi!</a>
                                        <p>Beberapa masjid ini ternyata memiliki sejarah masing-masing dan diantaranya masih digunakan untuk melakukan sholat di dalamnya. Umrohpedia akan rangkum beberapa masjid terdekat dari Masjid Nabawi yang masih bisa dijangkau menggunakan jalan kaki saja.</p>
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
                                    <img src="<?= base_url() ?>template/umroh/images/banner/blog-2.jpeg" class="img-responsive" alt="blog-img" />
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
                                        <a href="#">Kini, Kamu Bisa Pergi Umroh Lebih dari Sekali dalam 3 Tahun</a>
                                        <p>Pada pertengahan September 2019, terdengar kabar mengenai akan adanya kebijakan baru dari pemerintah Arab Saudi untuk perihal visa umroh. Kini, bisa dipastikan bahwa visa progresif sudah ditiadakan dan adanya ketentuan baru perihal harga visa umroh.</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->

                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div><!-- end latest-desc -->
                        </div><!-- end latest-block -->
                    </div><!-- end columns -->

                </div><!-- end row -->

                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">Lihat Semua Blog</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end latest-blog -->