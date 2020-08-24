<?php 
    include 'koneksi.php';

    $id = $_GET['id'];

    $query_delete = mysqli_query($koneksi,"DELETE FROM biodata WHERE id_biodata='$id'");

    if($query_delete){
        echo"<script>alert('data berhasil dhapus')
            window.location.href='../typography.php';
        </script>";
    }else{
        echo"<script>alert('data berhasil dhapus')
            window.location.href='../typography.php';
        </script>";
    }
?>