<?php
session_start();
if(isset($_SESSION["login"])) {
    header("Location: update.php");
}
require_once "function.php";
$id = $_GET["id"];
//query ubah catatan berdasarkan id
$perjalanan = query("SELECT * FROM tabel_catatan WHERE id = $id")[0];
    if(isset($_POST["submit"])) {
        //notification succesfully
        if(ubah($_POST) > 0 ) {
            echo"<script>
            alert('berhasil diubah');
            document.location.href = 'tabel.php';
            </script>";
        } else {
            echo"<script>
            alert('gagal diubah!');
            document.location.href = 'tabel.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image" href="pedulidiri.png">
    <style type="text/css">
         body {
            padding:50px;
            background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
            height: 100vh;
        }
        .container {
            max-width:600px;
            margin:0 auto;
            padding:50px;
            box-shadow:rgb(100,100,11,0.2) 0px 2px 29px 0px;
            background:white;
        }
        h3 {
            margin-bottom:30px;
        }
        .form-group {
            margin-bottom:30px;
           
        }
    </style>
    <title>ubah catatan</title>
</head>
<body>
<div class="container">
    <h3>ubah Catatan</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $perjalanan["id"]; ?>">
        <div class="form-group">
            <input type="time" class="form-control" name="jam" placeholder="jam" id="jam" required value="<?= $perjalanan["jam"]; ?>">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="tanggal" placeholder="tanggal" id="tanggal" required  value="<?= $perjalanan["tangga"]; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lokasi" placeholder="lokasi" id="lokasi" required  value="<?= $perjalanan["lokasi"]; ?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="suhu" placeholder="suhu" id="suhu" required  value="<?= $perjalanan["suhu"] ?>">
        </div>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Tambah" name="submit">
        </div>
    </form>
</div>
</body>
</html>