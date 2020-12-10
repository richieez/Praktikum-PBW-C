<?php 
  session_start();
  include 'koneksi.php';
  if (!isset($_SESSION['login'])) {
    echo "<script> alert('Silahkan anda harus login terlebih dahulu')</script>";
    echo "<script> location='login.php'</script>";
    exit;
  }
    
  if (isset($_POST['add'])) {
    var_dump($nim=$_POST['nim']);
    var_dump($nama=$_POST['nama']);
    var_dump($alamat=$_POST['alamat']);
    var_dump($jurusan=$_POST['jurusan']);
    var_dump($fakultas=$_POST['fakultas']);
    $ambil = $koneksi->query("INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jurusan`, `fakultas`) VALUES ('$nim', '$nama', '$alamat', '$jurusan', '$fakultas');");
    echo "<script> location='main.php'</script>";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <form action="" method="POST">
      <div class="form-row ml-2">
      <div class="form-group col-md-2">
        <label for="exampleFormControlInput1">NIM</label>
        <input type="number" class="form-control" name="nim" autofocus="">
      </div>

      <div class="form-group col-md-3">
        <label for="exampleFormControlInput1">Nama
          <input type="text" class="form-control" name="nama" >
        </label>
      </div>
      </div>

      <div class="form-row ml-2">
        <div class="form-group col-md-3">
          <label for="exampleFormControlInput1">Alamat
          <input type="text" class="form-control" name="alamat" >
          </label>
        </div>

        <div class="form-group col-md-3">
          <label for="exampleFormControlInput1">Jurusan
            <input type="text" class="form-control" name="jurusan" >
          </label>
        </div>
        </div>
        <div class="form-row ml-2">
          <div class="form-group col-md-3">
            <label for="exampleFormControlInput1">Fakultas
              <input type="text" class="form-control" name="fakultas" >
            </label>
          </div>
        </div>
        <br />
        </div>

        <div class="col ml-3">
          <button type="submit" name="add">Tambah Data</button>
        </div>
    </form>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>