<?php
   
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $auth=bin2hex(random_bytes(8));
   $date = date("Y-m-d");
   date_default_timezone_set('Africa/Johannesburg');
   $userEmail=$_GET["email"];
 
  $sql="SELECT * FROM users WHERE emailUsers=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }
   mysqli_stmt_bind_param($stmt,"s",$userEmail);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
 if (!$count>0){
    header("Location:Reset.php?error=emailnotfound");
    exit();
 }

$sql="INSERT INTO pwdrest (pwdResetEmail,pwdResetToken,pwdResetDate) VALUES (?,?,?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }

 mysqli_stmt_bind_param($stmt,"sss",$userEmail,$auth,$date);
 mysqli_stmt_execute($stmt);

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
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
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
                        <h3><span style="color:green"> Password reset link sent!</span></h3>
                        
                        <p>Check your email for the link to reset your password</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
function sendemail(){
Email.send({
    Host : "mail.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : 'liyandza.magagula@gmail.com',
    From : "no-reply@canibuy.site",
    Subject : "Reset Canibuy password",
    Body : '<p>Hello,</p><p>we have recieved a request to reset your account password on the canibuy site. We have generated a link for you to reset your password below. Please click on the link below to change your password.</p><p><a href="https://www.canibuy.co.za/R2.php?auth=<?php echo $auth; ?>"> Password reset link </a></p><p>If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us. Thank you</p>'              
});
}
sendemail();
</script> 
</html>
