<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nilai_quiz = 80;
        $nilai_tugas = 80;
        $nilai_uts = 80;
        $nilai_uas = 80;

        $nilai_akhir=((0.10*$nilai_quiz)+(0.20*$nilai_tugas)+(0.30*$nilai_uts)+(0.40*$nilai_uas));
        
        if($nilai_akhir >=85){
            echo"Grade A";
            echo" <br> Nilai khir = ".$nilai_akhir;
        }else if($nilai_akhir >=73){
            echo"Grade B";
            echo" <br> Nilai Akhir = ".$nilai_akhir;
        }else{
            echo"Noooooooooo";
        }

    ?>
    <hr>

    <?php
        $uang=60000;
        $aqua=3000;
        $mie_instan=2500;
        $saus=5000;
        $bayar=(($aqua*2)+($mie_instan*3)+($saus*1));
        $sisa=($uang - $bayar);

        echo"yang harus dibayar : ".$bayar;
        echo"<br> uang kembali : ".$sisa;
    ?>
</body>
</html>