<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Berkas Produk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="csspetshop/img/icon1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="csspetshop/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="csspetshop/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="csspetshop/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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

    <div class="container">
        <div class="card">
            <div class="card-header">
                Data Produk
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
                <?php endif; ?>
                <a href="<?= base_url(); ?>/berkas/upload" class="btn btn-primary">Upload Produk</a>
                <hr />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Stok Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no  = 1;
                        foreach ($berkas as $row) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><img width="150px" class="img-thumbnail"
                                    src="<?= base_url() . "/uploads/berkas/" . $row->berkas; ?>"></td>
                            <td><?= $row->keterangan; ?></td>
                            <td><a class="btn btn-info"
                                    href="<?= base_url(); ?>/berkas/download/<?= $row->id_berkas; ?>">Download Foto</a>

                                <a title="Delete" href="<?= base_url("berkas/delete/$row->id_berkas") ?>"
                                    class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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