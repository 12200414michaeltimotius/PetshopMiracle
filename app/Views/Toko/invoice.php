<!-- Customized Bootstrap Stylesheet -->
<link href="cssinvoice/style.css" rel="stylesheet">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="cssinvoice/style.css" media="all" />
</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img src="csstoko/logo1.png">
        </div>


        <div id="company">
            <h2 class="name">Petshop Miracle</h2>
            <div>Parit Bugis , Kencana Legian Permai</div>
            <div>085389195401</div>
            <div><a href="mailto:company@example.com">petshopmiracle989@gmail.com</a></div>
        </div>

        </div>
    </header>
    <main>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/slip/process">

            <div>
                <div>
                    <div>


                    </div>


                </div>

            </div>
            <table>
                <thead>
                    <tr>
                        <th class="no">Transaksi BERHASIL</th>
                    </tr>
                </thead>

            </table>
            <div id="thanks">Terima kasih sudah berbelanja di toko kami</div>

        </form>
    </main>
    <a href="toko"><button class="btn btn-danger">kembali berbelanja</button></a>
</body>

</html>