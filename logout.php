<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
echo"<script>
            alert('anda yakin ingin keluar dari akun ini? ');
            document.location.href = 'login.php';
            </script>";
?>