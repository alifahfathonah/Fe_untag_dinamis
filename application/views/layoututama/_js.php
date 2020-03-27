<!-- JavaScript -->
<script src="<?php echo base_url('assets');?>/vendor/bootstrap/js/bootstrap-fileupload.min.js"></script>

 <!-- Vendor JS Files -->
 <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets');?>/vendor/beranda/vendor/aos/aos.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets');?>/vendor/beranda/js/main.js"></script>
  <script>
    $(document).ready(function(){

      if($('.brands_slider').length)
      {
      var brandsSlider = $('.brands_slider');

      brandsSlider.owlCarousel(
      {
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        nav:false,
        dots:false,
        autoWidth:true,
        items:8,
        margin:42
      });

      if($('.brands_prev').length)
      {
        var prev = $('.brands_prev');
        prev.on('click', function()
        {
          brandsSlider.trigger('prev.owl.carousel');
        });
      }

      if($('.brands_next').length)
      {
        var next = $('.brands_next');
        next.on('click', function()
        {
          brandsSlider.trigger('next.owl.carousel');
        });
        }
      }


    });
  </script>







