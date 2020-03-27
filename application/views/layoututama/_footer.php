 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info text-center">
            <div class="row text-center">
              <a href="index.html"><img src="<?php echo base_url("assets/upload/images/$logo"); ?>" alt="" style="width: 70%;" class="img-fluid"></a>
            </div>
            <br>
            <div class="text-center">
                Fakultas Ekonomi Untag Banyuwangi.
            </div>
            <br>
            <div class="row">
              <div class="col-2 text-right"><i class="icofont-google-map"></i></div>
              <div class="col-10 p text-left"><?= $alamat ?></div>
            </div>
            <div class="row">
              <div class="col-2 text-right"><i class="icofont-phone"></i></div>
              <div class="col-10 p text-left"><?= $no_telp ?></div>
            </div>
            <div class="row">
              <div class="col-2 text-right"><a href="mailto:fe@untag-banyuwangi.ac.id"><i class="icofont-ui-email"></i></a></div>
              <div class="col-10 p text-left"><a href="mailto:<?= $email ?>"><?= $email ?></a></div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links text-center">
            <h4>Facebook Kami</h4>
            <hr>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FUntag1945Banyuwangi%2F&tabs=timeline&width=250&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>

          <div class="col-lg-3 col-md-6 footer-links text-center">
            <h4>Untag Banyuwangi Direktori</h4>
            <hr>
            <ul>
            <?php foreach ($direktori as $key => $v) { ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=$v->link?>"><?=$v->judul ?></a></li>
            <?php } ?>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter text-center">
            <h4>Instagram</h4>
            <hr>
            <iframe src="https://www.instagram.com/p/B9-ZoAKpls8/embed" width="250" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright row">
        <div class="col-9" style="padding-top: 5px;color:#fff;">
          Copyright &copy; <?=date('Y')?> <b>Fakultas Ekonomi Untag Banyuwangi</b>. All Rights Reserved
        </div>
        <div class="col-3">
          <span class="float-right row">
            <div class="col-lg-4 col-md-12">
              <a href="">Kebijakan Privasi</a>
            </div>
            <div class="col-lg-4 col-md-12">
              <a href="">Peta Situs</a>
            </div>
            <div class="col-lg-4 col-md-12">
              <a href="">Hubungi Kami</a>
            </div>
          </span>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

