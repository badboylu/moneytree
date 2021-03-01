<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $token=$_GET['auth'];
   $sql='Delete FROM userauth2 WHERE token="'.$token.'"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL2");
       exit();
}
   mysqli_stmt_execute($stmt);
   header("Location:Signin.php?logout=successful");
   exit();
?>
