<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">My Dashboard</li>
</ol>
<!-- Icon Cards-->

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$berita ?></h3>

              <p>Berita Dipublikasikan</p>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$loker ?></h3>
              <p>Lowongan Kerja Dipublikasikan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$pengumuman ?></h3>
              <p>Pengumuman Dipublikasikan</p>
            </div>
            <div class="icon">
              <i class="fa fa-bullhorn"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $download?></h3>

              <p>File di Download Area</p>
            </div>
            <div class="icon">
              <i class="fa fa-cloud-download"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>