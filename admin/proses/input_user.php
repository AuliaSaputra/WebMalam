<?php
include 'koneksi.php';
    if(isset($_POST['input_user'])){
        $id=uniqid();
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $email=$_POST['email'];
        $nohp=$_POST['nohp'];
        $level=$_POST['level'];
        
        $query_input = mysqli_query($koneksi,"INSERT INTO user VALUES(md5('$id'),'$username','$email',md5('$password'),'$nohp','','$level')" );

        if($query_input){
            echo'<script>alert("data berhasil di input")
            window.location.href="../basic_elements.php";
            </script>';
        }
    }
?>