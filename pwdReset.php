<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$auth=$_POST['auth'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];

   if($_POST['pwd'] != $_POST['pwdrepeat']){
       header("Location:R2.php?error=pwdnomatch"."&auth=".$auth."&email=".$email);
       exit();
   }
     $uppercase = preg_match('@[A-Z]@', $password);
     $lowercase = preg_match('@[a-z]@', $password);
     $number    = preg_match('@[0-9]@', $password);
     $specialChars = preg_match('@[^\w]@', $password);

   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
       header("Location:R2.php?error=invalidpwd"."&auth=".$auth);
       exit();
   }  
  
$query='SELECT * FROM pwdrest WHERE pwdResetToken="'.$auth.'" ';
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
 $email[]=$row['pwdResetEmail'];
}
$custiemail=Min($email);
echo $custiemail;

?>


