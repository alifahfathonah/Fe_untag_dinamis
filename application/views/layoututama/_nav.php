<!-- <nav class="navbar navbar-light navbar-expand-md ">
    <div class="container"><a class="navbar-brand" href="<?php echo base_url('beranda');?>"><img src="<?php echo base_url("assets/upload/images/$icon"); ?>"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url('beranda');?>">Beranda</a></li>
                <li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link dropdown-toggle">Kamus  </a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="<?php echo base_url('kamus/kamus_bahasa_indonesia_bahasa_using');?>" class="dropdown-item">Kamus Bahasa Indonesia-Bahasa Using</a><a role="presentation" href="<?php echo base_url('kamus/kamus_bahasa_using_bahasa_indonesia');?>" class="dropdown-item">Kamus Bahasa Using-Bahasa Indonesia</a></div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url('beranda/tentang_kami');?>">Tentang Kami</a></li>
                <li role="presentation"  id="login-icon" style=""><a href="<?php echo base_url('auth/login');?>" ><i class="fa fa-user"></i></a></li>
            </ul>
    </div>
    </div>
</nav> -->

<div class="container">

<div class="logo float-left">
  <a href="<?php echo base_url('beranda');?>"><img src="<?php echo base_url("assets/upload/images/$icon"); ?>" alt="" class="img-fluid"></a>
</div>

<nav class="nav-menu float-right d-none d-lg-block">
  <ul>
    <li class="<?php if(in_array($this->uri->segment(1),['beranda',''])) { echo "active"; } ?>"><a href="<?php echo base_url('beranda');?>">Home</a></li>
    <li class="drop-down <?php if($this->uri->segment(1) == 'profil') { echo "active"; } ?>"><a href="">Profil</a>
      <ul>
        <?php foreach ($profil as $key => $v) { ?>
          <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>"><?=$v->nama_sub_menu ?></a></li>
        <?php } ?>
      </ul>
    </li>
    <li class="drop-down <?php if($this->uri->segment(1) == 'pendidikan') { echo "active"; } ?>"><a href="">Pendidikan</a>
      <ul>
        <?php foreach ($pendidikan as $key => $v) { ?>
          <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>"><?=$v->nama_sub_menu ?></a></li>
        <?php } ?>
      </ul>
    </li>
    <li class="drop-down <?php if($this->uri->segment(1) == 'kemahasiswaan') { echo "active"; } ?>"><a href="">Kemahasiswaan</a>
      <ul>
        <?php foreach ($kemahasiswaan as $key => $v) { ?>
          <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>"><?=$v->nama_sub_menu ?></a></li>
        <?php } ?>
      </ul>
    </li>
    <li class="drop-down <?php if($this->uri->segment(1) == 'penelitian') { echo "active"; } ?>"><a href="">Penelitian</a>
      <ul>
        <?php foreach ($penelitian as $key => $v) { ?>
          <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>"><?=$v->nama_sub_menu ?></a></li>
        <?php } ?>
      </ul>
    </li>
    <li class="drop-down  <?php if($this->uri->segment(1) == 'layanan') { echo "active"; } ?>"><a href="">Layanan</a>
      <ul>
        <?php foreach ($layanan as $key => $v) { ?>
          <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>"><?=$v->nama_sub_menu ?></a></li>
        <?php } ?>
      </ul>
    </li>
    <li class="drop-down <?php if($this->uri->segment(1) == 'fasilitas') { echo "active"; } ?>"><a href="">Fasilitas</a>
      <ul>
        <?php foreach ($fasilitas as $key => $v) { ?>
          <li><a href="<?=base_url()?><?=$v->slug_menu.'/'.$v->slug_sub_menu;?>"><?=$v->nama_sub_menu ?></a></li>
        <?php } ?>
      </ul>
    </li>
  </ul>
</nav>
</div>
