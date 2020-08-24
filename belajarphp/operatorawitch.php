<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $username='operator';
        $password='1111';

        switch ($username=='admin'&&$password=='1234') {
            case 'admin'&& '1234':
                echo"selamat datang admin";
                break;
                
           
        }
        switch ($username=='operator'&& $password=='1111') {
            case 'operator' && '1111':
                echo"selamat datang operator";
                    break;
            
            
        }
    ?>
    <?php
       $username='operator';
       $password='1111';

       switch (true) {
           case ($username=='admin' && $password=='1234'):
               echo"selamat datang admin";
               break; 
            case ($username=='operator' && $password=='1111'):
                echo"selamat datang operator";
                break;
            default:
            break;
        }
    ?>
</body>
</html>