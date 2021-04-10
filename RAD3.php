<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$email=$_POST['email'];
$username='Alfa-'.$_POST['uid'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
date_default_timezone_set('Africa/Johannesburg');
$date=date("Y-m-d");


$sql="SELECT idAlfa FROM alfauser WHERE idAlfa=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RAD2.php?error=SQL1");
       exit();
}
mysqli_stmt_bind_param($stmt,"s",$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:RAD2.php?error=usernameexists");
       exit();
} 
$sql="SELECT idEmail FROM alfauser WHERE idEmail=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RAD2.php?error=SQL2");
       exit();
}
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location:RAD2.php?error=invalidemail");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:RAD2.php?error=emailexists");
       exit();
} 
   if($_POST['pwd'] != $_POST['pwdrepeat']){
       header("Location:RAD2.php?error=pwdnomatch");
       exit();
}
     $uppercase = preg_match('@[A-Z]@', $password);
     $lowercase = preg_match('@[a-z]@', $password);
     $number    = preg_match('@[0-9]@', $password);
     $specialChars = preg_match('@[^\w]@', $password);
   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
       header("Location:RAD2.php?error=invalidpwd");
       exit();
}
    $sql="INSERT INTO alfauser (idAlfa, idEmail, idPassword, idDate) VALUES(?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RAD2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedPwd,$date);
     mysqli_stmt_execute($stmt);
     $sql="DELETE FROM pwdrest WHERE pwdResetEmail='".$email."' ";
     mysqli_query($conn,$sql);
     header("Location:Signin.php?signup=successful");
     exit();
?>
