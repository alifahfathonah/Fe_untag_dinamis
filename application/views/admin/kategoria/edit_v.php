<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit kategori</li>
</ol>
<div class="col-xs-12">
    <div class="box">
        <div class="box-header"> 
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header">Edit kategori</h2>
                </div>
            </div>
            <div class="input-group input-group-sm">
                <form action="<?php echo site_url('admin/kategoria/update'); ?>" method="post">
                    <input type="hidden" name="id_kategori" value="<?php echo $data->id_kategori; ?>">
                    <input value="<?php echo $data->kategori_artikel ?>" type="text" name="kategori_artikel" placeholder="kategori "><br>
                    <br>
                    <input class="btn btn-info " type="submit" value="simpan"></input>
                    <a type="sumbit" class="btn btn-danger" href="<?php echo site_url('admin/kategoria'); ?>" >Batal</a>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>