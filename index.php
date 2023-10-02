<?php

if(isset($_SESSION["nama"])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image" href="pedulidiri.png">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap');
* {
    text-decoration: none;
    list-style: none;
    margin:0;
    padding:0;
}
body {
    margin:0px;
    font-family: 'Prompt', sans-serif;
    background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
    height: 100vh;
    
}

.navbar {
    padding:20px;
    font-size:14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    background:white;
}
.navbar-left img {
    width:50px;
    margin-right:20px;
}
.navbar-left div {
    text-transform: uppercase;
    font-weight: 600;
}
.navbar-left div a {
    text-decoration:none;
    list-style:none;
    color:black;
}
.navbar-left div a:hover,
.btn-logout:hover {
    color:#00754a;
}
.navbar-left div:hover,
.btn-logout:hover {
    color:#00754a;
}
.navbar-right div:hover,
.btn-logout:hover {
    color:#00754a;
}
.navbar-right div a {
    text-decoration:none;
    list-style:none;
    color:white;
}
.navbar-left,
.navbar-right {
    display: flex;
    align-items: center;
}
.navbar-left>*,
.navbar-right>* {
    margin:10px;
}
.btn-logout{
    display: flex;
    align-items: center;
    font-weight: 500;
}
.LogOut {
    font-weight: 500;
    border: 1px solid black;
    border-radius: 40px;
    padding:5px 20px 5px 20px;
    background-color: black;
    color: white;
}
.LogOut:hover {
    background-color: rgba(0,0,0,0.7);
}
@media (max-width:952px) {
    img.block {
        font-size:30px;
        padding-left: 50px;
    }
   
}
.container1 {
            width:100%;
            height:100vh;
            padding-left:8%;
            padding-right:8%;
            box-sizing: border-box;
        }
        .navbar1 {
            height:12%;
            display: flex;
            align-items: center;
        }
        .menu-icon {
            width:30px;
            margin-left:40px;
        }
        nav {
            flex:1;
            text-align: right;
        }
        nav ul li {
            display: inline-block;
            margin-left: 60px;
        }
        .row1 {
            display: flex;
            height:88%;
            align-items:center;
        }
        .col1 {
            flex-basis:50%;
        }
        h2 {
            font-size:80px;
            color:#fff;
        }
        p {
            font-size:11px;
            line-height: 15px;
            color:#fff;
        }
        .card {
            width:200px;
            height:230px;
            display: inline-block;
            border-radius: 10px;
            padding:15px 25px;
            box-sizing:border-box;
            cursor: pointer;
            margin:10px 15px;
            background-position:center;
            background-size:cover;
            transition: transform 0.5s;
        }
        .card1 {
            background-image:url(img/sehat.jpg);
        }
        .card2 {
            background-image:url(img/images.jpg);
        }
        .card3 {
            background-image:url(img/work.jpg);
        }
        .card:hover {
            transform: translateY(-10px);
        }
    </style>
    <title>Dashbord</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Catatan Perjalanan</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left"> 
            <img src="pedulidiri.png" alt="" class="block" focusable="false" height="100%" viewBox="0 0 62 62" width="100%">
            <div><a href="index.php"> Home</a></div>
            <div><a href="tabel.php">Catatan Perjalanan</a></div> 
            <div><a href="tambah.php">Isi Catatan</a> </div>
        </div>
        <div class="navbar-right">
           <div class="btn-logout">
            
            <div class="LogOut"><a href="logout.php"> LogOut</a></div>
           </div>
        </div>
    </div>
    <div class="container1">
        <div class="navbar1">
            <img src="" alt="">
            <nav>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </nav>
            <img src="" alt="" class="menu-icon">
        </div>
        <div class="row1">
            <div class="col1">
                <h2>Jagalah kesehatan!</h2>
                <p>Menjaga kesehatan dan kebugaran tubuh merupakan hal yang sangat penting. Hal ini karena dengan memiliki tubuh yang sehat dan bugar dapat mencegah tubuh terserang penyakit sehingga kita dapat tetap menjalankan aktifitas sehari-hari.</p>
            </div>
            <div class="col1">
                <div class="card card1">
                  
            </div>
            <div class="card card2">
               
        </div>
        <div class="card card3">
            
    </div>
        </div>
    </div>
</body>
</html>
</body>
</html>