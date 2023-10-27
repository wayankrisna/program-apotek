<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username'])){
    echo"<script>alert('Maaf anda belum login');location.href='../login/login.php'</script>";
}
elseif (@$_SESSION['leveluser']=='karyawan'){
    echo"<script>alert('Maaf anda adalah Karyawan');location.href='../dashboard.php'</script>";
}
else
{
?>
<html>
    <head>
        <title>
            Daftar Karyawan
        </title>
        <style>
            h1{
                color: blue;
            }
            @media print {
                .print {
                    display: none !important;

                }
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <body>
        <center>
            <h1>DAFTAR KARYAWAN</h1>
            <br/>
            <div class="print">
                <a class="btn btn-primary print" onclick="window.print()">Cetak Data</a> 
        </div>
        <br>

        </center>
        <center>
        <table border="1" cellpadding="10" class="table table-striped">

            <thead class="table-primary">
               <tr>
                   <th>ID Karyawan</th>
                   <th>Nama Karyawan</th>
                   <th>Alamat</th>
                   <th>Telp</th>
                   <th>AKSI</th>
                   
               </tr>
            </thead>
            <tbody> 
                    <?php
                    include ('../koneksi.php');
                    $query= "SELECT * FROM tb_karyawan";
                    $hasil= mysqli_query($koneksi, $query);

                    while ($row= mysqli_fetch_assoc($hasil)){
                    ?>
                        <tr>
                        <td><?php echo $row['idkaryawan'] ?> </td>
                        <td><?php echo $row["namakaryawan"]?></td>
                        <td><?php echo $row["alamat"]?></td>
                        <td><?php echo $row["telp"]?></td>
            
                        <td><a href="../update/updatekaryawan.php?idkaryawan=<?php echo $row['idkaryawan']?>" class="btn btn-outline-success print">UPDATE</a>
                        <a onclick="return confirm('Anda yakin ingin menghapus data ini ?');" href="../delete/deletekaryawan.php?idkaryawan=<?php echo $row['idkaryawan']?>" class="btn btn-outline-danger print">DELETE</a></td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
        </table>
        </center>
    <br>
    <br>
   <center> <a href="../tambah/insertkaryawan.php" class="btn btn-success btn-lg print">TAMBAHKAN KARYAWAN</a></center>

</body>
</html>
<?php
}
?>
