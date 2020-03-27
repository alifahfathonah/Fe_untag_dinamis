

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit Link direktori</li>
</ol>

<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Edit link direktori</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="col-md-8">
                    <img src="<?php  echo site_url('assets/img/direk.png') ?>" alt="" width="100%">
                    <hr>
                </div>
                <div class="card-body">
                    <?php echo form_open('admin/direktori/update/'.$direktori->id_direktori,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="id">Judul direktori</label>
                            <input type="text" placeholder="judul direktori" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $direktori->judul); ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id">link direktori</label>
                            <input type="text" placeholder="link direktori" name="link" value="<?php echo ($this->input->post('link') ? $this->input->post('link') : $direktori->link); ?>" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <br>
                </div>
                    
                    <div class="col-md-8">    
                        <div  style="float: right" >
                            <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                            <a href="<?php echo base_url('admin/direktori') ?>"  class="btn btn-danger">Kembali</a>
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










