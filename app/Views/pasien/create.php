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
                                <h3>Tambah Data Pasien</h3>
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
                                <form method="post" action="<?= base_url('pasien/data') ?>">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="nama">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= old('nik'); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_telp">No Telp</label>
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= old('email') ?>" />
                                    </div>


                                    <div class="form-group">
                                        <label for="wilayah">wilayah</label>
                                        <select class="form-control" name="wilayah" id="wilayah" value="<?= old('wilayah'); ?>">
                                            <option value="Ciputat">Ciputat</option>
                                            <option value="Ciputat Timur">Ciputat Timur</option>
                                            <option value="Pamulang">Pamulang</option>
                                            <option value="Pondok Aren">Pondok Aren</option>
                                            <option value="Serpong">Serpong</option>
                                            <option value="Serpong Utara">Serpong Utara</option>
                                            <option value="Setu">Setu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat"><?= old('alamat') ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status" value="<?= old('status'); ?>">
                                            <option value="Karantina">Karantina</option>
                                            <option value="Meninggal">Meninggal</option>
                                            <option value="Sembuh">Sembuh</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Simpan" class="btn btn-info" />
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