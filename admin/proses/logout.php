<?php
// memulai session
session_start();
// menghapus session
session_destroy();

// mengembalikan ke halaman login
header('location:../login.php');
?>