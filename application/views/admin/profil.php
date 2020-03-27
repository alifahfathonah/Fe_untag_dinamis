
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Konfigurasi</li>
    <li class="breadcrumb-item active">Profil Web</li>
</ol>
<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Profil Web</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="card-body">
                    <?php echo form_open('admin/profil/edit/'.$profil->id_konfigurasi,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="id">Judul Atas Website</label>
                            <input type="text" placeholder="Nama profil" name="nama_website" value="<?php echo ($this->input->post('nama_website') ? $this->input->post('nama_website') : $profil->nama_website); ?>" class="form-control" required>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Deskripsi</label>
                            <textarea class='ckeditor' id='ckeditor' name='teks'><?php echo ($this->input->post('teks') ? $this->input->post('teks') : $profil->teks); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class='control-label'>Nav Tab icon</label>
                        <?php if($profil->favicon != ""){ ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
                                    <div class="hapus-gambar">
                                        <a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="<?php echo base_url('admin/profil/hapusfavicon/'.$profil->id_konfigurasi) ?>" onclick="return hapusfavicon()">
                                            <i class="icon-remove icon-white"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo base_url('assets/upload/images/'.$profil->favicon) ?>">
                                </div>  
                                <a href="<?php echo site_url('admin/profil/hapusfavicon/'.$profil->id_konfigurasi) ?>" class="btn btn-danger">Hapus Gambar</a>                                    
                            </div>
                        <?php } else { ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="<?php echo base_url(); ?>assets/admin/img/400x300.jpg" alt="" class="img-thumbnail"/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
                                <div style="margin-left: -10px">
                                    <span class="btn btn-file">
                                        <span class="fileupload-new btn btn-primary">Pilih Gambar</span>
                                        <span class="fileupload-exists btn btn-primary">Ganti</span>
                                        <input type="file" name="favicon">
                                    </span>
                                    <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <div>
                            <label for="id">Telepon</label>
                            <input type="text" placeholder="Telepon" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $profil->no_telp); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="id">Alamat</label>
                            <input type="text" placeholder="alamat" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $profil->alamat); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="id">Email</label>
                            <input type="text" placeholder="Email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $profil->email); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="id">Facebook</label>
                            <input type="text" placeholder="Facebook" name="facebook" value="<?php echo ($this->input->post('facebook') ? $this->input->post('facebook') : $profil->facebook); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="id">Instagram</label>
                            <input type="text" placeholder="Instagram" name="instagram" value="<?php echo ($this->input->post('instagram') ? $this->input->post('instagram') : $profil->instagram); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="id">Jam Buka</label>
                            <input type="text" placeholder="Jam buka" name="jam_buka" value="<?php echo ($this->input->post('jam_buka') ? $this->input->post('jam_buka') : $profil->jam_buka); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="id">Link Pendaftaran</label>
                            <input type="text" placeholder="Link Pendaftaran" name="link_pendaftaran" value="<?php echo ($this->input->post('link_pendaftaran') ? $this->input->post('link_pendaftaran') : $profil->link_pendaftaran); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr>
                        <div style="float: right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <!-- <a href="<?php //echo base_url('admin/profil') ?>"  class="btn btn-danger">Kembali</a> -->
                        </div>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
</div>
</div>
</div>





