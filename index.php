<?php include 'header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:rgba(38, 217, 116, 0.85)">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="text"><b>Dashboard</b></h1>

<!-- <a href="#" onclick="add_detail()" class="btn btn-primary">
<i class="fas fa-user-plus"></i> Tambah
</a> -->

</div>
<div class="col-sm-6">
<!-- <a href="#" onclick="add_detail()" class="btn btn-primary float-right">
<i class="fas fa-user-plus"></i> Tambah Data User
</a> -->


</div>
</div>
</div>
<!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

  <!--   <a href="#"  onclick="add_detail()"  class="btn btn-outline-primary btn_filter" style="margin-bottom: 20px;">
                        <i class="fas fa-user-plus"></i> Tambah
                    </a> -->


<!-- <table id="tablereward" class="table table-bordered datatable">
<thead>
    <tr style="background-color: #4bdd54">
        <th>No.</th>
        <th>Nama User</th>
        <th>Username</th>
        <th>Password</th>
        <th>Hak Akses</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php $i=1; ?>
    <?php 
    foreach ($tampil as $val) { ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?= $val->nama_user; ?></td>
            <td><?= $val->username; ?></td>
            <td><?= $val->password; ?></td>
            <td><?= $val->hak_akses; ?></td>

            <td align="center">
            <div class="btn-group">


<a href="#" onclick="editdata('<?=$val->id_user?>')"  class="btn btn-success" style="margin-left: 5px;">Ubah</a> 
<a href="#" onclick="deletedata('<?= $val->id_user ?>')"  class="btn btn-danger" style="margin-left: 5px;">Hapus</a> 



</div>
            </td>
        </tr>
        <?php $i++; ?>
    <?php } ?>
</tbody>
</table> -->
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<div class="modal fade" id="add_detail">
<div class="modal-dialog">
<div class="modal-content border-primary">
<div class="modal-header bg-primary">
<h5 class="modal-title text-white"><span id="judul"><?= $judul?></span> </h5>
<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">




<form class="form-horizontal" id="add_detail_form" action="#">
	
<div class="row">
    <!-- Data Diri Pelanggan -->
    <div class="col-md-12">

    <input type="text" class="form-control" id="noid" name="noid" readonly value="" hidden="">
    <input type="text" class="form-control" id="id" name="id" value="" hidden="">

        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" name="nama" class="form-control" id="nama" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>

      
        
        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="text" name="username" class="form-control" id="username" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="text" name="password" class="form-control" id="password" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>

      <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Hak Akses</label>
            <div class="col-sm-8">
                <select name="hakakses" id="hakakses" class="form-control">
                    <option value="">Pilih</option>
                    <option value="Admin">Admin</option>
                    <option value="Kasir">Kasir</option>
                   
                   
                </select>
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>

   



    </div>

                                      
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
<button type="button" class="btn btn-primary" onclick="save_detail()" id="btnSave"><i class="fa fa-check-square-o"></i> Simpan</button> 
</div>

</form>
</div>
</div>
</div><!--End Modal -->
<!-- /.container-fluid -->
</section>


<!-- /.content -->
</div>
<!-- /.content-wrapper -->




<?php include 'footer.php'; ?>