<style>
    p {
        margin:0 0 0 0;
    }
</style>
<section class="about-lists">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-9 col-md-12" style="padding-right: 30px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="fade-up">
                        <h3><?=$artikel->judul?></h3>
                        <div class="tanggal">
                            <span class="badge badge-dark"><?=ucwords($artikel->kategori_artikel)?></span>
                            <i class="icofont-ui-calendar"></i> <?=tgl($artikel->tanggal)?>
                        </div>
                        <hr>
                        <div>
                            <?php if(!empty($artikel->gambar)){?>
                                <img src="<?php echo base_url('assets/upload/foto_artikel/'.$artikel->gambar) ?>" id="gambar-artikel" class="img-fluid rounded" style="max-height:400px;max-width:90%;display: block; margin: auto;">
                            <?php }else {
                                echo '<img src="'.base_url('assets/upload/images/'.$site['icon']).'"  style="max-height:100px;max-width:90%;display: block; margin: auto;">';
                            } ?>
                            <div class="text-center">
                                <div style="padding-top:5px;">
                                    <a href="https://www.facebook.com/sharer.php?u=https://<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan artikel ke Facebook"><i class="icofont-facebook"></i></a>
                                    <a href="whatsapp://send?text=<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan artikel ke WhatsApp"><i class="icofont-whatsapp"></i></a>
                                    <a href="https://twitter.com/share?url=https://<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan artikel ke Twitter"><i class="icofont-twitter"></i></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan artikel ke Linkedin"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <br>
                            <?=$artikel->teks?>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="col-lg-3 col-md-12 ">
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="fade-up">
                    <span class="section-bg papan btn" style="width: 100%;"><div class="text-left">Berita Terbaru</div></span>
                    <ul>
                    <?php foreach ($semua_artikel as $key => $v) { 
                        if($v->id_artikel!=$artikel->id_artikel){?>
                        <li><a href="<?=base_url()?>artikel/berita/<?=$v->slug;?>"><i class="bx bx-chevron-right"></i><?=$v->judul ?></a></li>
                        <?php }
                    } ?>
                    </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="fade-up">
                    <span class="section-bg papan btn" style="width: 100%;margin-top: 25px;"><div class="text-left">Papan Pengumuman</div></span>
                    <ul>
                    <?php foreach ($pengumuman as $key => $v) {
                        if($v->id_artikel!=$artikel->id_artikel){?>
                        <li><a href="<?=base_url()?>artikel/papan_pengumuman/<?=$v->slug;?>"><i class="bx bx-chevron-right"></i><?=$v->judul ?></a></li>
                        <?php }
                    } ?>
                    </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="fade-up">
                    <span class="section-bg papan btn" style="width: 100%;margin-top: 25px;"><div class="text-left">Lowongan Kerja</div></span>
                    <ul>
                    <?php foreach ($loker as $key => $v) {
                        if($v->id_artikel!=$artikel->id_artikel){?>
                        <li><a href="<?=base_url()?>artikel/lowongan_kerja/<?=$v->slug;?>"><i class="bx bx-chevron-right"></i><?=$v->judul ?></a></li>
                    <?php } 
                    } ?>
                    </ul>
                    </div>
                </div>
                <div class="row">
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
    </div>
    <hr>
</section><!-- End About Lists Section -->