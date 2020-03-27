<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active"> direktori</li>
</ol>
<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Tambah direktori</h2>
        </div>
    </div>

    <div class="box-body">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="col-md-8">
                        <img src="<?php  echo site_url('assets/img/direk.png') ?>" alt="" width="100%">
                        <hr>
                    </div>
                    <?php echo form_open('admin/direktori/tambah','role="form" enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    
                    <div class="row">
                        <div class="col-md-8 card-body">
                            <div >
                                <label for="id">Judul direktori</label>
                                <input type="text" placeholder="Judul direktori" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" required>
                                
                            </div>
                            <div >
                                <label for="id">Link Tujuan</label>
                                <input type="text" placeholder="Link Tujuan" name="link" value="<?php echo $this->input->post('link'); ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <hr>
                            <div style="float: right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo base_url('admin/direktori') ?>"  class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>

                    <?php echo form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
