
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
    <title>Register</title>
</head>
<body>
<div class="container">
    <?php 
    if(isset($_POST["submit"])) {
        $nik  = $_POST["nik"];
        $nama = $_POST["nama"];

        $errors = array();

        if(empty($nik) OR empty($nama)) {
            array_push($errors,"All fields  required");
        }
        if(!filter_var($nik)) {
            array_push($errors,"Nik anda tidak sesuai!");
        }
        if(!filter_var($nama)) {
            array_push($errors, "Nama anda tidak sesuai atau nama anda salah!");
        }
        require_once "function.php";
        $sql ="SELECT * FROM user WHERE nik = '$nik'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if($rowCount>0) {
            array_push($errors,"Emil already exitsts");
        }
        if(count($errors)>0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            //we will insert into database
           
            $sql = "INSERT INTO user (nik, nama) VALUES (? , ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ss",$nik,$nama);
                mysqli_stmt_execute($stmt);
                echo"<div class='alert alert-succes' >Anda berhasi registrasi!</div>";
            } else {
                die("Ada sesuatu yang salah!");
            }
        }
    }

    ?>
    <h3>registrasi</h3>
    <form action="register.php" method="post">
        <div class="form-group">
            <input type="number" class="form-control" name="nik" placeholder="masukan nomor nik">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="masukan nama anda">
        </div>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="register" name="submit">
            <p>sudah mempunyai akun?<a href="login.php"> klik disini</a></p>
        </div>
    </form>
</div>
</body>
</html>