
<h2 class="text-center artikel0" style="padding-top:20px;padding-bottom:-10px;margin-top:22px;">Semua Artikel</h2>
<div style="background-color:#ffffff;">
    <hr>
    <div class="container" style="padding-top:20px;background-color:rgba(255,245,245,0);">
        <div class="row">
            <div class="col-12 col-sm-7 col-md-8 col-lg-10 mr-md-auto">
                <?php 
                $no = $this->uri->segment('3') + 1;
                foreach($artikel as $p){ 
                    ?>
                    <div class="row" id="artikel1" style="margin-bottom:20px;">
                      <a  href="<?php echo site_url('artikel/detail/'.$p->slug); ?>">
                        <div class="col-auto halawal"><img class="img-fluid gambar-artikel " src="<?php echo base_url('assets/upload/foto_artikel/'.$p->gambar); ?>" style="padding:15px;"></div>
                        <div class="col-lg-offset-5 col-md-offset-3 col-lg-7 col-md-9 ">
                            <div class="card" style="background-color:rgba(255,255,255,0);">
                                <div class="card-body" style="background-color:rgba(255,255,255,0);padding-top:5px;">
                                 <h4 class="card-title" style="color:rgb(159,35,35);"><?php echo $p->judul; ?></h4>
                             </a>
                             <h6 class="text-muted card-subtitle mb-2 tanggalUpload"><?php echo tgl($p->tgl_konfirm2); ?> <i>(<?php echo $p->kategori_artikel; ?>)</i></h6>
                             <h6 class="text-muted card-subtitle mb-2 tanggalUpload">- <b><?php echo $p->nama?></b></h6>
                             <p class="card-text"><?php echo substr($p->teks,0,250) ?>...</p>
                         </div>
                     </div>
                 </div>
             </div>
             <hr>
         <?php } ?>
         <div class="row" id="lihatsemua">
            <div class="col">
                <!--Tampilkan pagination-->
                <?=$pagination?>
            </div>
        </div>
    </div>
    <div class="col-11 col-sm-5 col-md-4 col-lg-2 mx-auto">
        <div class="row">
            <div class="col-auto">
                <div class="row" id="fiksi" style="margin-bottom: 30px; margin-top: 30px; border: 1px solid; border-color: #9f2323; padding: 10px; padding-bottom: 15px; border-radius: 8px;">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-center" style="color: #9f2323;">Kategori</h6>
                            </div>
                        </div>

                        <?php foreach($tampilkategori as $t) { ?>
                            <div class="row">
                                <div class="col-lg-12 mt-2">
                                    <a class="btn btn-primary" role="button" href="<?php echo site_url('artikel/kategori/').$t->slug_k ?>"><?php echo $t->kategori_artikel ?> (<?php echo $t->total ?>)</a><br>
                                </div>
                            </div>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- </div> -->
<!-- </div> -->

<div id='Back-to-top'>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>



