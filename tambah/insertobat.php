<html>
    <head>
        <title>Halaman Insert Obat</title>
    </head>
    <style>
        h1{
            color: chartreuse;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <body>
        <center>
            <h1>Tambahkan Obat</h1>
        </center>
        <br>
        <form action="proses_insert_obat.php" method="POST">
            <center>
            <table>
                <tr>
                    <td><label for="">Id Supplier</label></td>
                    <td>:</td>
                    <td>
                        <select name="idsupplier"><?php
                        include ('../koneksi.php');
                        $query= "SELECT * FROM tb_supplier";
                        $hasil= mysqli_query($koneksi, $query);
                        while ($row= mysqli_fetch_assoc($hasil)){
                        ?>
                        <option value="<?php echo $row['idsupplier']; ?>"><?php echo $row['perusahaan'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </td>
                </tr>
               
                <tr>
                <div class="mb-3">
                    <td><label for="formGroupExampleInput" class="form-label">Nama Obat</label></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" id="formGroupExampleInput" name="namaobat"></td>
                    </div>
                </tr>
                
                <tr>
                    <div class="mb-3">
                    <td><label for="formGroupExampleInput2" class="form-label">Kategori Obat</label></td>
                    <td>:</td>
                    <td><input type="text" name="kategoriobat" class="form-control" id="formGroupExampleInput2"></td>
                    </div>
                </tr>
                
                <tr>
                    <div class="mb-3">
                    <td><label for="formGroupExampleInput3" class="form-label">Harga Jual</label></td>
                    <td>:</td>
                    <td><input type="text" name="hargajual"class="form-control" id="formGroupExampleInput3"></td>
                </tr>
                
                <tr>
                    <td><label for="">Harga Beli</label></td>
                    <td>:</td>
                    <td><input type="text" name="hargabeli"></td>
                </tr>
                
                <tr>
                    <td><label for="">Stok Obat</label></td>
                    <td>:</td>
                    <td><input type="text" name="stokobat"></td>
                </tr>
                
                <tr>
                    <td><label for="">Keterangan</label></td>
                    <td>:</td>
                    <td><textarea name="keterangan" id="" cols="30" rows="10"></textarea></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan Data"</td>
                </tr>
            </table>
            </center>
        </form>
       
    </body>
</html>