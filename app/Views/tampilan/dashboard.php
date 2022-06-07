<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetShop Miracle </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="csspetshop/img/icon1.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="csspetshop/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="csspetshop/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="csspetshop/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="csspetshop/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row py-3 px-lg-1">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Pet</span>Shop MIRACLE <i
                            class="fa fa-paw" aria-hidden="true"></i></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6><i class="fa fa-shopping-bag" aria-hidden="true"></i> BUKA TOKO</h6>
                        <p class="m-0">9:00 - 19:00</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email Admin</h6>
                        <p class="m-0">petshoppontianak@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> Kontak Admin</h6>
                        <p class="m-0"><i class="fa fa-whatsapp" aria-hidden="true"></i> 085389195401</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-1">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span
                        class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="dashboard" class="nav-item nav-link active"><i class="fa fa-home" aria-hidden="true"></i>
                        Home</a>
                    <a href="about" class="nav-item nav-link"><i class="fa fa-info" aria-hidden="true"></i> About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i> Produk</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="toko" class="dropdown-item">Toko</a>

                            <a href="/berkas" class="dropdown-item">Stok Produk</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-address-card" aria-hidden="true"></i> Daftar</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/pegawai" class="dropdown-item">Daftar Pegawai</a>
                            <a href="/daftarpelanggan" class="dropdown-item">Daftar Pelanggan</a>
                        </div>
                    </div>
                    <a href="https://wa.me/6285389195401" class="nav-item nav-link">Customer Services</a>
                    <a href="member" class="nav-item nav-link"><i class="fa fa-users" aria-hidden="true"></i> Team
                        Member</a>
                    <a href="Login" class="nav-item nav-link"><i class="fa fa-sign-in" aria-hidden="true"></i>Log
                        Out</a>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="csspetshop/img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Food</h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Jangan buat hewan kesayangan anda lapar
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="csspetshop/img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Pet Food berkualitas</h3>
                            <h1 class="display-3 text-white mb-3">Hanya ada di <br> Petshop Miracle</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Jangan salah pilih
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Shop</h1>
                <p class="m-0">Pet shop terpercaya , aman dan higenis</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Information Web</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Parit Bugis</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>085389195401</p>
                        <p><i class="fa fa-envelope mr-2"></i>petshoppontianak@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Pet Shop Pontianak</a>. All Rights Reserved.
                    Designed by
                    <a class="text-white font-weight-bold" href="https://www.instagram.com/mikiikajo/?hl=id">Michael
                        Timotius</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="csspetshop/lib/easing/easing.min.js"></script>
    <script src="csspetshop/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="csspetshop/lib/tempusdominus/js/moment.min.js"></script>
    <script src="csspetshop/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="csspetshop/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="csspetshop/mail/jqBootstrapValidation.min.js"></script>
    <script src="csspetshop/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="csspetshop/js/main.js"></script>
</body>

</html>