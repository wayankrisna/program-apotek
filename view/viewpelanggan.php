<html>
    <head>
        <title>
            Daftar Pelanggan
        </title>
        <style>
            h1{
                color: green;
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
            <h1>DAFTAR PELANGGAN</h1>
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
                   <th>ID Pelanggan</th>
                   <th>Nama Lengkap</th>
                   <th>Alamat</th>
                   <th>Telp</th>
                   <th>Usia</th>
                   <th>Bukti Foto Resep</th>
                   <th>AKSI</th>
                   
               </tr>
            </thead>
            <tbody> 
                    <?php
                    include ('../koneksi.php');
                    $query= "SELECT * FROM tb_pelanggan";
                    $hasil= mysqli_query($koneksi, $query);

                    while ($row= mysqli_fetch_assoc($hasil)){
                    ?>
                        <tr>
                        <td><?php echo $row['idpelanggan'] ?> </td>
                        <td><?php echo $row["namalengkap"]?></td>
                        <td><?php echo $row["alamat"]?></td>
                        <td><?php echo $row["telp"]?></td>
                        <td><?php echo $row["usia"]?></td>
                        <td style="text-align: center;"><img src="../pict/<?php echo $row ['buktifotoresep']; ?>" style="width: 120px;"></td>
                        <td><a href="../update/updatepelanggan.php?idpelanggan=<?php echo $row['idpelanggan']?>" class="btn btn-outline-success print">UPDATE</a>
                        <a href="../delete/deletepelanggan.php?idpelanggan=<?php echo $row['idpelanggan']?>" class="btn btn-outline-danger print">DELETE</a></td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
        </table>
        </center>
    <br>
    <br>
   <center> <a href="../tambah/insertpelanggan.php" class="btn btn-primary btn-lg print">TAMBAHKAN PELANGGAN</a></center>

</body>
</html>"