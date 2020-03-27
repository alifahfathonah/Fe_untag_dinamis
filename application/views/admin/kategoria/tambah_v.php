<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tambah kategori</li>
</ol>
<div class="col-xs-12">
    <div class="box">
        <div class="box-header"> 
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header">Tambah kategori</h2>
                </div>
            </div>
            <div class="input-group input-group-sm">
                <form action="<?php echo site_url('admin/kategoria/simpan'); ?>" method="post">
                    <input type="text" name="kategori_artikel" placeholder="kategori Baru" required><br>
                    <br>
                    <input class="btn btn-info " type="submit" value="simpan"></input>
                    <a type="sumbit" class="btn btn-danger" href="<?php echo site_url('admin/kategoria'); ?>" >Batal</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>