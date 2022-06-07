<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>REGISTER FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Custom Theme files -->
    <link href="cssregister/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->

    <!-- Favicon -->
    <link href="csspetshop/img/iconregister2.png" rel="icon">
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1> PET SHOP </h1>
        <h1><i class="fa fa-user-circle" aria-hidden="true"></i> REGISTER FORM </h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <hr />
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/register/process">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label"> Username</label>
                        <input placeholder="Masukkan Username " type="text" class="form-control" id="username"
                            name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input placeholder="Masukkan Password " type="password" class="form-control" id="password"
                            name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_conf" class="form-label">Confirm Password</label>
                        <input placeholder="Confirm password" type="password" class="form-control" id="password_conf"
                            name="password_conf">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input placeholder="Masukkan Nama Asli" type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <button class="center" type="submit" class="btn btn-primary">Register</button>
                    </div>

                </form>
                <div>
                    <a href="Login"><button class="center " class="btn btn-primary">Kembali</button></a>
                </div>

            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>Pet Shop Miracle | Design by <a href="https://colorlib.com/" target="_blank">MICHAEL TIMOTIUS</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html>