<?php
session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){

        $username=$_POST['user'];
        $password=md5($_POST['pass']);
        $query=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
        $cek=mysqli_num_rows($query);
        $data=mysqli_fetch_assoc($query);

        if ($cek > 0) {
            if($data['level']== 'admin'){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['id_user'] = $data['id_user'];
                echo"<script> alert('selamat datang admin')
                        window.location.href='../index.php';
                </script>";

            }
            elseif($data['level']== 'operator'){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['id_user'] = $data['id_user'];
                echo"<script> alert('selamat datang operator')
                        window.location.href='../index.php';
                </script>";
            }
            elseif($data['level']== 'autor'){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['id_user'] = $data['id_user'];
                echo"<script> alert('selamat datang autor')
                        window.location.href='../index.php';
                </script>";
            }else{
                header("location:../login.php?pesan=gagal");
            }  

        }else{
            header("location:../login.php");
        }

    }
?>