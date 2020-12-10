<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>

  <body>
    <?php
    session_start();
    include 'koneksi.php';

    if (!isset($_SESSION['login'])) {
        echo "<script> alert('Silahkan anda harus login terlebih dahulu')</script>";
        echo "<script> location='login.php'</script>";
        exit;
      }
      $id=$_GET['id'];
    ?>

    <?php  
      $ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE nim = '$id' ");
    ?>

    <?php  while($mhs = $ambil->fetch_assoc()){

    ?>
  
    <div class="container mt-5 mb-5">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row ml-2">
        <div class="form-group col-md-3">
        <label  for="username_user">NIM</label>
        <input type="number" name="nim" class="form-control" value="<?=$mhs['nim']?>">
        <br />
        </div>

        <div class="form-group col-md-3">
        <label  for="username_user">Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?=$mhs['nama']?>">
        <br />
        </div>
        </div>

        <div class="form-row ml-2">
        <div class="form-group col-md-3">
        <label  for="username_user">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?=$mhs['alamat']?>">
        <br />
        </div>

        <div class="form-group col-md-3">
        <label  for="username_user">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="<?=$mhs['jurusan']?>">
        <br />
        </div>
        </div>

        <div class="form-row ml-2">
        <div class="form-group col-md-3">
        <label  for="username_user">Fakultas</label>
        <input type="text" name="fakultas" class="form-control" value="<?=$mhs['fakultas']?>">
        <br />
        </div>
        </div>  
        <br>
          <button type="submit" class="btn btn-primary mb-4 waves-effect waves-light" name="daftar">Edit</button>   
      </form>
    </div>

      <?php } ?>

      <?php  

        if(isset($_POST['daftar']))
        {
          $nim=$_POST['nim'];
          $nama=$_POST['nama'];
          $alamat=$_POST['alamat'];
          $jurusan=$_POST['jurusan'];
          $fakultas=$_POST['fakultas'];
          $ambil = $koneksi->query("UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', jurusan = '$jurusan', fakultas = '$fakultas' WHERE nim = '$id' ");
        
          echo "<script>location='main.php'</script>";}
      ?>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>