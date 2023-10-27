<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body><br><br><br>
<table>
<form action="proses_insert_karyawan.php" method="post">
<br>
<center>
    <h2>Masukan Data Karyawan</h2>
    </center>
    <br>
        <tr>
            <td><label for="" hidden>ID Karyawan</label></td>
            <td hidden >:</td>
            <td hidden > <input type="text" name="idkaryawan"></td>
        </tr>
    <div class="row justify-content-center">
        <div class="form-floating col-4">
            <input type="text" class="form-control" id="floatingInput" required name="namakaryawan">
            <label for="floatingInput">Nama Karyawan</label>
        </div>
            <div class="form-floating col-12">
            </div>
            <br>
        <div class="form-floating col-4">
            <input type="text" class="form-control" id="floatingInput" required name="alamat">
            <label for="floatingInput">Alamat</label>
        </div>
        <div class="form-floating col-12">
            </div>
            <br>
        <div class="form-floating col-4">
            <input type="text" class="form-control" id="floatingInput" required name="telp">
            <label for="floatingInput">Telp</label>
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