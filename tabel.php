<?php
    require "function.php";
    $catatan = query("SELECT * FROM tabel_catatan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image" href="pedulidiri.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
          @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap');
* {
    text-decoration: none;
    list-style: none;
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
/* css table */
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody {
    background:white;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
.container {
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}
.container table {
    width:1200px;
    padding:50px;
    margin-bottom:500px;
    
}
    </style>
    <title>Data Catatan</title>
</head>
<body>
<div class="navbar">
        <div class="navbar-left"> 
            <img src="pedulidiri.png" alt="" class="block" focusable="false" height="100%" viewBox="0 0 62 62" width="100%">
            <div><a href="index.php"> Home</a></div>
            <div><a href="tabel.php">Catatan Perjalanan</a></div> 
        </div>
        <div class="navbar-right">
           <div class="btn-logout">
           </div>
        </div>
    </div>
    <div class="container">
    <table class="styled-table">
        <thead>
        <tr>
            <th>No</th>
            <th>jam</th>
            <th>tanggal</th>
            <th>lokasi</th>
            <th>suhu</th>
            <th>opsi</th>
        </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach( $catatan as $row ) : ?>
            <tbody>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["jam"]; ?></td>
                <td><?= $row["tanggal"]; ?></td>
                <td><?= $row["lokasi"]; ?></td>
                <td><?= $row["suhu"]; ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"]; ?>"><i class="fa-solid fa-pen"></i></a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('apakah anda yakin ingin menghapus data ini?');"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
    </div>
</body>
</html>