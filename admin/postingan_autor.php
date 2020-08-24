<?php include 'header.php'?>

<?php
    function tambah($koneksi)
    {
        if(isset ($_POST['input_postingan'])){
            $id_user = $_SESSION['id_user'];
            $id =uniqid();
            $judul =$_POST['judul'];
            $konten=$_POST['konten'];
            $tgl_release=$_POST['tgl_release'];
            
            $foto =$_FILES['foto']['name'];
            if(move_uploaded_file($_FILES['foto']['tmp_name'],"upload/postingan/".$_FILES['foto']['name'])){
                echo 'berhasil di upload';
            }else{
                echo 'gagal di upload';
            }
            $query_input = mysqli_query($koneksi,"INSERT INTO postingan VALUES(md4('$id'),'$judul','$konten','$tgl_release','$foto','$id_user')");
        if($query_input){
            echo '<script>alert("data berhasil di input")
            window.location.href="postingan.php";
            window.history.back();
           
          </script>';

        }else{
            echo '<script>alert("data gagal di input")
            window.location.href="postingan.php";
          </script>';

        }
    
        }
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Postingan</h4>
                  <p class="card-description">
                    Masukkan Postingan
                  </p>
                  <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">judul</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="......" name="judul" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Tanggal Release</label>
                      <input type="date" class="form-control" id="exampleInputEmail3" placeholder="......." name="tgl_release">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Foto Utama</label>
                      <input type="file" class="form-control" id="exampleInputEmail3" placeholder="......." name="foto">
                    </div>
                    

                    <div class="form-group">
                    <textarea id="content" name="konten"></textarea>
                     </div>
                    
                    
                    <button type="submit" class="btn btn-success mr-2" name="input_postingan">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


            <?php
                function tampil_data($koneksi)
                {
                    $id_user = $_SESSION['id_user'];
                ?>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <label for="">Data User</label>
                <div class="table-responsive">
                <table class="table table-striped table-border data">
                  <thead>
                    <tr align="center">
                      <td>No</td>
                      <td>Judul</td>
                      <td>Konten</td>
                      <td>Tanggal Release</td>
                      <td>Foto Utama</td>  
                    </tr>
                  </thead>

                  <tbody>
                      
                    <?php
                     $show_query = mysqli_query($koneksi, "SELECT * FROM postingan WHERE id_user='$id_user'");
                      if(mysqli_num_rows($show_query)==0){
                        echo '<tr><td>tidak ada</td></tr>';
                      }else{
                        $no =1;
                        while ($data = mysqli_fetch_assoc($show_query)){
                          ?>

                          <tr align="center">
                            <td><?php echo $no?></td>
                            <td><?php echo $data['judul']?></td>
                            <td><?php echo $data['konten']?></td>
                            <td><?php echo $data['tgl_release']?></td>
                            <td><img src="upload/postingan/<?php echo $data['foto']; ?>" alt=""></td>
                            <td>
                            <a href="edit_user.php?id=<?php echo $data['id_user'] ?>" class="btn btn-warning">EDIT</a>
                            <a href="" class="btn btn-info">VIEW</a>
                            <a href="proses/proses_hapus.php?id=<?php echo $data['id_user'] ?>" onclick="return confirm('apakah anda yakin ingin menghapus')" class="btn btn-danger">HAPUS</a>
                          </td>
                          </tr>
                          <?php
                          $no++;
                        }
                      }
                    ?>
                    
                  </tbody>
                </table>
                </div>
              </div>
              </div>

          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                <i class="mdi mdi-heart text-danger"></i>
            </span>
        </div>
    </footer>
    <!-- partial -->
</div>
<?php
                    }
    
    }
?>

<?php

// logika proses aksinya
if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
        case "create":
            tambah($koneksi);
            tampil_data($koneksi);
            break;
        case "read":
            tampil_data($koneksi);
            break;
        case "update":
            ubah($koneksi);
            tampil_data($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>" . $_GET['aksi'] . "</i> tidak ada!</h3>";
            tambah($koneksi);
            tampil_data($koneksi);
    }
} else {
    tambah($koneksi);
    tampil_data($koneksi);
}

?>

<?php include 'footer.php'?>
<script src="vendors/summernote/dist/summernote.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#content').summernote({
            height: "100px",
            styleWithSpan: false
        });
    });
</script>
</body>
</html>