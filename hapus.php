<?php
require "function.php";
$id = $_GET["id"];
if(hapus($id) > 0 ) {
    echo"<script>
    alert('berhasil dihapus');
    document.location.href = 'tabel.php';
    </script>";
} else {
    echo"<script>
    alert('gagal dihapus!');
    document.location.href = 'tambah.php';
    </script>";
}

?>