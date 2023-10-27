<?php
include('../koneksi.php');
$namakaryawan = $_POST['namakaryawan'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = "INSERT INTO tb_karyawan values('','$namakaryawan','$alamat','$telp')";
include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);
if(!$hasil) {
    die("Gagal memasukan data Karyawan " . mysqli_error($koneksi));
}
else{
    echo "<script>
        alert('Data Berhasil di Tambahkan')
        document.location.href='../view/viewkaryawan.php';
        </script>
        ";
}
