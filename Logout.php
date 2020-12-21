<?php

   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   mysqli_query("DELETE FROM userauth2 WHERE token='$_GET['auth']'");
   $check=mysqli_query("SELECT * FROM userauth2 WHERE token='$_GET['auth']'");
 if(!mysqli_num_rows($check)>0)}
   header("Location:Signin.php?logout=successful");
   exit();
}
 else{
   header("Location:Signin.php?logout=notsuccessful");
   exit();
}

?>
