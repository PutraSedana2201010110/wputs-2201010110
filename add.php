<?php

require_once 'config.php';

if (isset($_POST['submit'])) {

  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $alamat = $_POST['alamat'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  // id_produk bernilai '' karena kita set auto increment
  $q = $mysqli->query("INSERT INTO tb_dosen VALUES ('', '$nip', '$nama', '$jeniskelamin', '$alamat', '$username', '$password')");if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data dosen berhasil ditambahkan'); window.location.href='dosen.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data dosen gagal ditambahkan'); window.location.href='dosen.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
 header('Location: dosen.php');
}

