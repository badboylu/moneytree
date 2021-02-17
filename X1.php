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
                        <h3><span style="color:orange">Link expired</span></h3>
                        
                        <p>This link has been used. If need be, please request a new link from the site.</p>
                        <p><div class="page-links">
                        <a href="Signin.php"><span style="color:green">Login<span></a>
                        </div></p>
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

 mysqli_stmt_bind_param($stmt,"sss",$email,$auth,$date);
 mysqli_stmt_execute($stmt);
}
?>
