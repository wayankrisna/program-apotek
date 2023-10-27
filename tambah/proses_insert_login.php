<?php
include ('../koneksi.php');
$usr = $_POST['username'];
$password = $_POST['password'];
$leveluser = $_POST['leveluser'];
$idkaryawan = $_POST['idkaryawan'];
$pws_encrip = password_hash ($password, PASSWORD_DEFAULT);
$query = "INSERT INTO tb_login values('$usr','$pws_encrip','$leveluser', '$idkaryawan')";
$hasil = mysqli_query($koneksi, $query);
    if(!$hasil) {
    die("Gagal register " .mysqli_error ($koneksi));
    }
    else{
    echo "<script>
        alert('Berhasil register')
        document.location.href='../dashboard.php';
        </script>
        ";
    }