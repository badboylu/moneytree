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
   $userEmail=$_POST["email"];
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
   
   $to=$userEmail;
   $subject='Reset Kush Lord password';
   $message='<p> We have received a request for a password reset. Please follow the link below to reset your password.</p>';
   $message='<p> Reset link: <br>' ;
   $message='<a href="'.$url.'">'.$url.'</a></p>';
   $headers="From:Kush Lord<admin@kushlord.co.za>\r\n";
   $headers="Content-type:text/html\r\n";
   mail($to,$subject,$message,$headers);
   header("Location:FPW.html?reset=success");

else{
 header("Location:FPW.html?error=posterror");
 exit();
}

   
