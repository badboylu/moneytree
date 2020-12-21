<?php

   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $sql="DELETE FROM userauth2 WHERE token='$_GET['auth']'";
   mysqli_query("DELETE FROM userauth2 where token='$_GET['auth']'");
  if(mysqli_query($conn,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
}
   header("Location:Signin.php?logout=successful");
   exit();

?>
