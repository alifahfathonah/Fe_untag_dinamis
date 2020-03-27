<nav class="navbar navbar-static-top" >
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			
			
			<!-- Notifications: style can be found in dropdown.less -->
			<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url('assets/upload/foto_profil/'.$this->session->userdata('photo')); ?>" class="user-image">
					<span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?> </span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?php echo base_url('assets/upload/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle">
						<p>
							<?php echo $this->session->userdata('email'); ?>
							<small>Terakhir keluar, <?php echo $this->session->userdata('lastlogin'); ?></small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo base_url() ?>auth/profile/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
						</div>
					</li>
					
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
