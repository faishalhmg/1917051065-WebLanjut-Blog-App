<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/navbar') ?>
<div class="flash-data" data-flashdata="<?= session()->get('inputmsg') ?>"></div>
<br>
<br>
<br>
<br>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3>Data Pasien</h3>
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
                                <a href="<?= base_url('/pasien/create'); ?>" class="btn btn-primary">Tambah</a>
                                <hr />
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        <th>Wilayah</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    foreach ($pasien as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nik; ?></td>
                                            <td><?= $row->nama; ?></td>
                                            <td><?= $row->jenis_kelamin; ?></td>
                                            <td><?= $row->no_telp; ?></td>
                                            <td><?= $row->email; ?></td>
                                            <td><?= $row->wilayah; ?></td>
                                            <td><?= $row->alamat; ?></td>
                                            <td><?= $row->status; ?></td>
                                            <td>
                                                <a title="Edit" href="<?= base_url("pasien/edit/$row->id_pasien"); ?>" class="btn btn-info">Edit</a>
                                                <a title="Delete" href="<?= base_url("pasien/delete/$row->id_pasien") ?>" class="btn btn-danger btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layouts/footer') ?>