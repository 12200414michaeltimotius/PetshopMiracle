<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Berhasil Login!</title>

    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="csshome/assets/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="csshome/assets/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="csshome/assets/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="csshome/assets/css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="csshome/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="csshome/assets/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="csspetshop/img/iconlogin2.png" rel="icon">

    <link rel="stylesheet" href="csshome/assets/css/isotope-docs.css" media="screen">
    <link rel="stylesheet" href="csshome/assets/css/baguetteBox.css">


</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
            <img width="256" height="32" src="csshome/assets/img/loading-cylon-red.svg">
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <a class="navbar-brand" href="#"><img src="csshome/assets/img/icon1.jpg" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#home"> <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out"
                                    aria-hidden="true"></i>Logout</a>
                        </li>

                    </ul>
                </div>


            </div>
        </div>

    </nav>
    <!-- =============== header =============== -->
    <header id="home" class="header5">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">


                <div>
                    <div>
                        <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                            <h1>Hai ! <?= session()->get('name'); ?></h1>
                            <h2 class="wow bounceIn animated" data-wow-delay=".40s">SELAMAT DATANG
                                <br />DI WEBSITE KAMI
                            </h2>
                            <h3 class="wow bounceIn animated" data-wow-delay=".50s">SEMOGA HARI MU MENYENANGKAN </h3>

                            <div class="btn btn-primary wow bounceIn animated" data-wow-delay="1s">
                                <a class="btn btn-primary" href="dashboard"><i class="fa fa-paw" aria-hidden="true"></i>
                                    Masuk</a>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>





            <!-- =============== jQuery =============== -->
            <script src="csshome/assets/js/jquery.js"></script>
            <script src="csshome/assets/js/isotope-docs.min.js"></script>
            <!-- =============== Bootstrap Core JavaScript =============== -->
            <script src="csshome/assets/js/bootstrap.min.js"></script>
            <!-- =============== Plugin JavaScript =============== -->
            <script src="csshome/assets/js/jquery.easing.min.js"></script>
            <script src="csshome/assets/js/jquery.fittext.js"></script>
            <script src="csshome/assets/js/wow.min.js"></script>
            <!-- =============== owl carousel =============== -->
            <script src="csshome/assets/owl-carousel/owl.carousel.js"></script>
            <!-- Isotope does NOT require jQuery. But it does make things easier -->

            <script src="csshome/assets/js/baguetteBox.js" async></script>
            <script src="csshome/assets/js/plugins.js" async></script>

            <!-- =============== Custom Theme JavaScript =============== -->
            <script src="csshome/assets/js/creative.js"> </script>
            <script src="csshome/assets/js/jquery.nicescroll.min.js"></script>


</body>

</html>