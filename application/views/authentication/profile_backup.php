<div class="msg" style="display">
	<?php echo @$this->session->flashdata('msg'); ?>
</div>
<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
			    <img  class="img-responsive img-circle"  src="<?php echo base_url('assets/upload/foto_profil/'.$this->session->userdata('photo')); ?>" alt="User profile picture">

				<h3 class="profile-username text-center"><?php echo $this->session->userdata('nama')?></h3>

				<ul class="list-group list-group-unbordered">
					<li class="list-group-item" style="text-align:center">
						<b>Email </b><br><a><?php echo $this->session->userdata('email')?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Tanggal Daftar</b><br><a><?php echo $this->session->userdata('tgl_daftar')?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Terakhir Dilihat</b><br><a><?php echo $this->session->userdata('lastlogin'); ?></a>
					</li>
					</ul>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#settings" data-toggle="tab">Ubah Identitas</a></li>
				<li><a href="#password" data-toggle="tab">Ubah Password</a></li>
<!-- 				<li><a href="#kata" data-toggle="tab">Kata dari saya</a></li>
				<li><a href="#Artikel" data-toggle="tab">Artikel dari saya</a></li> -->
				
			</ul>
			<div class="tab-content">
				<div class="active tab-pane" id="settings">
					<form class="form-horizontal" action="<?php echo base_url('auth/updateProfile') ?>" method="POST" enctype="multipart/form-data">
						<hr><div class="form-group">
							<label class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Nama Depan" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $this->session->userdata('email'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Telp</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" placeholder="Telp" name="no_hp" value="<?php echo $this->session->userdata('no_hp'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="alamat sesuai ktp" name="alamat" value="<?php echo $this->session->userdata('alamat'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Sosial Media</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?php echo $this->session->userdata('facebook'); ?>">
							</div>
							<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Instagram" name="instagram" value="<?php echo $this->session->userdata('instagram'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" placeholder="Foto" name="photo">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Simpan</button>
							</div>
						</div><hr>
						<div class="form-group">
							<div class="col-sm-12" >
							<p style="text-align:center;"><b>foto KTP</b></p><br><img style="display: block; margin: auto;max-height:300px;max-width:90%" class="img-responsive"  src="<?php echo base_url('assets/upload/foto_ktp/'.$this->session->userdata('foto_ktp')); ?>" alt="ktp">
							</div>
							
						</div>
					</form>
					

				
				</div>
				<div class="tab-pane" id="password">
					<form class="form-horizontal" action="<?php echo base_url('auth/updatePassword') ?>" method="POST">
						<div class="form-group">
							<label for="passLama" class="col-sm-2 control-label">Password Lama</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" placeholder="Password Lama" name="passLama">
							</div>
						</div>
						<div class="form-group">
							<label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
							</div>
						</div>
						<div class="form-group">
							<label for="passKonf" class="col-sm-2 control-label">Konfirmasi Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Simpan</button>
							</div>
						</div>
					</form>
				</div>
				
				<div class="tab-pane" id="kata">
				<div class="table-responsive">
				<table id="table_id" class="display">
       <thead>
         <tr>
          <th>Tanggal Pengajuan</th>
          <th>Kata Using</th>
          <th>Kata Indonesia</th>
          <th>Jenis Kata</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody> 
        <?php 
        $no = 1;
        foreach($kata as $value){
          ?>
          <tr role="row" class="odd">
            <td class="sorting_1"><?php echo tgl($value->tanggal_input);?></td>
            <td class="sorting_2"><?php echo $value->kata_using; ?></td>
            <td class="sorting_2"><?php echo $value->kata_indonesia; ?></td>
            <td class="sorting_2"><?php echo $value->jenis_kata; ?></td>                                        
            <td class="sorting_3">
			<?php if($value->publik!=0){echo'Dipublikasikan';} else {echo'Belum dipublikasikan';}
			?></td>
			<?php }?>
            </tr>
		</tbody>
        </table></div>
				</div>
				<div class="tab-pane" id="Artikel">
				<div>
				<ol>
				<?php
                        foreach($artikel as $p){
                            ?>
				<li> <?php echo $p->judul.'. diajukan pada tanggal '.tgl($p->tanggal).'. <i>Status </i>';
				 if($p->konfirm2!=0){echo'<i><b> Dipublikasikan pada '.tgl($p->tgl_konfirm2).'</b></i>';} else {echo' <i><b>Belum dipublikasikan</b></i>';}?>
				</li>
						<?php }?>
				</ol>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
