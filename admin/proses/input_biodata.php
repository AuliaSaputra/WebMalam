<?php
include 'koneksi.php';
    if(isset($_POST['input_biodata'])){
        $id=uniqid();
        $nama=$_POST['nama'];
        $tgl_lahir=$_POST['tgl_lahir'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $alamat=$_POST['alamat'];
        $jk=$_POST['jk'];
        // $foto=$_POST['foto'];
        $foto=$_FILES["foto"]["name"];
            if(move_uploaded_file($_FILES['foto']['tmp_name'],"../upload/biodata/".$_FILES['foto']['name'])){
                echo"gambar berhasil di input";
            }else {
                echo'gambar gagal di input';
            };
        $id_user=$_POST['id_user'];
        
        $query_input = mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id','$nama','$tgl_lahir','$tempat_lahir','$alamat','$jk','$foto','$id_user')" );

        if($query_input){
            echo'<script>alert("data berhasil di input")
            window.location.href="../typography.php";
            </script>';
        }
    }
?>