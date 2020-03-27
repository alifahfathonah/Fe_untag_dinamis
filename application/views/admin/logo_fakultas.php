
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Konfigurasi</li>
    <li class="breadcrumb-item active">Logo Fakultas</li>
</ol>
<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Logo Fakultas</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="card-body">
                    <?php echo form_open('admin/profil/edit_logo_fakultas/'.$profil->id_konfigurasi,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-12">
                        <label class='control-label'>Logo Fakultas </label>
                        <?php if($profil->icon != ""){ ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
                                    <div class="hapus-gambar">
                                        <a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="<?php echo base_url('admin/profil/hapus_logo_fakultas/'.$profil->id_konfigurasi) ?>" onclick="return hapus_logo_fakultas()">
                                            <i class="icon-remove icon-white"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo base_url('assets/upload/images/'.$profil->icon) ?>">
                                </div>  
                                <br>
                                <div class="text-center">
                                    <a href="<?php echo site_url('admin/profil/hapus_logo_fakultas/'.$profil->id_konfigurasi) ?>" class="btn btn-danger">Hapus Gambar</a>                                    
                                </div>
                                
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
                                        <input type="file" name="icon">
                                    </span>
                                    <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                        Hapus
                                    </a>
                                    <span>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>





