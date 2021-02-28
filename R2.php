<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $authtoken = $_GET['auth'];
   $sql='SELECT * FROM pwdrest WHERE pwdResetToken=?';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$authtoken);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
 if (!$count>0){
    header("Location:X1.php?error=expired");
    exit();
}
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="iofrm-theme17.css">
</head>
<body>
    <div class="form-body without-side">
        
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3><span style="color:orange">Create new password</span></h3>
     
                        <form action="pwdReset.php" method="post">
                            <input class="form-control" type="password" name="pwd" placeholder="Create Password" required>
                            <p id="invalidpassword" style="font-size:14px; color:red; display:none;">*Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character</p>
                            <p id="passwordmatch" style="font-size:14px; color:red; display:none;">*Passwords don't match</p>
                            <input class="form-control" type="password" name="pwdrepeat" placeholder="Repeat Password" required>
                            <input class="form-control" type="hidden" name="auth" value="<?php echo $authtoken; ?>" required>
                            <div class="form-button">
                            <button type="submit" class="ibtn" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script 
src="ShowHandlers.js" >
</script>
</html>
