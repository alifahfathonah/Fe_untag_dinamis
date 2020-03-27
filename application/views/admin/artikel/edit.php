

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit Artikel</li>
</ol>

<div class="box">
    <div class="box-header">
        <div class="col-md-12">
            <h2 class="page-header">Edit Artikel</h2>
        </div>
    </div>
    <div class="input-group input-group-sm">
        <div class="box-body" >
            <div class="col-md-12">
                <div class="card-body">
                    <?php echo form_open('admin/artikel/update/'.$artikel->id_artikel,'role="form"  enctype="multipart/form-data" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="id">Judul Artikel</label>
                            <input type="text" placeholder="judul artikel" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $artikel->judul); ?>" class="form-control" required>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Deskripsi</label>
                            <textarea class='ckeditor' id='ckeditor' name='teks'><?php echo ($this->input->post('teks') ? $this->input->post('teks') : $artikel->teks); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php if($artikel->gambar != ""){ ?>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
                                    <div class="hapus-gambar">
                                        <a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="<?php echo base_url('admin/artikel/hapusgambar/'.$artikel->id_artikel) ?>" onclick="return hapusgambar()">
                                            <i class="icon-remove icon-white"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo base_url('assets/upload/foto_artikel/'.$artikel->gambar) ?>">
                                </div>  
                                <a href="<?php echo site_url('admin/artikel/hapusgambar/'.$artikel->id_artikel) ?>" class="btn btn-danger">Hapus Gambar</a>                                    
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
                    <div>
                        <label>Kategeori artikel</label>
                        <select class="form-control" name="id_kategori" >
                            <option value="">Pilih Kategori Artikel</option>

                            <!-- memsnggil database kategori buku dengan variabel $value -->
                            <?php foreach($kategorinya as $value) { ?>
                                <option <?= ($value->id_kategori == $artikel->id_kategori)? 'selected':''?> value="<?php echo $value->id_kategori;?>"><?php echo $value->kategori_artikel ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <hr>
                    <br>
                </div>
                    
                    <div class="col-md-12">    
                        <div  style="float: right" >
                            <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                            <a href="<?php echo base_url('admin/artikel') ?>"  class="btn btn-danger">Kembali</a>
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










