<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active"> Artikel</li>
</ol>
<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Tambah Artikel</h2>
        </div>
    </div>

    <div class="box-body">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <?php echo form_open('admin/artikel/tambah','role="form" enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    
                    <div class="row">
                        <div class="col-md-8 card-body">
                            <div >
                                <label for="id">Judul Artikel</label>
                                <input type="text" placeholder="Judul artikel" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" required>
                                
                            </div>
                           
                            <div >
                                <label class='control-label'>Deskripsi</label>
                                <textarea class='ckeditor' id='ckeditor' name='teks' value="<?php echo $this->input->post('teks'); ?>" required></textarea>
                                <input type="hidden"  name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                            <div>
                                <label for="id">kategori Artikel</label>
                                <select class="form-control" name="id_kategori" required>
                                    <option for="id" value="">Kategeori Artikel</option>
                                    <?php foreach($kategorinya as $value) { ?>
                                        <option value="<?php echo $value->id_kategori?>"><?php echo $value->kategori_artikel ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- <div >
                                <label for="id">Sumber Artikel</label>
                                <input type="text" placeholder="Sumber artikel" name="sumber" value="<?php echo $this->input->post('sumber'); ?>" class="form-control">
                            </div> -->                            
                        </div>

                        <div class="col-md-12">
                            <hr>
                            <div style="float: right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo base_url('admin/artikel') ?>"  class="btn btn-danger">Kembali</a>
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
