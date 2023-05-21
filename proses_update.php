<?php
require_once 'config.php';
if (isset($_POST['submit'])) {
  
   $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $alamat = $_POST['alamat'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $id = $_POST['id'];

  $q = $mysqli->query("UPDATE tb_dosen SET nip = '$nip', nama = '$nama', jenis_kelamin = '$jeniskelamin', alamat = '$alamat', username = '$username', password = '$password' WHERE id_dosen = '$id'");if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data dosen berhasil diubah'); window.location.href='dosen.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data dosen gagal diubah'); window.location.href='dosen.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: dosen.php');
}