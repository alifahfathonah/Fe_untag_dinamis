<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/home') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">kategori</li>
</ol>
<div class="col-xs-12">

  <div class="box">
    <div class="box-header">
        <h2 class="page-header" style="display: initial;">kategori</h2>
        <a href="<?php echo site_url('admin/kategoria/tambah')?> " class="btn btn-success" style="float: right;">Tambah Data</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table_id" class="display">
            <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">No.</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">kategoria</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Aksi</th></tr>
            </thead>
            <tbody> 
                <?php 
                $no = 1;
                foreach($data as $value){
                    ?>
                    <tr role="row" class="odd">
                      <td class="sorting_1"><?php echo $no++; ?></td>
                      <td class="sorting_2"><?php echo $value->kategori_artikel; ?></td>
                      <td class="sorting_3">
                        <a href="<?php echo site_url('admin/kategoria/edit/'.$value->id_kategori); ?>" class="btn btn-info btn-sm" title="Edit">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="<?php echo site_url('admin/kategoria/hapus/'.$value->id_kategori); ?>" class="btn btn-danger btn-sm" title="Hapus"  onclick="return confirm('Yakin Hapus ?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr><?php }?></tbody>
            </table>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
<!-- <h1>Data profesi</h1>
    
    <table border="1">
        <tr>
            <td>no.</td>
            <td>profesi</td>
        </tr>
    <tr>
            <td>/td>
            <td></td>
            
    </tr>
        
</table> -->
