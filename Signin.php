<!DOCTYPE html>
<?php

if($_GET['error'] == 'wrnguid'){

  echo 'done';
  exit();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="iofrm-theme17.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="LoginBackground.jpg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Welcome! <br> Login to <span style="color:orange;">canibuy</span></h3>
                        <p style="color:green;" >Cannibus Health Store</p>
                        
                        <form action="logintest.php" method="post">
                            <input class="form-control" type="text" name="uid" placeholder="E-mail/Username" required>
                            <p id="username" style="font-size:14px; color:red; display:none;">*incorrect username/email</p>
                            <input class="form-control" type="password" name="pwd" placeholder="Password" required>
                            <p id="password" style="font-size:14px; color:red; display:none;">*incorrect password</p>
                            <div class="form-button">
                                <button type="submit" class="ibtn" >Login</button> 
                               <a href="FPW.html">Forgot password?</a>
                            </div>
                        </form>
                      
                        <div class="page-links">
                            <br>
                            <a href="register.html">Register new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
