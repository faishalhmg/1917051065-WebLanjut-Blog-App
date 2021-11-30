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
                                <h3>Data Wilayah</h3>
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
                                <hr />
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Wilayah</th>
                                        <th>Jumlah Kasus</th>
                                    </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Ciputat</td>
                                            <td><?=$Ciputat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ciputat Timur</td>
                                            <td><?=$CiputatTimur; ?></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Pamulang</td>
                                            <td><?=$Pamulang; ?></td>
                                        </tr><tr>
                                            <td>4</td>
                                            <td>Pondok Aren</td>
                                            <td><?=$PondokAren; ?></td>
                                        </tr><tr>
                                            <td>5</td>
                                            <td>Serpong</td>
                                            <td><?=$Serpong; ?></td>
                                        </tr><tr>
                                            <td>6</td>
                                            <td>Serpong Utara</td>
                                            <td><?=$SerpongUtara; ?></td>
                                        </tr><tr>
                                            <td>7</td>
                                            <td>Setu</td>
                                            <td><?=$Setu; ?></td>
                                        </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>