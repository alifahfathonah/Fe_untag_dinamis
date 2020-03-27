<div class="register-photo" style="background-color:rgba(241,247,252,0);background-image:url('<?php echo base_url("assets/upload/images/$bg"); ?>');background-repeat:no-repeat;background-size:contain;">
<section id="Syarat">
    <div class="container p-3" style="background-color: #eee; border-radius: 10px;">
        <center><h4 style="color: #9f2323;" class="mb-4 mt-4">Syarat dan Ketentuan Kontributor</h4></center>
        <p>
        <hr>
           <ol>
           <li> Kontributor adalah user yang berhak untuk menyalurkan kontribusi dalam bentuk pengusulan artikel dan kosa kata.</li>
		 	<li>Satu email hanya dapat terdaftar sebagai satu akun kontributor</li>  
		   <li> Pendaftaran sebagai kontributor akan diverifikasi dan disetujui oleh pihak Sengker Kuwung Belambangan sebagai administrator</li>
           <li> Pengisian data pada form pendaftaran harus asli dan dapat dipertanggung jawabkan</li>
           <li> Kontributor yang sudah diverifikasi dan disetujui oleh pihak Sengker Kuwung Belambangan akan mendapatkan akses sebuah halaman khusus yang digunakan untuk mengusulkan artikel atau kosa kata. Selain itu, Kontributor juga bisa melihat perkembangan dari artikel dan kosa kata yang diusulkannya.</li>
           <li> File yang diupload maximal berukuran 2 Mb </li> 
           </ol> 
        </p>
        <div style="text-align: right;">
			<!-- style="color:rgb(159,35,35);font-size:12px; -->
			<h6 class="text-center" >Saya mengerti, <a class="btn" href="<?php echo base_url('auth/register');?>">Lanjutkan</a></h6>            
        </div>
    </div>
</section>

    <div id='Back-to-top'>
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            </div>

<script type="text/javascript">
    $('#lanjut').on('click', function(e){

    $("#form-registrasi").toggle();
    $(this).toggleClass('class1')
        });
</script>
