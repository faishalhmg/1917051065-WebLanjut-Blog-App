
<br>
<br>

<div class="col">
    <div class="card widget-card-1">
        <div class="card-block-small">
            
        
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if ($pasien <100 && $pasien>0) : ?>
                <div class="alert alert-warning" role="alert">
                 Jumlah Pasien teridentifikasi <?= $pasien;?>
            </div> 
            <?php elseif ($pasien >100) : ?>
                <div class="alert alert-danger" role="alert">
                 Jumlah Pasien teridentifikasi <?= $pasien;?>
            </div> 
            <?php else : ?>
                <div class="alert alert-success" role="alert">
                 Jumlah Pasien teridentifikasi <?= $pasien;?>
            </div> 
            <?php endif; ?>
             
        </div>
        </div>
    </div>
</div>
