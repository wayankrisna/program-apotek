<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body><br><br><br>
<table>
<form action="proses_insert_login.php" method="post">
<br>
<center>
    <h2>SILAHKAN REGISTER</h2>
    </center>
    <br>
    <select name = "idkaryawan">
            <?php
            include "../koneksi.php";      
$querykaryawan = "SELECT * from tb_karyawan WHERE idkaryawan NOT IN (SELECT idkaryawan from tb_login)";
$hasilkaryawan = mysqli_query($koneksi, $querykaryawan);
$cek = mysqli_num_rows($hasilkaryawan);
while ($row = mysqli_fetch_assoc($hasilkaryawan)){
    if ($cek > 0){
        ?>
        <center><option value="<?php echo $row['idkaryawan']; ?>"><?php echo $row['namakaryawan'];?></option>
        <?php
    } else {
        ?>
        <option value="">Semua karyawan sudah register</option>
        <?php
    } 
    }
    ?> 
        </select> <br>
    <div class="row justify-content-center">
        <div class="form-floating col-4">
            <input type="text" class="form-control" id="floatingInput" required name="username">
            <label for="floatingInput">USERNAME : </label>
        </div>
            <div class="form-floating col-12">
            </div>
            <br>
        <div class="form-floating col-4">
            <input type="text" class="form-control" id="floatingInput" required name="password">
            <label for="floatingInput">PASSWORD :</label>
        </div>
        <div class="form-floating col-4">
            <input type="text" class="form-control" id="floatingInput" required name="leveluser">
            <label for="floatingInput">LEVEL USER :</label>
        </div>
        <div class="form-floating col-12">
            </div>
            <br>
        <div class="form-floating col-1">
            <button type="submit" class="btn btn-success">INSERT</button>
        </div>
    </div>
    </form>
    </table>
</body>
</html>
