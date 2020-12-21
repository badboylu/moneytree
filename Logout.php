<?php

   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

 $authtoken= $_GET['uid'];
 $sql="DELETE FROM userauth2 WHERE username=?";
 $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$authtoken);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
if ($count>0){
    header("Location:Signin.php?error=notworking");
    exit();
}
else{
    header("Location:Signin.php?logout=successful");
    exit();
}


?>
