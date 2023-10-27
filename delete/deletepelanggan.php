<?php
include('../koneksi.php');
$id = $_GET['idpelanggan'];
$query = "DELETE FROM tb_pelanggan WHERE idpelanggan ='$id'";
$hasil = mysqli_query($koneksi, $query);
if(!$hasil) {
    die("Gagal Menghapus data Pelanggan " . mysqli_error($koneksi));
}
else{
    echo "<script>
        alert('Data Didelete')
        document.location.href='../view/viewpelanggan.php';
        </script>
        ";
}