<?php
require_once 'config.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];// perintah hapus data berdasarkan id yang dikirimkan
  $q = $mysqli->query("DELETE FROM tb_dosen WHERE id_dosen = '$id'");// cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='dosen.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='dosen.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:dosen.php');
}