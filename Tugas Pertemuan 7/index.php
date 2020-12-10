<?php  
session_start();
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tugas Pertemuan 7</title>
  </head>

  <body>
    <div class="container">
      <form action="" method="POST">
    <div class="col-5">

    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
      <small id="emailHelp" class="form-text text-muted">Username dan password anda akan aman</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
  
    <button type="submit" class="btn btn-primary" name="login">Login</button>
    </div>
    </form>
    </div>

    <?php
 
    if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $DataMember = $koneksi->query("SELECT * FROM member WHERE jabatan ='$username'");
    $akun= $DataMember->fetch_assoc();

    if ($password == $akun['password']) {
      $akunterdaftar = $DataMember->num_rows;
        
        if($akunterdaftar==1){
          $_SESSION['login'] = $akun;
            echo "<script>alert('Login Berhasil');</script>";
            if ($_SESSION['login']['jabatan'] == "admin") {
              echo "<script>location='main.php'</script>";
            }
            else if ($_SESSION['login']['jabatan'] == "pegawai") {
              echo "<script>location='main.php'</script>";
            }
          }
        }

        else { 
          echo "<script>alert('Anda gagal login, silahkan dicoba lagi');</script>";
          echo "<script>location='login.php'</script>"; 
        }
      }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
