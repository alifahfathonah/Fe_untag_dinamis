

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit Penelitian</li>
</ol>

<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Edit Penelitian</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="card-body">
                    <?php echo form_open('admin/menu/penelitian/update/'.$penelitian->id_sub_menu,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="id">Judul penelitian</label>
                            <input type="text" placeholder="judul penelitian" name="nama_sub_menu" value="<?php echo ($this->input->post('nama_sub_menu') ? $this->input->post('nama_sub_menu') : $penelitian->nama_sub_menu); ?>" class="form-control" required>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Deskripsi</label>
                            <textarea class='ckeditor' id='ckeditor' name='teks'><?php echo ($this->input->post('teks') ? $this->input->post('teks') : $penelitian->teks); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php if($penelitian->gambar != ""){ ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
                                    <div class="hapus-gambar">
                                        <a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="<?php echo base_url('admin/menu/penelitian/hapusgambar/'.$penelitian->id_sub_menu) ?>" onclick="return hapusgambar()">
                                            <i class="icon-remove icon-white"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo base_url('assets/upload/foto_artikel/'.$penelitian->gambar) ?>">
                                </div>  
                                <a href="<?php echo site_url('admin/menu/penelitian/hapusgambar/'.$penelitian->id_sub_menu) ?>" class="btn btn-danger">Hapus Gambar</a>                                    
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
                                        <input type="file" name="gambar">
                                    </span>
                                    <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    <hr>
                    <br>
                </div>
                    
                    <div class="col-md-12">    
                        <div  style="float: right" >
                            <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                            <a href="<?php echo base_url('admin/menu/penelitian') ?>"  class="btn btn-danger">Kembali</a>
                        </div>   
                    </div>        
                </div>
             <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
</script>










