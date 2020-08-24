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
    <nav class="navbar navbar-dark" style="background-color: #142266;">
            <a class="navbar-brand" href="#">
                <img src="/docs/4.5/asset/brand/bootstrap-solid.svg" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
                web penjualan
            </a>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="budi">Email Address</label>
                        <input type="email" class="form-control" id="budi" aria-describedby="emaiHelp" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass"  name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">submit</button>

                </div>
               


                </form>
            </div>
            <div class="col-md-4"></div>
        </div>

</div>
<?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['pass'];

        if($email == 'budi@budi' && $password =='1234'){
            echo"<script>alert('selamat datang')</script>";
        }else{
            echo"<script>alert('anda siapaaa ')</script>";
        }
    }
?>
<script src="js/bootstrap.js"></script>
        
</body>
</html>