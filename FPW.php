<?php
   
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $selector=bin2hex(random_bytes(8));
   $token=random_bytes(32);
   $url="www.canibuy.co.za/FPW.html?selector=".$selector."&validate=".bin2hex($token);
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
 
    $sql="INSERT INTO pwdRest(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?);";
    $stmt= mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:FPW.html?error=sqlerror");
    exit();
 }

 else{
 $hashedToken=password_hash($token, PASSWORD_DEFAULT);
 mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
 mysqli_stmt_execute($stmt);
 }

   mysqli_stmt_close($stmt);
   mysqli_close($conn);

 echo'
 <html>
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
    Body : "
    Hello, 
    we recieved a request from you to reset your account password on the canibuy.co.za site.
    We have generated a link for you to reset your password below. Please click on the link to change your password.
    
    Password reset link: www.canibuy.co.za/FPW.html?selector=".$selector."&validate=".bin2hex($token)
    
    If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us.
    "
}).then(
  message => alert(message)
);
}
sendemail();
</script> 
</html>
 ';

else{
 header("Location:FPW.html?error=posterror");
 exit();
}

   
