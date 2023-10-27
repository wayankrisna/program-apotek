<html>
    <head>
        <title>
            Daftar Obat
        </title>
        <style>
            h1{
                color: lightgreen;
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
            <h1>DAFTAR OBAT</h1>
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
                   <th>ID Obat</th>
                   <th>ID Suplier</th>
                   <th>Nama Obat</th>
                   <th>Kategori Obat</th>
                   <th>Harga Jual</th>
                   <th>Harga Beli</th>
                   <th>Stok Obat</th>
                   <th>Keterangan</th>
                   <th>AKSI</th>
                   
               </tr>
            </thead>
            <tbody> 
                    <?php
                    include ('../koneksi.php');
                    $query= "SELECT * FROM tb_obat";
                    $hasil= mysqli_query($koneksi, $query);

                    while ($row= mysqli_fetch_assoc($hasil)){
                    ?>
                        <tr>
                        <td><?php echo $row['idobat'] ?> </td>
                        <td><?php echo $row['idsupplier'] ?></td>
                        <td><?php echo $row["namaobat"]?></td>
                        <td><?php echo $row["kategoriobat"]?></td>
                        <td><?php echo $row["hargajual"]?></td>
                        <td><?php echo $row["hargabeli"]?></td>
                        <td><?php echo $row["stok_obat"]?></td>
                        <td><?php echo $row["keterangan"]?></td>
                        <td><a href="../update/updateobat.php?idobat=<?php echo $row['idobat']?>" class="btn btn-outline-success print">UPDATE</a>
                        <a href="../delete/deleteobat.php?idobat=<?php echo $row['idobat']?>" class="btn btn-outline-danger print">DELETE</a></td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
        </table>
        </center>
    <br>
    <br>
   <center> <a href="../tambah/insertobat.php" class="btn btn-primary btn-lg print">TAMBAHKAN OBAT</a></center>

</body>
</html>"
