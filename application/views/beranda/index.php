
  <style>
    .cover-artikel {
      background-size: contain;
      width: 150px;
      height: 100px
    }

    .myDiv {
    height : 200px;
    width : 250px;
    background-repeat: no-repeat;
    background-size: 100%;
}
  </style>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <?php foreach ($carousel as $key => $v) { ?>
            <div class="carousel-item <?php if($key==0) echo 'active'; ?>" style="background-image: url('<?php echo base_url('assets');?>/upload/images/<?=$v->foto?>');">
            <div class="carousel-container">
              <div class="carousel-content container text-center">
                <h2 class="animated fadeInDown"><?=$v->h1?></h2>
                <h3 class="animated fadeInUp text-center"><?=$v->h2?></h3>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

    <section id="selamat-datang" class="container">
      <div class="row">
        <div class="col-lg-3">
          <span class="btn-dark btn-sm">Selamat Datang</span>
          <a href="#heroCarousel" role="button" data-slide="prev" class="kiri">
            <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          </a>
          <a href="#heroCarousel" role="button" data-slide="next" class="kanan">
            <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          </a>
        </div>
        <div class="col-lg-9">
          <span class="caption"><?=$teks?></span>
        </div>        
      </div>
      <hr>
    </section>
  
    <!-- Sambutan -->
    <section id="about" class="about">
      <div class="container section-bg">

        <div class="row no-gutters">
          <div class="col-lg-2 col-md-6 col-sm-6  rektor-box" data-aos="fade">
            <img  src="<?php echo base_url('assets/upload/images/'.$foto_sambutan);?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-10 col-md-6 col-sm-6  d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2 data-aos="fade-right"><?=$sambutan ?></h2>
              <p data-aos="fade-down"><?=$caption_1?></p>
              <br>
              <p data-aos="fade-down"><?=$caption_2?></p>
              <!-- <div >
              </div> -->
              <img class="float-right" style="max-height: 35px;margin-bottom: -10px;" src="<?php echo base_url("assets/upload/images/$icon"); ?>" alt="">
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End Sambutan -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-9 col-md-12" style="padding-right: 30px;">
          <div class="row">
            <div class="col-lg-12 col-md-12" data-aos="fade-up">
              <h4>Berita Terbaru</h4>
              <hr>
            </div>

            <?php foreach ($artikel as $key => $v) { ?>
              <div class="col-lg-4 col-md-6 " data-aos="fade-up" data-aos-delay="<?=$key?>00">
                <a href="<?=base_url()?>artikel/berita/<?=$v->slug;?>">
                  <div class="myDiv" style="background-image: url('<?php if($v->gambar!=null) {echo base_url('assets/upload/foto_artikel/'.$v->gambar);}else{echo base_url('assets/upload/images/'.$favicon);}?>');">
                  </div>
                </a>
                <div class="tanggal"><i class="icofont-ui-calendar"></i> <?=tgl($v->tanggal)?></div>
                <h4><?=$v->judul?></h4>
                <?=substr($v->teks,0,72) ?> <a href="<?=base_url()?>artikel/berita/<?=$v->slug;?>">Baca..</a>
              </div>
            <?php } ?>
          </div>

          </div>
          <div class="col-lg-3 col-md-12 ">
            <div class="row">
              <div class="col-lg-12 col-md-12" data-aos="fade-up">
                <span class="section-bg papan btn" style="width: 100%;"><div class="text-left">Papan Pengumuman</div></span>
                <ul>
                <?php foreach ($pengumuman as $key => $v) { ?>
                  <li><a href="<?=base_url()?>artikel/papan_pengumuman/<?=$v->slug;?>"><i class="bx bx-chevron-right"></i><?=$v->judul ?></a></li>
                <?php } ?>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12" data-aos="fade-up">
                <span class="section-bg papan btn" style="width: 100%;margin-top: 25px;"><div class="text-left">Lowongan Kerja</div></span>
                <ul>
                <?php foreach ($loker as $key => $v) { ?>
                  <li><a href="<?=base_url()?>artikel/lowongan_kerja/<?=$v->slug;?>"><i class="bx bx-chevron-right"></i><?=$v->judul ?></a></li>
                <?php } ?>
                </ul>
              </div>
            </div>
            <div class="row download">
              <div class="col-lg-12 col-md-12" data-aos="fade-up">
                <span class="section-bg papan btn" style="width: 100%;margin-top: 25px;"><div class="text-left">Download Area</div></span>
                <ul>
                  <?php foreach ($download as $key => $v) { ?>
                    <li><i class="icofont-attachment"></i><a href="<?=base_url('assets')?>/upload/download_area/<?=$v->file ?>"> <?=$v->judul?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
        </div>
      </div>
    </section><!-- End About Lists Section -->
    <section>
      <div class="brands">
        <div class="container">
          <!-- <div class="row"> -->
            <!-- <div class="col-12"> -->
              <h4>Kerjasama / Sertifikat</h4>
              <div class="brands_nav brands_next float-right"><i class="icofont-long-arrow-right"></i></div>
              <div class="brands_nav brands_prev float-right"><i class="icofont-long-arrow-left"></i></div>
            <!-- </div>
          </div> -->
          <hr>
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">
                        <div class="owl-carousel owl-theme brands_slider">
                        <?php foreach ($kerja_sama as $key => $v) { ?>
                          <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo base_url('assets').'/upload/foto_kerja_sama/'.$v->foto;?>" alt="<?=$v->deskripsi?>"></div>
                          </div>
                        <?php } ?>
                          </div> <!-- Brands Slider Navigation -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Daftar-->
    <section id="faq" class="faq">
      <div class="container">

        <div class="row  d-flex align-items-stretch">
          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Pendaftaran</h4>
            <p>
              Ingin bergabung dengan kami, klik disini untuk menjadi mahasiswa baru !
            </p>
          </div>
          <div class="col-lg-6 faq-item text-center" data-aos="fade-right" data-aos-delay="100">
            <a class="btn btn-sm" href="
            <?php 
              if($link_pendaftaran==''){}
              elseif(substr($link_pendaftaran,0,4)=='http'){echo $link_pendaftaran;}
              else{ echo 'http://'.$link_pendaftaran;}
            ?>">Daftar</a>
          </div>
      </div>
    </section>
    <!-- End Daftar -->

    