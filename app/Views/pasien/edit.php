<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/navbar') ?>
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
                                <h3>Update Data Pasien</h3>
                            </div>
                            <div class="card-body">
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <h4>Periksa Entrian Form</h4>
                                        </hr />
                                        <?php echo session()->getFlashdata('error'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="<?= base_url('pasien/update/' . $pasien->id_pasien) ?>">
                                    <?= csrf_field(); ?>
                                    <div class="form-group row">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $pasien->nik; ?>">
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pasien->nama; ?>">
                                    </div>

                                    <div class="form-group row">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                            <option value="pria" <?= ($pasien->jenis_kelamin == "pria" ? "selected" : ""); ?>>Pria</option>
                                            <option value="wanita" <?= ($pasien->jenis_kelamin == "wanita" ? "selected" : ""); ?>>Wanita</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_telp">No Telp</label>
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $pasien->no_telp; ?>" />
                                    </div>

                                    <div class="form-group row">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $pasien->email; ?>" />
                                    </div>

                                    <div class="form-group row">
                                        <label for="wilayah">Wilayah</label>
                                        <select class="form-control" name="wilayah" id="wilayah">
                                            <option value="Ciputat" <?= ($pasien->wilayah == "Ciputat" ? "selected" : ""); ?>>Ciputat</option>
                                            <option value="Ciputat Timur" <?= ($pasien->wilayah == "Ciputat Timur" ? "selected" : ""); ?>>Ciputat Timur</option>
                                            <option value="Pamulang" <?= ($pasien->wilayah == "Pamulang" ? "selected" : ""); ?>>Pamulang</option>
                                            <option value="Pondok Aren" <?= ($pasien->wilayah == "Pondok Aren" ? "selected" : ""); ?>>Pondok Aren</option>
                                            <option value="Serpong" <?= ($pasien->wilayah == "Serpong" ? "selected" : ""); ?>>Serpong</option>
                                            <option value="Serpong Utara" <?= ($pasien->wilayah == "Serpong Utara" ? "selected" : ""); ?>>Serpong Utara</option>
                                            <option value="Setu" <?= ($pasien->wilayah == "Setu" ? "selected" : ""); ?>>Setu</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat"><?= $pasien->alamat; ?></textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status">status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="Karantina" <?= ($pasien->status == "Karantina" ? "selected" : ""); ?>>Karantina</option>
                                            <option value="Meninggal" <?= ($pasien->status == "Meninggal" ? "selected" : ""); ?>>Meninggal</option>
                                            <option value="Sembuh" <?= ($pasien->status == "Sembuh" ? "selected" : ""); ?>>Sembuh</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-info" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layouts/footer') ?>