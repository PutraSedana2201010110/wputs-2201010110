<?php include 'header.php'; ?>

<div class="content-wrapper" style="background-color:rgba(38, 217, 116, 0.85)">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="text"><b>Edit Data Dosen</b></h1>

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
<?php 
include_once("config.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];$q = $mysqli->query("SELECT * FROM tb_dosen WHERE id_dosen = '$id'");

  foreach ($q as $dt) :
  ?>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
 

<form method="post" action="proses_update.php" id="add_detail_form">
	
<div class="row">
    <!-- Data Diri Pelanggan -->
    <div class="col-md-12">

    <input type="text" class="form-control" id="noid" name="noid" readonly value="" hidden="">
    <input type="text" class="form-control" id="id" name="id" value="<?= $dt['id_dosen'] ?>" hidden="">


    <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">NIP</label>
            <div class="col-sm-8">
                <input type="text" name="nip" class="form-control" id="nip" value="<?= $dt['nip'] ?>" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>


        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Nama Dosen</label>
            <div class="col-sm-8">
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $dt['nama'] ?>" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>


         <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-8">
                <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                    <option value="<?= $dt['jenis_kelamin'] ?>"><?= $dt['jenis_kelamin'] ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                   
                   
                </select>
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>
      	
      	<div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $dt['alamat'] ?>" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="text" name="username" class="form-control" id="username" value="<?= $dt['username'] ?>" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="text" name="password" class="form-control" id="password" value="<?= $dt['password'] ?>" />
                 <span class="help-block" style="color: red"></span>
            </div>
        </div>

     





    </div>

                                      
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>

<input type="submit" class="btn btn-primary" name="submit" value="Simpan Data">
</div>

</form>

<?php
  endforeach;
}
?>

</div>
</div>
</div>
</div>
</div>
</div> 
</section>
<?php include 'footer.php'; ?>