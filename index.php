<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("admin/layouts/db.php");?>
<!DOCTYPE html>
<html>

<head>
    <title>Travel Lover</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Client Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!--custom css -->
    <link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->

    <!-- google fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- //google fonts -->

</head>

<body>

    <!-- header -->
    <header>
        <div class="top-head container">
            <div class="ml-auto text-right right-p">
                <ul>
                    <li class="mr-3">
                        <span class="fa fa-phone"></span>+1(21) 234 4567
                    </li>

                </ul>
            </div>
        </div>
        <div class="container">
            <!-- nav -->
            <nav class="py-12 d-lg-flex">

                <div id="">
                   <a href="index.php"><img src="images/logo4.png"  /></a>
                </div>
                <!--  <a href="index.php"><img src="images/logo.png" class="img-fluid"></a>-->
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu ml-auto mt-1">
                    <li class="active"><a href="index.php" class="btn btn-link">Anasayfa</a></li>
                    <li class=""><a href="#about" class="btn">Hakkımızda</a></li>
                    <li class=""><a href="#services" class="btn ">Servisler</a></li>
                    <li class=""><a href="#stats" class="btn ">Durum</a></li>
                    <li class=""><a href="#testimonials" class="btn ">Müşteri Görüşleri</a></li>
                    <li class=""><a href="#contact" class="btn ">İletişim</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="banner" id="home">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 banner-text-w3ls">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom -->
    <section class="some-content py-5" id="about">
        <div class="container py-md-5">
            <div class="row about-vv-top mt-2">
                <div class="col-lg-6 about-info">
                    <h4 class="title-hny  mb-md-5">Hakkımızda</h4>
                    <p>Donec malesuada ex sit amet pretium sid ornare. Nulla congue scelerisque tellus, utpretium nulla
                        malesuada sedint. Suspendisse venenatis,Lorem ipsum dolor sit magna dolor.</p>
                    <div class="read-more-button mt-4">
                        <!--   <a href="index.php" class="read-more btn">Read More </a>-->
                    </div>

                </div>
                <div class="col-lg-6 about-img mt-md-4 mt-sm-4">
                    <img src="images/ab1.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom-->
    <!-- services -->
    <section class="services py-5" id="services">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Servİslerİmİz</h3>
            <div class="row service-grid-grids text-center">
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-h-square"></span>
                    </div>
                    <h4 class="mt-3">En iyi Oteller</h4>
                    <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor
                        remque laudantium, totam dolor.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid2 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-glide-g"></span>
                    </div>
                    <h4 class="mt-3">Turizm Rehberi</h4>
                    <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor
                        remque laudantium, totam dolor.</p>
                </div>

                <div class="col-lg-4 col-md-6 service-grid service-grid3 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-fighter-jet"></span>
                    </div>
                    <h4 class="mt-3">Uçak Biletleri</h4>
                    <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor
                        remque laudantium, totam dolor.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 p-md-0 mb-4">
                    <div class="bg-image-left">
                        <h4>Karedeniz Turları</h4>
                    </div>
                </div>
                <div class="col-md-6 p-md-0 mb-4">
                    <div class="bg-image-right">
                        <h4>Kapodakya Turları</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-0">
                            <div class="bg-image-bottom1">
                                <h4>Doğu Turları</h4>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-0">
                            <div class="bg-image-bottom2">
                                <h4>....</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <!-- stats -->
    <?php $select=$conn->query("SELECT * FROM tours",PDO::FETCH_OBJ);?>
    <?php $tour=count($select->fetchAll());?>
    <?php $select=$conn->query("SELECT * FROM reservation",PDO::FETCH_OBJ);?>
    <?php $prsn=count($select->fetchAll());?>
    <section class="stats" id="stats">
        <div class="layer py-md-5 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row stat-grids">
                    <div class="col-lg-6 stats-left">
                        <h3 class="heading mb-4 text-li">Sahada kİ Yıllar</h3>
                        <p class="mb-3">Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at
                            tempus vel, ultrices in ligula. Nulla sollicit sed.</p>
                    </div>
                    <div class="col-lg-6 grid1 stats-right mt-lg-0 mt-4 pl-5">
                        <div class="row">
                            <div class="col-sm-4 col-6 mb-4">
                                <p></p>
                                <h4></h4>
                            </div>
                            <div class="col-sm-4 col-6 mb-4">
                                <p>şehir turları</p>
                                <h4 class="text"><?=$tour?></h4>
                                <span class="fa fa-tasks mr-2"></span>
                            </div>
                            <div class="col-sm-4 col-12 mb-4">
                                <p class="text-li">Seyehat Severler</p>
                                <h4 class="text-wh"><?=$prsn?></h4>
                                <span class="fa fa-users mr-2"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- Team  -->
    <section class="team py-5" id="team">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Rehberlerİmİz</h3>
            <div class="row">
                <?php $select=$conn->query("SELECT * FROM guides",PDO::FETCH_OBJ);?>
                <?php while($gds=$select->fetch()): ?>
                <div class="team-grid col-lg-3 col-sm-6 mb-5">
                    <img src="admin/upload_images/<?=$gds->image?>" class="" alt="" />
                    <div class="team-info text-center">
                        <h3 class="e"><?=$gds->guides_namesurname?></h3>
                        <span class=""><?=$gds->guides_position?></span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- //Team -->

    <!-- Gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container">
            <h3 class="heading text-center mb-3 mb-sm-5">Tur Fotoğraf Galerİsİ</h3>
            <div class="row col-sm-12">
                <?php $id; $select=$conn->query("SELECT * FROM gallery",PDO::FETCH_OBJ);?>
                <?php while($glry=$select->fetch()): ?>
                <div class="col-sm-4">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="admin/upload_images/<?=$glry->image?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title " style="color:#f4b200;"><?=$glry->title?></h5>
                                <p class="card-text"><?=substr($glry->text,0,300)?></p>
                            </div>
                        </div>
                    </div><br/>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        </div>
    </section>
    <!--// gallery -->

    <!-- destinations -->
    <section class="destinations py-5" id="destinations">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Güncel Tur ve Fiyatları</h3>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                <?php $select=$conn->query("SELECT * FROM tours WHERE is_deleted=false",PDO::FETCH_OBJ);?>
                <?php while($trs=$select->fetch()): ?>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3"><?=$trs->tours_city?></h4>
                    <div class="image-position position-relative">
                        <img src="admin/upload_images/<?=$trs->image?>" class="img-fluid" alt="">
                        <div class="rating">
                            <ul>
                                <li><span class="fa"></span><?=$trs->tours_price?><span class="fa">TL</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4><?=$trs->tours_city?></h4>
                            <a href="#contact">Reserve Et</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
    <!-- destinations -->
    <!--/testimonials -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
            <h3 class="heading heading1 text-center mb-3 mb-sm-5"> Müşteri Yorumları</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-6 test-info text-left mb-4">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the
                        1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span
                            class="fa fa-quote-right"></span></p>
                    <div class="test-img text-right mb-3">
                        <img src="images/te3.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>
                </div>
                <div class="col-lg-4 col-sm-6 test-info text-left mb-4">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the
                        1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span
                            class="fa fa-quote-right"></span></p>

                    <div class="test-img text-right mb-3">
                        <img src="images/te2.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right"> Abraham Smith</h3>


                </div>
                <div class="col-lg-4 col-sm-6 test-info text-left gap1 mb-4">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the
                        1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span
                            class="fa fa-quote-right"></span></p>
                    <div class="test-img text-right mb-3">
                        <img src="images/te3.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

                </div>
            </div>
        </div>
    </section>
    <!--//testimonials -->
    <!-- Contact -->
    <section class="contact py-5" id="contact">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Bİzİm İle İletİşİme Geç</h3>
            <ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                    <div class=" adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <h6>Konum</h6>
                    <p>The company name
                        <br>Addison Township, IL, USA.
                    </p>
                </li>

                <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                    <div class="adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <h6>Telefon Numarası & Email</h6>
                    <p>+(122) 123 456 7890</p>
                    <a href="mailto:info@example.com" class="mail">info@examplemail.com</a>
                </li>
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                    <div class="adress-icon">
                        <span class="fa fa-building"></span>
                    </div>
                    <h6>Şubelerimiz</h6>
                    <p>İstanbul</p>
                    <p>Ankara</p>
                    <p>Mardin</p>

                </li>
            </ul>

            <div class="contact-grids mt-5">
                <h3 class="heading text-center mb-3 mb-sm-5">REZERVASYON</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 contact-left-form">
                        <form action="book.php" method="post">
                            <div class=" form-group contact-forms">
                                <input type="text" name="tour" class="form-control" placeholder="Tur İsmi" required="">
                            </div>
                            <div class=" form-group contact-forms">
                                <input type="text" name="name" class="form-control" placeholder="İsim ve Soyisim"
                                    required="">
                            </div>
                            <div class="form-group contact-forms">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group contact-forms">
                                <input type="text" name="phone" class="form-control" placeholder="Telefon(+90)"
                                    required="">
                            </div>
                            <div class="form-group contact-forms">
                                <textarea class="form-control" name="msg" placeholder="Mesaj" rows="3"
                                    required=""></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <input class="btn btn-warning btn-lg" type="submit" name="send"
                                    class="btn btn-block sent-butnn" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 contact-right pl-lg-5">
                        <img src="images/c1.jpg" class="img-fluid" alt="user-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->
    <!-- map -->
    <div class="map p-2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.728106568!2d-0.24168153701090248!3d51.52877184090542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1544074523717"></iframe>
    </div>
    <!-- //map -->

    <!-- //contact us -->


    <!-- footer -->
    <footer class="footer-content py-3">
        <div class="container py-md-3">

            <div class="row footer-top-inner-vv">
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-3">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">Linkler</h3>
                        <hr>
                        <ul class="list-info-lavi">
                            <li>
                                <a href="#about"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Misyonumuz
                                </a>
                            </li>
                            <li>
                                <a href="#gallery"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Gerçekleşen Turlar
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Keşfet
                                </a>
                            </li>
                            <li>
                                <a href="#contact"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Bizi Bul
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 mt-lg-0 mt-4">
                    <div class="img-fluid">
                        <a href="index.php"><img src="images/logo4.png" class="img-fluid"
                                style="margin-left: 115px;"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                </div>

                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">Navigation</h3>
                        <hr>
                        <ul class="list-info-lavi">
                            <li>
                                <a href="index.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Anasayfa
                                </a>
                            </li>
                            <li>
                                <a href="#about"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Hakkımızda
                                </a>
                            </li>
                            <li>
                                <a href="#services"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Servisler
                                </a>
                            </li>
                            <li>
                                <a href="#team"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Takım
                                </a>
                            </li>
                            <li>
                                <a href="#contact"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    İletişim
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right-top">
        <p class="copy-right text-center py-4">&copy; 2019 Trip Spot. All Rights Reserved | Design by
            <a href="http://w3layouts.com/"> W3layouts </a>
        </p>
    </div>
    <!-- //copyright -->

    <!-- move top -->
    <div class="move-top text-right">
        <a href="#home" class="move-top">
            <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
        </a>
    </div>
    <!-- move top -->



</body>

</html>