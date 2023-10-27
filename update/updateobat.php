<?php
include "../koneksi.php";
$id = $_GET ['idobat'];
$query = "SELECT * FROM tb_obat WHERE idobat= '$id'";
$hasil = mysqli_query($koneksi, $query);
while($data = mysqli_fetch_assoc($hasil)) {

?>
<html>
    <head>
        <title>Halaman Update Obat</title>
    </head>
    <style>
        h1{
            color: blue;
        }
    </style>
    <body>
        <center>
            <h1>Update Obat</h1>
        </center>
        <br>
        <form action="proses_update_obat.php" method="POST">
            <center>
            <table>
                <input type="hidden" name="idobat" value="<?php echo $data ['idobat']; ?>">
                <tr>
                    <td><label for="">Id Supplier</label></td>
                    <td>:</td>
                    <td>
                        <select name="idsupplier">
                        <?php
                        include ('../koneksi.php');
                        $idsupplier = $data['idsupplier'];
                        $querysupplier= "SELECT * FROM tb_supplier WHERE idsupplier=$idsupplier";
                        $hasilsupplier= mysqli_query($koneksi, $querysupplier);
                        while ($row= mysqli_fetch_assoc($hasilsupplier)){
                        ?>
                        <option selected value="<?php echo $row['idsupplier']; ?>">
                            <?php echo $row['perusahaan'];?>
                        </option>
                        <?php } ?>

                        <option value="">----------------------------------</option>

                        <?php
                        $querysupply = "SELECT * FROM tb_supplier";
                        $hasilsupply = mysqli_query($koneksi, $querysupply);
                        while ($row = mysqli_fetch_assoc($hasilsupply)){
                        ?>
                        <option value="<?php echo $row['idsupplier']; ?>">
                            <?php echo $row['perusahaan']; ?>
                        </option>
                        <?php } ?>
                    </select>
                    </td>
                </tr>
               
                <tr>
                    <td><label for="">Nama Obat</label></td>
                    <td>:</td>
                    <td><input type="text" name="namaobat" value="<?php echo $data['namaobat'];?>"></td>
                </tr>
                
                <tr>
                    <td><label for="">Kategori Obat</label></td>
                    <td>:</td>
                    <td><input type="text" name="kategoriobat" value="<?php echo $data['kategoriobat'];?>"></td>
                </tr>
                
                <tr>
                    <td><label for="">Harga Jual</label></td>
                    <td>:</td>
                    <td><input type="text" name="hargajual" value="<?php echo $data['hargajual'];?>"></td>
                </tr>
                
                <tr>
                    <td><label for="">Harga Beli</label></td>
                    <td>:</td>
                    <td><input type="text" name="hargabeli" value="<?php echo $data['hargabeli'];?>"></td>
                </tr>
                
                <tr>
                    <td><label for="">Stok Obat</label></td>
                    <td>:</td>
                    <td><input type="text" name="stokobat" value="<?php echo $data['stok_obat'];?>"></td>
                </tr>
                
                <tr>
                    <td><label for="">Keterangan</label></td>
                    <td>:</td>
                    <td><textarea name="keterangan" id="" cols="30" rows="10"><?php echo $data['keterangan']; ?></textarea></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Perbarui Data"</td>
                </tr>
            </table>
            </center>
        </form>
       
    </body>
</html>
                <?php
                    }
                    ?>