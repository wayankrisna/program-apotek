<?php
include('../koneksi.php');
$id = $_GET['idobat'];
$query = "DELETE FROM tb_obat WHERE idobat='$id'";
$hasil = mysqli_query($koneksi, $query);
if (!$hasil) {
    die("GAGAL MENGHAPUS DATA OBAT" . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data obat berhasil dihapus');window.location='../view/viewobat.php';</script>";
}