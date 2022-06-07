<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upload Stok Produk!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="csspetshop/img/icon1.png" rel="icon">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row py-5 px-lg-3">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-10 text-capitalize"><span class="text-primary">Pet</span>Shop MIRACLE <i
                            class="fa fa-paw" aria-hidden="true"></i></h1>
                </a>
            </div>

        </div>
    </div>
    <!-- Topbar End -->




    <div class="container">

        <div class="card">
            <div class="card-header">
                Edit Data Produk
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Kembali</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('/berkas/update/' . $berkas->id_berkas) ?> ?>"
                    enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Foto Produk</label>
                        <input type="file" class="form-control" id="berkas" name="berkas"
                            value="<?= $berkas->berkas; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Stok Produk</label>
                        <textarea class="form-control" id="keterangan" name="keterangan"
                            rows="3"><?= old('keterangan'); ?> <?= $berkas->keterangan; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Update" />
                    </div>
                    <div class="mb-2">

                        <a href="/berkas" class="btn btn-danger">Kembali</a>

                    </div>
                </form>
            </div>
        </div>
    </div>




</body>



</html>