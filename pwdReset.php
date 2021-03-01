<?php

$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$auth=$_POST['auth'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
   if($_POST['pwd'] != $_POST['pwdrepeat']){
       header("Location:R2.php?error=pwdnomatch"."&auth=".$auth);
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

      $sql="UPDATE users SET pwdUsers='".$hashedPwd."' WHERE emailUser='".$custiemail."' ";
      mysqli_query($conn,$sql);
      $sql="DELETE FROM pwdrest WHERE pwdResetEmail='".$custiemail."' ";
      mysqli_query($conn,$sql);
      header("Location:Signin.php?pwdReset=successful");
      exit();
?>


