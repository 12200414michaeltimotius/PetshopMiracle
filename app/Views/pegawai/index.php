<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-1">
        <div class="card">
            <div class="card-header">
                <h3>Biodata Pegawai Petshop Miracle</h3>
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <a href="<?= base_url('/pegawai/create'); ?>" class="btn btn-primary">Tambah Pegawai</a>
                <hr />
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($pegawai as $row) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama; ?></td>
                        <td><?= $row->jenis_kelamin; ?></td>
                        <td><?= $row->no_telp; ?></td>
                        <td><?= $row->email; ?></td>
                        <td><?= $row->alamat; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("pegawai/edit/$row->id_pegawai"); ?>"
                                class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("pegawai/delete/$row->id_pegawai") ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
</div>
<?= $this->endSection('content'); ?>