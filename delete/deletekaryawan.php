<?php

include('../koneksi.php');

$id = $_GET['idkaryawan'];

$query = "DELETE FROM tb_karyawan WHERE idkaryawan ='$id'";

$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Gagal Menghapus data Obat " . mysqli_error($koneksi));
} else {
    echo "<script>
        alert('Data Di delete')
        document.location.href='../view/viewkaryawan.php';
        </script>
        ";
}
