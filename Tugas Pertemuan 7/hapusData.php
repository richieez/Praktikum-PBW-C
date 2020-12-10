<?php 
  session_start();
  include 'koneksi.php';
  if (!isset($_SESSION['login'])) {
        echo "<script> alert('Silahkan anda harus login terlebih dahulu')</script>";
        echo "<script> location='index.php'</script>";
        exit;
      }

  $id=$_GET['id'];

  $DataProduk = $koneksi->query("SELECT * FROM mahasiswa WHERE nim = '$id'");
  $Data = $DataProduk->fetch_assoc();

  $hapus=$koneksi->query("DELETE FROM mahasiswa WHERE nim = '$id'");

  echo "<script>location='main.php'</script>";
?>