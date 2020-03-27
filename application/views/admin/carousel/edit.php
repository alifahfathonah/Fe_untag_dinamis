

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit carousel</li>
</ol>

<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Edit carousel</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="card-body">
                    <?php echo form_open('admin/carousel/update/'.$carousel->id_carousel,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="id">H1</label>
                            <input type="text" placeholder="H1" name="h1" value="<?php echo ($this->input->post('h1') ? $this->input->post('h1') : $carousel->h1); ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id">H2</label>
                            <input type="text" placeholder="H2" name="h2" value="<?php echo ($this->input->post('h2') ? $this->input->post('h2') : $carousel->h2); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php if($carousel->foto != ""){ ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:634px; max-height:253px; position:relative;">
                                    <div class="hapus-foto">
                                        <a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="<?php echo base_url('admin/carousel/hapusfoto/'.$carousel->id_carousel) ?>" onclick="return hapusfoto()">
                                            <i class="icon-remove icon-white"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo base_url('assets/upload/images/'.$carousel->foto) ?>">
                                </div>  
                                <a href="<?php echo site_url('admin/carousel/hapusfoto/'.$carousel->id_carousel) ?>" class="btn btn-danger">Hapus foto</a>                                    
                            </div>
                        <?php } else { ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="<?php echo base_url(); ?>assets/admin/img/400x300.jpg" alt="" class="img-thumbnail"/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
                                <div style="margin-left: -10px">
                                    <span class="btn btn-file">
                                        <span class="fileupload-new btn btn-primary">Pilih foto</span>
                                        <span class="fileupload-exists btn btn-primary">Ganti</span>
                                        <input type="file" name="foto" required>
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
                            <a href="<?php echo base_url('admin/carousel') ?>"  class="btn btn-danger">Kembali</a>
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










