<!doctype html>
<html lang="en">

<head>
    <title>Miracle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="csslogin/css/style.css">
    <link href="csspetshop/img/iconlogin2.png" rel="icon">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Selamat Datang di </h2>
                                <h2>Pet Shop <span>Miracle</span></h2>
                                <h3 class=""> Tidak Punya Akun <i class="fa fa-question" aria-hidden="true"></i>
                                </h3>
                                <p>Daftar Dulu Yuk <i class="fa fa-hand-o-down" aria-hidden="true"></i></p>

                                <a href="Register" class="btn btn-white btn-outline-white"><i class="fa fa-user-plus"
                                        aria-hidden="true"></i> Daftar</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4"><i class="fa fa-user"></i> Login Dulu!</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url(); ?>/login/process">
                                <div class="form-group mb-3">
                                    <label class="label" for="name"><i class="fa fa-address-card"
                                            aria-hidden="true"></i> Username</label>
                                    <input input type="text" name="username" id="username" placeholder="Username"
                                        class="form-control" required autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password"><i class="fa fa-lock" aria-hidden="true"></i>
                                        Password</label>
                                    <input type="password" name="password" id="password" placeholder="Password"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3"><i
                                            class="fa fa-sign-in" aria-hidden="true"></i> Masuk
                                    </button>
                                </div>
                                <div class="form-group d-md-flex">


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="csslogin/js/jquery.min.js"></script>
    <script src="csslogin/js/popper.js"></script>
    <script src="csslogin/js/bootstrap.min.js"></script>
    <script src="csslogin/js/main.js"></script>

</body>

</html>