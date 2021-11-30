<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/navbar') ?>

<style>
  img {
    width: 800px;
    height: 400px;
  }
</style>


<body>


  <div class="pcoded-content">
    <div class="pcoded-inner-content">
      <div class="main-body">
        <div class="page-wrapper">

          <div class="page-body">
            <div class="col">
              <div class="card widget-card-1">
                <div class="card-block">
                  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="container mt-3">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="text-center">
                            <img src="https://infeksiemerging.kemkes.go.id/storage/posts/July2021/n9Xehjw6aj8AvwOq87fv.png" class="rounded mx-auto d-block" alt="covid1">
                          </div>
                          <div class="carousel-caption d-none d-md-block">

                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="text-center">
                            <img src="https://covid19.kaltimprov.go.id/images/cvectorhead.png" class="rounded mx-auto d-block" alt="covid2">
                          </div>
                          <div class="carousel-caption d-none d-md-block">

                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="text-center">
                            <img src="http://redmac.in/wp-content/uploads/2020/04/people-wearing-medical-mask_52683-35468.jpg" class="rounded mx-auto d-block" alt="covid3">
                          </div>
                          <div class="carousel-caption d-none d-md-block">

                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <!-- card1 start -->
              <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                  <div class="card-block-small">
                    <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                    <span class="text-c-blue f-w-600">Sembuh</span>
                    <h4><?= $sembuh; ?></h4>
                    <div>
                      <span class="f-left m-t-10 text-muted">
                        <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card1 end -->
              <!-- card1 start -->
              <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                  <div class="card-block-small">
                    <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                    <span class="text-c-pink f-w-600">Karantina</span>
                    <h4><?= $karantina; ?></h4>
                    <div>
                      <span class="f-left m-t-10 text-muted">
                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card1 end -->
              <!-- card1 start -->
              <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                  <div class="card-block-small">
                    <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                    <span class="text-c-yellow f-w-600">Meninggal</span>
                    <h4><?= $meninggal; ?></h4>
                    <div>
                      <span class="f-left m-t-10 text-muted">
                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card1 end -->
              <!-- card1 start -->
              <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                  <div class="card-block-small">
                    <?php if ($pasien <= 50) : ?>
                      <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                    <?php endif; ?>
                    <?php if ($pasien > 50 && $pasien <= 100) : ?>
                      <i class="icofont icofont-warning-alt bg-c-yellow card1-icon"></i>
                    <?php endif; ?>
                    <?php if ($pasien > 100) : ?>
                      <i class="icofont icofont-warning-alt bg-c-red card1-icon"></i>
                    <?php endif; ?>
                    <span class="text-c-green f-w-600">Jumlah Pasien </span>
                    <h4><?= $pasien; ?></h4>
                    <div>
                      <span class="f-left m-t-10 text-muted">
                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Positif Covid19
                      </span>
                    </div>
                  </div>
                  <div>


                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
            <!-- Bar Chart start -->
            <div class="col-md-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5>Bar chart</h5>
                  <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                  <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                </div>
                <div class="card-block">
                  <div id="chart_jenisk"></div>
                </div>
              </div>
            </div>
            <!-- Bar Chart Ends -->
            <!-- Donut chart start -->
            <div class="col-md-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5>Donut chart</h5>
                  <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                  <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                </div>
                <div class="card-block">
                <div id="chart_kondisi"></div>
                </div>
              </div>
            </div>
            <!-- Donut chart Ends -->
            <!-- card1 end -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5>Area chart</h5>
                  <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                  <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                </div>
                <div class="card-block">
                  <div id="bar-example"></div>
                </div>
              </div>
            </div>
            </div>
            <div class="col">
              <div class="card widget-card-1">
                <div class="card-block-small">
                  <a title="Edit" href="<?= base_url("pasien"); ?>" class="btn btn-primary btn-outline-primary btn-block">Tambah Data Pasien</a>
                  <div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div id="styleSelector">

      </div>
    </div>
  </div>
  
  <!-- Plugin js for this page -->
  <script src="assets/js/morris.js/morris.js"></script>
  <script src="assets/pages/chart/morris-custom-chart.js"></script>
  <script>
    Morris.Donut({
  element: 'chart_kondisi',
  data: [
    {label: "Sembuh", value: <?= $sembuh; ?>},
    {label: "Karantina", value: <?= $karantina; ?>},
    {label: "Meninggal", value: <?= $meninggal; ?>}
  ],
  colors: ['#344CB7', '#F90716', '#FF9F55']
}); Morris.Donut({
  element: 'chart_jenisk',
  data: [
    {label: "Laki-Laki", value: <?= $pria; ?>},
    {label: "Perempuan", value: <?= $wanita; ?>},
  ],
  colors: ['#344CB7', '#F90716', '#FF9F55']
});



  </script>
  
<?= $this->include('layouts/footer') ?>