<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tugas Pertemuan 6</title>
</head>

<body>
    <h1> Nilai Akhir Mahasiswa</h1>

    <form action="index.php" method="post">
        <label for="nama"> Nama = </label>
        <input type="text" name="nama"> 
        <br>
        <br>
        <label for="nim"> NIM = </label>
        <input type="text" name="nim">
        <br>
        <br>

        <h3>Masukkan nilai dibawah ini :</h3>
        <br>
        <label for="tugas"> Nilai Tugas = </label>
        <input type="number" name="tugas">
        <br>
        <br>

        <label for="uts"> Nilai UTS = </label>
        <input type="number" name="uts">
        <br>
        <br>

        <label for="uas"> Nilai UAS = </label>
        <input type="number" name="uas">
        <br>
        <br>

        <input type="submit" name="submit">
        <br>
        <br>
        
        <?php
            if(isset($_POST['submit'])) {
                $nilai_tugas = $_POST['tugas'];
                $nilai_uts = $_POST['uts'];
                $nilai_uas = $_POST['uas'];

                $rata_nilai = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;

                echo "Nilai Akhir Anda adalah " . $rata_nilai . "<br>";

                if($rata_nilai >= 80){
                    echo "Selamat kepada " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                    echo "Anda lulus dengan predikat A!";
                }

                elseif($rata_nilai >= 70){
                    echo "Selamat kepada " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                    echo "Anda lulus dengan predikat B!";
                }

                elseif($rata_nilai >= 60){
                    echo "Selamat kepada " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                    echo "Anda lulus dengan predikat C!";
                }

                else{
                    echo "Mohon maaf kepada " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                    echo "Anda belum lulus.";
                }
            }
        ?>
    </form>

    <footer>
        <br>
        <br>
        <br>
        <p>Copyright &copy; 2020 by Richie</p>
    </footer>
</body>
</html>
