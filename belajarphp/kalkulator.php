<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class=" btn btn-warning col-md-6">
                <form action="" method="POST">
                    <div class="form-group mb-2">
                        <label for="">Nilai 1</label>
                        <input type="number" placeholder="0" class="" name="nilai_pertama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nilai 2</label>
                        <input type="number" placeholder="0" name="nilai_kedua">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2" name="tambah"> + </button>
                    <button type="submit" class="btn btn-primary mb-2" name="kurang"> - </button>
                    <button type="submit" class="btn btn-primary mb-2" name="kali"> x </button>
                    <button type="submit" class="btn btn-primary mb-2" name="bagi"> : </button>

                </form>
            </div>
            <!-- proses -->
            <?php
                if(isset($_POST["tambah"])){
                    $nilai_p=$_POST["nilai_pertama"];
                    $nilai_d=$_POST["nilai_kedua"];
                    $tambah=$nilai_p + $nilai_d;
                }else if (isset($_POST["kurang"])) {
                    $nilai_p=$_POST["nilai_pertama"];
                    $nilai_d=$_POST["nilai_kedua"];
                    $kurang=$nilai_p - $nilai_d;
                }elseif (isset($_POST["kali"])) {
                    $nilai_p=$_POST["nilai_pertama"];
                    $nilai_d=$_POST["nilai_kedua"];
                    $kali=$nilai_p * $nilai_d;
                }elseif (isset($_POST["bagi"])) {
                    $nilai_p=$_POST["nilai_pertama"];
                    $nilai_d=$_POST["nilai_kedua"];
                    $bagi=$nilai_p / $nilai_d;
                }
            ?>

            <div class="col-md-6">
                <div class="alert alert-primary" role="alert">
                    <?php echo"".!empty($tambah)?$tambah:''?>
                </div>
                <div class="alert alert-primary" role="alert">
                    <?php echo"".!empty($kurang)?$kurang:''?>
                </div>
                <div class="alert alert-primary" role="alert">
                    <?php echo"".!empty($kali)?$kali:''?>
                </div>
                <div class="alert alert-primary" role="alert">
                    <?php echo"".!empty($bagi)?$bagi:''?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>