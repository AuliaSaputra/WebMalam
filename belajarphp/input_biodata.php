<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        td{
            position: relative;
            padding-left: 100px;
        }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <table align="center" style=" left: 20px; position: relative;">
    <tr>
        <td><label for="">Nama lengkap</label></td>
        <td><input type="text" name="nama_lengkap"></td>
    </tr>

    <tr>
        <td><label for="">Tanggal lahir</label></td>
        <td><input type="date" name="tgl"></td>
    </tr>

    <tr>
        <td><label for="">Tempat Lahir</label></td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>

    <tr>
        <td><label for="">Jenis Kelamin</label></td>
        <td><input type="radio" name="jk" value="laki-laki">laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
        </td>
    </tr>

    <tr>
        <td><label for="">hoby</label></td>
        <td>
            <input type ="checkbox" value="membaca" name="membaca">membaca
            <input type ="checkbox" value="memasak" name="memasak">memasak
            <input type ="checkbox" value="mancing" name="mancing">mancing
        </td>
    </tr>

    <tr>
        <td><label for="">Alamat</label></td>
        <td><textarea placeholder="masukan alamat" name="alamat"></textarea></td>
    </tr>
    <tr>
        <td><label for="">Kabupaten/kota</label></td>
        <td><select name ="kabkot">
				<option value="banda aceh">banda aceh</option>
				<option value="aceh besar">aceh besar</option>
				<option value="pidie">pidie</option>
				<option value="aceh jaya">aceh jaya</option>
				<option value="simeule">simeuleu</option>
			</select></td>
    </tr>
    <tr>
        <td><label for="">Pendidikan</label></td>
        <td><select name ="pendidikan">
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select></td>
    </tr>
    <tr>
        <td><label for="">Pekerjaan</label></td>
        <td><input type="text" name="pekerjaan"></td>
    </tr>
    <tr>
        <td><label for="">Agama</label></td>
        <td><select name ="agama">
				<option value="islam">Islam</option>
				<option value="kristen">Kristen</option>
				<option value="hindu">hindu</option>
				<option value="budha">budha</option>
				
			</select></td>
    </tr>
    <tr>
        <td><label for="">Foto</label></td>
        <td><input type="file" name="foto"></td>
    </tr>

    <tr>
        <td><label for="">Password</label></td>
        <td><input type="password" name="pass"></td>
    </tr>

    <tr>
        <td><label for="">Username</label></td>
        <td><input type="text" name="user"></td>
    </tr>

    <tr>
        <td>
            <input type="submit" name="input" value="Tampilkan">                                                                                                                                                                                                      
        </td>
        <td><input type="reset" name="" value="Reset"></td>
    </tr>
    

    </table>
    </form>

    <?php
        if(isset($_POST["input"])){
            $nama =$_POST["nama_lengkap"];
            $tanggal=$_POST["tgl"];
            $tempat_lahir=$_POST["tempat_lahir"];
            $jk=!empty($_POST["jk"])?$_POST["jk"]:'';
            $hobby1=!empty($_POST["membaca"])?$_POST["membaca"]:'';
            $hobby2=!empty($_POST["memasak"])?$_POST["memasak"]:'';
            $hobby3=!empty($_POST["mancing"])?$_POST["mancing"]:'';
            $alamat=$_POST["alamat"];
            $kabupaten=$_POST["kabkot"];
            $pendidikan=$_POST["pendidikan"];
            $pekerjaan=$_POST["pekerjaan"];
            $agama=$_POST["agama"];

            $foto=$_FILES["foto"]["name"];
            if(move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$_FILES['foto']['name'])){
                echo"berhasil di upload";
            }else {
                echo"gagal di upload";
            };
            $password=$_POST["pass"];
            $username=$_POST["user"];

            echo"$nama <br> 
            $tanggal <br> 
            $tempat_lahir<br>
            $jk<br>
            $hobby1<br>
            $hobby2<br>
            $hobby3<br>
            $alamat<br>
            $kabupaten<br>
            $pendidikan<br>
            $pekerjaan<br>
            $agama<br>
            <img src ='img/$foto'> <br>
            $password<br>
            $username<br>";
        }
    
        
    ?>
    <script src="js/bootstrap.js"></script>
    

    
</body>
</html>