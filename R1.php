<?php
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $auth=$_GET['auth'];
   $email=$_GET['email'];
   $sql="SELECT * FROM pwdrest WHERE pwdResetEmail=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
 if (!$count>0){
    $count='0';
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
                        <h3><span style="color:green"> Password reset link sent! <?php echo $count; ?></span></h3>
                        
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
let count="<?php echo $count; ?>";
if(count=="0"){
Email.send({
    Host : "mail.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : '<?php echo $email; ?>',
    From : "no-reply@canibuy.site",
    Subject : "Reset Canibuy password",
    Body : '<p>Hello <?php echo $username; ?>,</p><p><span style="color:orange">canibuy</span> recieved a request to reset your account password. A link has been generated for you to <span style="color:green">reset</span> your password below. Please click on the link below to change your password.</p><p><a href="https://www.canibuy.co.za/R2.php?auth=<?php echo $auth; ?>"> Password reset link </a></p><p>If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us.</p><p>Thank you</p>'              
  });
 }
}
sendemail();
</script> 
</html>
<?php
if(!$count>0){
$sql="INSERT INTO pwdrest (pwdResetEmail,pwdResetToken,pwdResetDate) VALUES (?,?,?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }

 mysqli_stmt_bind_param($stmt,"sss",$userEmail,$auth,$date);
 mysqli_stmt_execute($stmt);
?>
