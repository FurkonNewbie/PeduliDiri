<?php
    //connecting to database
    $hostName   = "localhost";
    $dbUser     = "root";
    $dbPassword = "";
    $dbName     = "codingan_salis";

    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong");
    }
    //function all variable
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;

   
    }
    function tambah($data) {
        global $conn;
        $jam        = $data["jam"];
        $tanggal    = $data["tanggal"];
        $lokasi     = htmlspecialchars($data["lokasi"]);
        $suhu       = $data["suhu"];

        $query = "INSERT INTO tabel_catatan VALUES ('', '$jam', '$tanggal', '$lokasi', '$suhu')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapus($id) {
        global $conn;
        mysqli_query($conn,"DELETE FROM tabel_catatan WHERE id = '$id'");
        return mysqli_affected_rows($conn);
    }
    function ubah($data) {
        
        global $conn;
        $id         = $data["id"];
        $jam        = $data["jam"];
        $tanggal    = $data["tanggal"];
        $lokasi     = htmlspecialchars($data["lokasi"]);
        $suhu       = $data["suhu"];

        $query = "UPDATE tabel_catatan SET jam = '$jam', tanggal = '$tanggal', lokasi = '$lokasi', suhu = '$suhu' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
