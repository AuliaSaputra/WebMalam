<?php
    include 'koneksi.php';

    if(isset($_POST['update_user'])){
        $id=$_POST['id_user'];
        $username=$_POST['user'];
        // $password=$_POST['pass'];
        $email=$_POST['email'];
        $nohp=$_POST['nohp'];
        $level=$_POST['level'];

        $password = !empty($_POST['pass']) ? $_POST['pass'] : '';
    if ($password != null) {
        $pass = md5($password);
    } else {
        $show = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
        $data = mysqli_fetch_array($show);
        $pass = $data['password'];
    }

        $query_update=mysqli_query($koneksi,"UPDATE user SET username='$username',email='$email',password='$pass',no_hp='$nohp',level='$level' WHERE id_user='$id'");
        if($query_update){
            echo"<script>alert('data berhasil diupdate')
            window.location.href='../basic_elements.php';
        </script>";
        }else{
            echo"<script>alert('gagal di update)
            window.location.href='../edit_user.php';
        </script>";
        }
        }else{
            echo"<script>window.history.back()</script>";
    }
?>
    
        