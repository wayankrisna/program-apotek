<?php
session_start();
?>
<html>

<head>
    <title>
        Daftar Transaksi
    </title>
    <style>
        h1 {
            color: orangered;
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
        <h1>DAFTAR TRANSAKSI</h1>
        <br />
        <div class="print">
            <a class="btn btn-primary print" onclick="window.print()">Cetak Data</a>
        </div>
        <br>
    </center>
    <center>
        <table border="1" cellpadding="10" class="table table-striped">

            <thead class="table-primary">
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Pelanggan</th>
                    <th>ID kasir</th>
                    <th>Tanggal Transaksi</th>
                    <th>Kategori Pelanggan</th>
                    <th>Total Bayar</th>
                    <th>Bayar</th>
                    <th>Kembali</th>
                    <th>AKSI</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('../koneksi.php');
                $query = "SELECT * FROM tb_transaksi";
                $hasil = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                    <tr>
                        <td><?php echo $row['idtransaksi'] ?> </td>
                        <td><?php echo $row['idpelanggan'] ?></td>
                        <td><?php echo $row['idkaryawan'] ?></td>
                        <td><?php echo $row["tgltransaksi"] ?></td>
                        <td><?php echo $row["kategoripelanggan"] ?></td>
                        <td><?php echo $row["totalbayar"] ?></td>
                        <td><?php echo $row["bayar"] ?></td>
                        <td><?php echo $row["kembali"] ?></td>
                        <?php
                        if (@$_SESSION['leveluser'] == 'admin') {
                        ?>
                            <td><a href="../tambah/insertdetail_transaksi.php?idtransaksi=<?php echo $row['idtransaksi'] ?>" class="btn btn-outline-success print">UPDATE</a>
                            <?php
                        } else {
                        }
                            ?>
                            <?php
                            if (@$_SESSION['leveluser'] == 'admin') {
                            ?>
                                <a href="../delete/deletetransaksi.php?idtransaksi=<?php echo $row['idtransaksi'] ?>" class="btn btn-outline-danger print">DELETE</a>
                            </td>
                        <?php
                            } else {
                            }
                        ?>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </center>
    <br>
    <br>

    <?php
    if (@$_SESSION['leveluser'] == 'admin') {
    ?>

        <center> <a href="../tambah/inserttransaksi.php" class="btn btn-success btn-lg print">TAMBAHKAN TRANSAKSI</a></center>
    <?php
    } else {
    }
    ?>
</body>

</html>"