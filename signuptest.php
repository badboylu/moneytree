<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);

$sql="SELECT uidUsers FROM users WHERE uidUsers=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.php?error=SQL1");
       exit();
}
mysqli_stmt_bind_param($stmt,"s",$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:register.php?error=usernameexists");
       exit();
} 

$sql="SELECT emailUsers FROM users WHERE emailUsers=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.php?error=SQL2");
       exit();
}
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location:register.php?error=invalidemail"."&username=".$username);
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:register.php?error=emailexists"."&username=".$username);
       exit();
} 
   if($_POST['pwd'] != $_POST['pwdrepeat']){
       header("Location:register.php?error=pwdnomatch"."&username=".$username."&email=".$email);
       exit();
}

     $uppercase = preg_match('@[A-Z]@', $password);
     $lowercase = preg_match('@[a-z]@', $password);
     $number    = preg_match('@[0-9]@', $password);
     $specialChars = preg_match('@[^\w]@', $password);

   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
       header("Location:register.php?error=invalidpwd"."&username=".$username."&email=".$email);
       exit();
}

    $sql="INSERT INTO pwdrest (pwdResetEmail) VALUES (?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }

 mysqli_stmt_bind_param($stmt,"s",$email);
 mysqli_stmt_execute($stmt);


     header("Location:R4.php?signup=complete"."&username=".$uid."&email=".$email."&auth=".$hashedPwd);
     exit();
      
?>

