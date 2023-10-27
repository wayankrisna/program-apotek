<?php
include('../koneksi.php');
$idsupplier = $_POST['idsupplier'];
$perusahaan = $_POST['perusahaan'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE tb_supplier set idsupplier='$idsupplier', perusahaan='$perusahaan', keterangan='$keterangan' where idsupplier='$idsupplier'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data Obat " . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data Berhasil di Update')
        document.location.href='../view/viewsupplier.php';
        </script>
        ";
}