<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda belum login, silahkan login terlebih dahulu!');location.href='login.php';</script>";
}
$user = $_POST['username'];
$password = $_POST['password'];
include "koneksi.php";
$query = "SELECT * FROM tb_login WHERE username='$user' AND password='$password'";
$hasil = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($hasil);
// var_dump($query);
if ($cek > 0){
    $data = mysqli_fetch_assoc($hasil);
    $_SESSION['username']=$user;
    $_SESSION['leveluser']=$data['leveluser'];
    $_SESSION['idkaryawan']=$data['idkaryawan'];
    header('location:dashboard.php');
} else {
   echo "<script>alert('GAGAL LOGIN');location.href='login.php';</script>";
}
