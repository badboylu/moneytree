<?php
   
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $auth=bin2hex(random_bytes(8));
   $expires=date("U")+1800;
   $userEmail=$_GET["email"];
   $sql="DELETE FROM pwdReset WHERE pwdResetEmail=?";
   $stmt=mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:FPW.html?error=sqlerror");
    exit();
 }

 else{
 mysqli_stmt_bind_param($stmt,"s",$userEmail);
 mysqli_stmt_execute($stmt);
 }
 
    $sql="INSERT INTO pwdRest(pwdResetEmail,pwdResetSelector,pwdResetExpires) VALUES (?,?,?);";
    $stmt= mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:FPW.html?error=sqlerror");
    exit();
 }

 else{
 mysqli_stmt_bind_param($stmt,"sss",$userEmail,$auth,$expires);
 mysqli_stmt_execute($stmt);
 }

   mysqli_stmt_close($stmt);
   mysqli_close($conn);

else{
 header("Location:FPW.html?error=posterror");
 exit();
}
?>
<html>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
function sendemail(){
Email.send({
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : 'liyandza.magagula@gmail.com',
    From : "no-reply@canibuy.site",
    Subject : "Reset Canibuy password",
    Body : '<p>Hello,</p><p>we have recieved a request to reset your account password on the canibuy site. We have generated a link for you to reset your password below. Please click on the link below to change your password.</p><p><a href="www.canibuy.co.za/FPW.php?selector=<?php echo $auth; ?>"> Password reset link </a></p><p>If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us. Thank you</p>'              
}).then(
  message => alert(message)
);
}
sendemail();
</script> 
</html>

   
