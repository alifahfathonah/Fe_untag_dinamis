<style>
    p {
        margin:0 0 0 0;
    }
</style>
<section class="about-lists">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-12 " data-aos="fade-right">
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="fade-up">
                    <span class="section-bg papan btn" style="width: 100%;margin-top: 25px;"><div class="text-left"><?=ucwords($konten->nama_menu)?></div></span>
                    <ul>
                    <?php foreach ($semua_konten as $key => $v) { ?>
                        <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>">
                        <i class="bx bx-chevron-right"></i><?=$v->nama_sub_menu ?></a></li>
                        <?php
                    } ?>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12" style="padding-right: 30px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12" data-aos="fade-up">
                        <h3 class="text-center"><?=$konten->nama_sub_menu?></h3>
                        <hr>
                        <div>
                            <?php if(!empty($konten->gambar)){?>
                                <img src="<?php echo base_url('assets/upload/foto_artikel/'.$konten->gambar) ?>" id="gambar-konten" class="img-fluid rounded" style="max-height:400px;max-width:90%;display: block; margin: auto;">
                            <?php }else {
                                echo '<img src="'.base_url('assets/upload/images/'.$site['icon']).'"  style="max-height:100px;max-width:90%;display: block; margin: auto;">';
                            } ?>
                            <div class="text-center">
                                <div style="padding-top:5px;">
                                    <a href="https://www.facebook.com/sharer.php?u=https://<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan konten ke Facebook"><i class="icofont-facebook"></i></a>
                                    <a href="whatsapp://send?text=<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan konten ke WhatsApp"><i class="icofont-whatsapp"></i></a>
                                    <a href="https://twitter.com/share?url=https://<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan konten ke Twitter"><i class="icofont-twitter"></i></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_SERVER['REQUEST_URI']; ?>" class="btn section-bg" title="Bagikan konten ke Linkedin"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <br>
                            <?=$konten->teks?>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <hr>
</section><!-- End About Lists Section -->