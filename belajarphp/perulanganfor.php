<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=1;

        for ($a=1; $a<=5; $a++) { 
            echo" <br> hallo apa kabar";
        }
    ?>
    <hr>

    <?php
        // contoh 1
        for ($i=1; $i<=10 ; $i++) { 
            echo"$i";
        }echo"<br>";

        // contoh 2
        for ($i=1;  ;$i++) {
            if ($i>10)
        break;
        }

        // contoh 3
        $i=1;
        for(; ;){
            if ($i>10){
            break;
            }
            echo"$i";
            $i++;
        }echo"<br>";

        // contoh 4
        for($i =1; $i<=10; print "$i". $i++);
    ?>
    <hr>

    <?php
    // menampilkan jumlah angka yang dipilih dengan array sebanyak jumlah array
        $hewan=array("ayam","kambing","kucing","sapi");

        foreach($hewan as $key => $data){
            echo"<br>".$hewan[2];
        }


        $angka=array(1,2,3,4);

        foreach($angka as $key => $data){
            echo"<br>".$angka[2]*$angka[3];
        }

    ?>
        <hr>
        <?php
            $i=1;
            for ($i=0; $i <=20 ; $i=+2) { 
                
                    echo"," .$i;
                }
            
            
            $i=1;
            for ($i=1; $i <=20 ; $i++) { 
                if($i%2==1){
                    echo"," .$i;
                }
            }

            $i=1;
            for ($i=1; $i <=100 ; $i++) { 
                if($i){
                    echo"<br>" .$i;
                }
            }
        ?>
</body>
</html>