<?php 
    include 'koneksi.php';

    $id = $_GET['id'];

    $query_delete = mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id'");

    if($query_delete){
        echo"<script>alert('data berhasil dhapus')
            window.location.href='../basic_elements.php';
        </script>";
    }else{
        echo"<script>alert('data berhasil dhapus')
            window.location.href='../basic_elements.php';
        </script>";
    }
?>