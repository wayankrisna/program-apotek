<?php
include('../koneksi.php');
$idsupplier     = $_POST['idsupplier'];
$namaobat       = $_POST['namaobat'];
$kategoriobat   = $_POST['kategoriobat'];
$hargajual      = $_POST['hargajual'];
$hargabeli      = $_POST['hargabeli'];
$stokobat       = $_POST['stokobat'];
$keterangan     = $_POST['keterangan'];
$query = "INSERT INTO tb_obat values ('', '$idsupplier', '$namaobat', '$kategoriobat', '$hargajual', '$hargabeli', '$stokobat', '$keterangan')";
$hasil = mysqli_query($koneksi, $query);
if (!$hasil) {
    die("GAGAL MEMASUKKAN DATA OBAT" . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data obat berhasil masuk');window.location='../view/viewobat.php';</script>";
}
