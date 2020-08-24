<?php
    $localhost='localhost';
    $user='root';
    $password='';
    $db='web_berita';

    $koneksi = mysqli_connect($localhost,$user,$password,$db);
    if($koneksi){
        

    }elseif(!$koneksi){
        echo"<script>alert('gagal Konek')</script>";
    }
?>