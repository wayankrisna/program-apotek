<?php
include('../koneksi.php');
$id = $_POST['idobat'];
$idsuppli = $_POST['idsupplier'];
$nama = $_POST['namaobat'];
$kategori = $_POST['kategoriobat'];
$jual = $_POST['hargajual'];
$beli = $_POST['hargabeli'];
$stok = $_POST['stokobat'];
$ket = $_POST['keterangan'];
$query = "UPDATE tb_obat SET idobat ='$id', idsupplier='$idsuppli', namaobat='$nama', kategoriobat='$kategori', hargajual='$jual', hargabeli='$beli', stok_obat='$stok', keterangan='$ket' WHERE idobat='$id'";
$hasil = mysqli_query($koneksi, $query);
if (!$hasil) {
    die("GAGAL UPDATE DATA OBAT" . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data obat berhasil di update');window.location='../view/viewobat.php';</script>";
}