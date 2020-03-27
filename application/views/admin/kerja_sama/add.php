<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active"> Logo</li>
</ol>
<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Tambah Logo</h2>
        </div>
    </div>

    <div class="box-body">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <?php echo form_open('admin/kerja_sama/tambah','role="form" enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    
                    <div class="row">
                        <div class="col-md-8 card-body">
                            <div class="col-md-7">
                                <label for="id">Deskripsi Logo</label>
                                <input type="text" placeholder="Deskripsi Logo" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" class="form-control" required>
                            </div>
                            <div class="fileupload fileupload-new col-md-12" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="<?php echo base_url(); ?>assets/admin/img/400x300.jpg" alt="" class="img-thumbnail"/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
                                <div style="margin-left: -10px">
                                    <span class="btn btn-file">
                                        <span class="fileupload-new btn btn-primary">Pilih Logo</span>
                                        <span class="fileupload-exists btn btn-primary">Ganti</span>
                                        <input type="file" name="foto" required>
                                    </span>
                                    <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo base_url('admin/kerja_sama') ?>"  class="btn btn-danger">Kembali</a>
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
