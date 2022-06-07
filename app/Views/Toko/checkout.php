<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Checkout Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="csscheckout/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="csscheckout/css/style.css">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
            <?php endif; ?>

            <form method="post" action="<?= base_url(); ?>/checkout/process">

                <h3>CHECK OUT!</h3>


                <div class="form-wrapper">
                    <label for="namapanggilan" class="form-label">Nama Panggilan</label>
                    <input type="text" class="form-control" id="namapanggilan" name="namapanggilan">
                </div>
                <div class="form-wrapper">
                    <label for="namaasli" class="form-label">Nama Asli</label>
                    <input type="text" class="form-control" id="namaasli" name="namaasli">
                </div>
                <div class="form-wrapper">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-wrapper">
                    <label for="password_conf" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf">
                </div>
                <div class="form-wrapper">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-wrapper">
                    <label for="banyak_barang" class="form-label">Banyak Barang</label>
                    <input type="text" class="form-control" id="banyak_barang" name="banyak_barang">
                </div>
                <div class="form-wrapper">
                    <label for="alamat_pelanggan" class="label-comment">Alamat</label>
                    <textarea name="alamat_pelanggan" id="alamat_pelanggan" class="form-control"
                        style="height: 40px"></textarea>
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </div>

            </form>


            <div class="image-holder">
                <img src="csscheckout/images/logo1.jpg" alt="">
            </div>
        </div>
    </div>

    <script src="csscheckout/js/jquery-3.3.1.min.js"></script>
    <script src="csscheckout/js/main.js"></script>
</body>

</html>