<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="nav-item <?php if($this->uri->segment(2) == 'home') { echo "active"; } ?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('admin/home'); ?>">
          <i class="fa fa-fw fa-home"></i>
          <span class="nav-link-text">Dashboard</span>
          </a>
      </li>
      <hr>
      <li class="nav-item <?php if($this->uri->segment(2) == 'artikel') { echo "active"; } ?>" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="<?php echo base_url('admin/artikel'); ?>">
          <i class="fa fa-files-o"></i>
          <span class="nav-link-text">Artikel</span>
          </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == 'carousel') { echo "active"; } ?>" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="<?php echo base_url('admin/carousel'); ?>">
          <i class="fa fa-image "></i>
          <span class="nav-link-text">Carousel</span>
          </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == 'direktori') { echo "active"; } ?>" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="<?php echo base_url('admin/direktori'); ?>">
          <i class="fa fa-external-link"></i>
          <span class="nav-link-text">Direktori Link</span>
          </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == 'download_area') { echo "active"; } ?>" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="<?php echo base_url('admin/download_area'); ?>">
          <i class="fa fa-cloud-download"></i>
          <span class="nav-link-text">Download Area</span>
          </a>
      </li>
      <li class="nav-item <?php if($this->uri->segment(2) == 'kerja_sama') { echo "active"; } ?>" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="<?php echo base_url('admin/kerja_sama'); ?>">
          <i class="fa fa-users"></i>
          <span class="nav-link-text">Kerja Sama/Sertifikat</span>
          </a>
      </li>
      <li class="treeview <?php if($this->uri->segment(2) == 'menu') { echo "active"; } ?>">
        <a href="#"><i class="fa fa-th-list"></i> <span>Menu</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(3) == 'profil') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/menu/profil')?>"><i class="fa  fa-angle-right"></i> Profil</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'pendidikan') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/menu/pendidikan')?>"><i class="fa  fa-angle-right"></i> Pendidikan</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'kemahasiswaan') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/menu/kemahasiswaan')?>"><i class="fa  fa-angle-right"></i> Kemahasiswaan</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'penelitian') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/menu/penelitian')?>"><i class="fa  fa-angle-right"></i> Penelitian</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'layanan') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/menu/layanan')?>"><i class="fa  fa-angle-right"></i> Layanan</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'fasilitas') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/menu/fasilitas')?>"><i class="fa  fa-angle-right"></i> Fasilitas</a>
          </li>
        </ul>
      </li>
      <li class="treeview <?php if($this->uri->segment(2) == 'profil') { echo "active"; } ?>">
        <a href="#"><i class="fa fa-gears"></i> <span>Web Utama</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(3) == 'profil_web') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/profil/profil_web')?>"><i class="fa  fa-angle-right"></i>Profil Web</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'logo_fakultas') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/profil/logo_fakultas')?>"><i class="fa  fa-angle-right"></i>Logo Fakultas</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'logo_universitas') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/profil/logo_universitas')?>"><i class="fa  fa-angle-right"></i>Logo Universitas</a>
          </li>
          <li class="<?php if($this->uri->segment(3) == 'halaman_awal') { echo "active"; } ?>">
            <a href="<?php echo site_url('admin/profil/halaman_awal')?>"><i class="fa  fa-angle-right"></i>Ucapan</a>
          </li>
        </ul>
      </li>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
