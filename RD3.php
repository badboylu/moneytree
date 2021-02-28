<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$province=$_GET['province'];
$city=$_GET['city'];
$area=$_GET['area'];
$email=$_GET['email'];
$username='Distro-'.$_GET['uid'];
$password=$_GET['pwd'];
$passwordrepeat=$_GET['pwdrepeat'];
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
date_default_timezone_set('Africa/Johannesburg');
$date=date("Y-m-d");


$sql="SELECT idDistro FROM distrouser WHERE idDistro=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RD2.php?error=SQL1");
       exit();
}
mysqli_stmt_bind_param($stmt,"s",$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:RD2.php?error=usernameexists");
       exit();
} 
$sql="SELECT idEmail FROM distrouser WHERE idEmail=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RD2.php?error=SQL2");
       exit();
}
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location:RD2.php?error=invalidemail"."&username=".$username);
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:RD2.php?error=emailexists"."&username=".$username);
       exit();
} 
   if($_GET['pwd'] != $_GET['pwdrepeat']){
       header("Location:RD2.php?error=pwdnomatch"."&username=".$username."&email=".$email);
       exit();
}
     $uppercase = preg_match('@[A-Z]@', $password);
     $lowercase = preg_match('@[a-z]@', $password);
     $number    = preg_match('@[0-9]@', $password);
     $specialChars = preg_match('@[^\w]@', $password);
   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
       header("Location:RD2.php?error=invalidpwd"."&username=".$username."&email=".$email);
       exit();
}
    $sql="INSERT INTO distrouser (idDistro, idEmail, idPassword, idDate) VALUES(?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RD2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedPwd,$date);
     mysqli_stmt_execute($stmt);
echo $province;
echo $city;
echo $area;
?>
