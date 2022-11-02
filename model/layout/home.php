<section class="hero-area-one">
    <div class="hero-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <span class="tagline wow fadeInUp text-white" data-wow-delay="0.3s">CLUB 3L</span>
                    <h1 class="title wow fadeInUp text-white" data-wow-delay="0.4s">Club Leones Legado y Linaje</h1>

                </div>
            </div>
        </div>

    </div>
    <div class="hero-images">
        <div class="hero-img image-small fancy-bottom wow fadeInLeft" data-wow-delay="0.6s">
            <img src="assets/picture/imagen-lateral.png" width="350px" height="300px" alt="Image">
        </div>
        <div class="hero-img main-img wow fadeInUp" data-wow-delay="0.5s">
            <img src="assets/picture/imagen-grande-del-banner-pagina-inicio.png" alt="Image">
        </div>
        <div class="hero-img image-small fancy-top wow fadeInRight" data-wow-delay="0.7s">
            <img src="assets/picture/imagen-lateral-3.png" width="350px" height="300px" alt="Image">
        </div>
    </div>
</section>
<!--====== Hero Area End ======-->

<?php require "import/servicios.php"; ?>

<!--====== About Section Start ======-->
<section class="about-section-one">
    <div class="container">
        <div class="row align-items-center justify-content-lg-start justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="about-img">
                    <img src="assets/picture/800-800.png" alt="Image">
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-10 offset-xl-1">
                <div class="about-text mt-md-70 mb-md-50">
                    <div class="common-heading mb-30">
                        <h2 class="title">Quienes somos</h2>
                    </div>
                    <p>
                        El club leones legado y linaje se fundó en 2010 con la finalidad de promover y apoyar a jóvenes deportistas de todo el territorio nacional.
                    </p>
                    <div class="author-note wow fadeInUp">
                        <div class="author-info">
                            <div class="author-img">
                                <img src="assets/picture/brand/logo_club_leones-05.png" alt="Image">
                            </div>
                            <h5 class="name">Coach Rosa León</h5>
                            <span class="title">CEO & Fundadora</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== About Section End ======-->

<?php require "import/projectsPopulares.php"; ?>

<!--====== Counter Area Start ======-->
<section class="counter-section-one mt-negative">
    <div class="container primary-bg">
        <div class="row counter-boxes justify-content-xl-between justify-content-center">
            <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                <div class="counter-box mb-40 icon-left">
                    <div class="icon white-color">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <div class="content white-color">
                        <div class="count-wrap">
                            <span class="count">100</span>
                            <span class="suffix">+</span>
                        </div>
                        <h6 class="title">Logros</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                <div class="counter-box mb-40 icon-left">
                    <div class="icon white-color">
                        <i class="fa fa-medal"></i>
                    </div>
                    <div class="content white-color">
                        <div class="count-wrap">
                            <span class="count">60</span>
                            <span class="suffix">+</span>
                        </div>
                        <h6 class="title">Deportistas</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                <div class="counter-box mb-40 icon-left">
                    <div class="icon white-color">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="content white-color">
                        <div class="count-wrap">
                            <span class="count">3</span>
                            <span class="suffix">+</span>
                        </div>
                        <h6 class="title">Eventos realizados</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                <div class="counter-box mb-40 icon-left">
                    <div class="icon white-color">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="content white-color">
                        <div class="count-wrap">
                            <span class="count">20</span>
                            <span class="suffix">+</span>
                        </div>
                        <h6 class="title">Donantes</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Counter Area End ======-->


<!--====== Partners Section Start ======-->
<section class="partners-section section-gap section-border-bottom">
    <div class="container">
        <div class="common-heading mb-30">

            <h2 class="title">Socios de confianza</h2>
        </div>
        <div class="row partners-logos-one">

            <?php for ($i = 0; $i < 2; $i++) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/picture/brand/agep/logo_1.png" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo mt-30">
                        <a href="#"><img src="assets/picture/brand/raku/logo.png" alt="Image"></a>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>
<!--====== Partners Section End ======-->

<!--====== Latest News Start ======-->
<section class="latest-blog-section section-gap">
    <div class="container">
        <div class="common-heading text-center mb-30">
            <h2 class="title">Noticias relevantes</h2>
        </div>
        <div class="row justify-content-center latest-blog-posts style-one">

            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="latest-post-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/picture/blog/box.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 25 Octubre 2022</a>
                            <h6 class="title">
                                <a href="news-details.html">Five Rules Of App Localization China Money Dating And App
                                    Store</a>
                            </h6>
                            <a href="news-details.html" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>