
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Konfigurasi</li>
    <li class="breadcrumb-item active">Halaman Awal</li>
</ol>
<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Halaman Awal</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="card-body">
                    <div class="col-md-12">
                        <img src="<?php  echo site_url('assets/img/contoh.png') ?>" alt="" width="100%">
                        <hr>
                    </div>
                    <?php echo form_open('admin/profil/edit_halaman_awal/'.$profil->id_konfigurasi,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="id">H1</label>
                            <input type="text" placeholder="Sambutan" name="sambutan" value="<?php echo ($this->input->post('sambutan') ? $this->input->post('sambutan') : $profil->sambutan); ?>" class="form-control" required>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Caption 1</label>
                            <textarea class='ckeditor' id='ckeditor' name='caption_1'><?php echo ($this->input->post('caption_1') ? $this->input->post('caption_1') : $profil->caption_1); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class='control-label'>Foto</label>
                        <?php if($profil->foto_sambutan != ""){ ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
                                    <div class="hapus-gambar">
                                        <a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="<?php echo base_url('admin/profil/hapus_foto_sambutan/'.$profil->id_konfigurasi) ?>" onclick="return hapus_foto_sambutan()">
                                            <i class="icon-remove icon-white"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo base_url('assets/upload/images/'.$profil->foto_sambutan) ?>">
                                </div>  
                                <a href="<?php echo site_url('admin/profil/hapus_foto_sambutan/'.$profil->id_konfigurasi) ?>" class="btn btn-danger">Hapus Gambar</a>                                    
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
                                        <input type="file" name="foto_sambutan">
                                    </span>
                                    <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <div>
                            <label for="id">Caption 2</label>
                            <input type="text" placeholder="caption 2" name="caption_2" value="<?php echo ($this->input->post('caption_2') ? $this->input->post('caption_2') : $profil->caption_2); ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr>
                        <div style="float: right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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





