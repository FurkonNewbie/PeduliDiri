<?php
require_once "function.php";
    if(isset($_POST["submit"])) {
        //notification succesfully
        if(tambah($_POST) > 0 ) {
            echo"<script>
            alert('berhasil ditambahkan');
            document.location.href = 'tabel.php';
            </script>";
        } else {
            echo"<script>
            alert('gagal ditambahkan!');
            document.location.href = 'tambah.php';
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
    <title>Isi catatan</title>
</head>
<body>
<div class="container">
    <h3>Isi Catatan</h3>
    <form action="" method="post">
        <div class="form-group">
            <input type="time" class="form-control" name="jam" placeholder="jam" id="jam" required>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="tanggal" placeholder="tanggal" id="tanggal" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lokasi" placeholder="lokasi" id="lokasi" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="suhu" placeholder="suhu" id="suhu" required>
        </div>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Tambah" name="submit">
        </div>
    </form>
</div>
</body>
</html>