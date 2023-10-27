<?php
include('../koneksi.php');
$idkaryawan = $_POST['idkaryawan'];
$namakaryawan = $_POST['namakaryawan'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = "UPDATE tb_karyawan set idkaryawan='$idkaryawan', namakaryawan='$namakaryawan', alamat='$alamat', telp='$telp' where idkaryawan='$idkaryawan'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " . mysqli_error($koneksi));
}
else{
    echo "<script>
        alert('Data Berhasil di Update')
        document.location.href='../view/viewkaryawan.php';
        </script>
        ";
}