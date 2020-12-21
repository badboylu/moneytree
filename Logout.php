<?php

   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

 $authtoken=$_GET['auth'];
 $sql='DELETE FROM userauth2 WHERE token= "'.$authtoken.'"';
 $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
}
   mysqli_stmt_execute($stmt);
   header("Location:Signin.php?logout=successful");
   exit();


?>
