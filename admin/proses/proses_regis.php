<?php
    include 'koneksi.php';

    if(isset($_POST['regis'])){
        $id=uniqid();
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $email=$_POST['email'];
        $nohp=$_POST['nohp'];
        $ps= !empty ($_POST['persetujuan'])?$_POST['persetujuan'] :'';
        $level='autor';
        
        $query_input=mysqli_query($koneksi,"INSERT INTO user VALUES(md5('$id'),'$username','$email',md5('$password'),'$nohp','$ps','$level')" );

        if($query_input){
            echo'<script>alert("data berhasil di input")
            window.location.href="../login.php";
            </script>';
        }else{
            echo'<script>alert("data berhasil di input")
            window.location.href="../register.php";
            </script>';
        }
    }
?>