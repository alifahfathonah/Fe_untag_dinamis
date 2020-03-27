 <script> 

            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.paswd.value; 
                password2 = form.paswd2.value; 

        // If password not entered 
        if (password1 == '') 
            alert ("Silahkan Masukan Password"); 

        // If confirm password not entered 
        else if (password2 == '') 
            alert ("Silahkan Masukan Konfirmasi password"); 

        // If Not same return False.     
        else if (password1 != password2) { 
            alert ("\nPassword Tidak Cocok, silahkan cek kembali password") 
            return false; 
        } 

        // If same return True. 
        else{ 
            // alert("Password Match: Welcome to GeeksforGeeks!") 
            return true; 
        } 
    }

</script> 
<div class="register-photo" style="background-color:rgba(241,247,252,0);background-image:url('<?php echo base_url("assets/upload/images/$bg"); ?>');background-repeat:no-repeat;background-size:contain;">
    <div class="row">
        <div class="col mr-sm-auto" style="margin-top:20px;">
            <div class="form-container">
                <form method="post" id="form-daftar" action="<?php echo site_url('auth/check_register') ;?>" enctype="multipart/form-data" onSubmit="return checkPassword(this)">
                    <h2 class="text-left" style="color:rgb(159,35,35);"><strong>Daftar Kontributor Artikel atau Kata</strong></h2> 
                    <font color="green">
                        <?php echo $this->session->flashdata('pesan'); ?>
                    </font>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h6 style="color:rgb(159,35,35);">Nama Lengkap</h6><input class="form-control" type="text" name="nama" style="color:rgb(80,94,108);" required placeholder="Nama Lengkap Sesuai KTP">
                                <?php echo form_error('nama','<div class="text-danger"><small>','</small></div>') ;?>
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgb(159,35,35);">Email</h6><input class="form-control" type="email" name="email"  required placeholder="Email aktif anda">
                                <?php echo form_error('email','<div class="text-danger"><small>','</small></div>') ;?>
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgb(159,35,35);">Password</h6><input class="form-control" type="password" name="paswd" required placeholder="Password Minimal 6 karakter">
                                <?php echo form_error('Password','<div class="text-danger"><small>','</small></div>') ;?>
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgb(159,35,35);">Konfirmasi Password</h6><input class="form-control" type="password" name="paswd2" required placeholder="Password Minimal 6 karakter">
                            </div>
                        <div class="form-group">
                            <h6 style="color:rgb(159,35,35);">Nomor HP</h6><input class="form-control" type="number" required placeholder="No HP aktif" name="no_hp">
                            <?php echo form_error('NO HP','<div class="text-danger"><small>','</small></div>') ;?>
                        </div>
                        <div class="form-group">
                           <h6 style="color:rgb(159,35,35);">Alamat Lengkap</h6>
                           <textarea class="form-control form-control-lg" style="height:102px;padding-top:0px;margin-top:-9px;" required name="alamat"></textarea>
                           <?php echo form_error('Alamat','<div class="text-danger"><small>','</small></div>') ;?>
                       </div>
                       <div class="form-group">
                           <h6 style="color:rgb(159,35,35);">Alamat Asal</h6>
                           <textarea class="form-control form-control-lg" style="height:102px;padding-top:0px;margin-top:-9px;" required name="asal"></textarea>
                           <?php echo form_error('Daerah Asal','<div class="text-danger"><small>','</small></div>') ;?>
                       </div>
                       <div class="form-group" style="margin-bottom:30px;">
                          <h6 style="color:rgb(159,35,35);margin-top:18px;">Profesi</h6>
                          <select class="form-control" name="profesi" required>
                             <option>Profesi</option>
                             <?php foreach($profesi as $value) { ?>
                                <option value="<?php echo $value->id_profesi?>"><?php echo $value->profesi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-auto col-sm-12 col-md-11 col-lg-5 mr-md-auto mx-lg-auto" style="padding-left:1px;">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="<?php echo base_url(); ?>assets/admin/img/400x300.jpg" alt="" class="img-thumbnail"/>
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
                        <div style="margin-left: -10px">
                            <span class="btn btn-file">
                                <span class="fileupload-new ">Pilih Foto KTP</span>
                                <span class="fileupload-exists  ">Ganti</span>
                                <input type="file" name="foto_ktp" required>
                            </span>
                            <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                Hapus
                            </a>
                        </div>
                    </div>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="<?php echo base_url(); ?>assets/admin/img/400x300.jpg" alt="" class="img-thumbnail"/>
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
                        <div style="margin-left: -10px">
                            <span class="btn btn-file">
                                <span class="fileupload-new ">Pilih Foto Profil</span>
                                <span class="fileupload-exists  ">Ganti</span>
                                <input type="file" name="foto_profil" required>
                            </span>
                            <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                Hapus
                            </a>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="form-group"><button class="btn btn-block" type="submit" id="daftar">Daftar</button></div>
        </form>
    </div>
</div>
</div>
</div>


<div id='Back-to-top'>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>
