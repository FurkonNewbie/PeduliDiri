<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="pedulidiri.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <title>Login</title>
</head>
<body>
<div class="container">
<?php
session_start();
if(isset($_POST["login"])) {
    $nik  = $_POST["nik"];
    $nama = $_POST["nama"];

    require_once "function.php";
    $sql = "SELECT * FROM user WHERE nik = '$nik'";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_num_rows($result);
    if($users > 0) {
       $sesi = mysqli_query($conn, "SELECT * FROM user WHERE nik = '$nik' AND nama = '$nama'");
       $sesi = mysqli_fetch_assoc($sesi);
        $_SESSION['id']      = $sesi['id'];
        $_SESSION['nik']     = $sesi['nik'];
        $_SESSION['nama']    = $sesi['nama'];
        $_SESSION['status']  = "login";
            echo "<script>
            window.alert('Selamat datang di aplikasi catatan perjalanan:)')
            location.href='index.php';
            </script>";
    } else {
        echo "
        <script> 
        window.alert('Nik atau nama anda salah')
        location.href='login.php';
        </script>
        ";
    }
}

?>
    <h3>login</h3>
    <form action="login.php" method="post">
        <div class="form-group">
            <input type="number" class="form-control" name="nik" placeholder="masukan nomor nik">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="masukan nama anda">
        </div>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="login" name="login">
        </div>
    </form>
</div>
</body>
</html>
