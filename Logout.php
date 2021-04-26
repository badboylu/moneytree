<?php
 $servername="jhdjjtqo9w5bzq2t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
 $dBUsername="db361uh5fgdhosa8";
 $dBPassword="c17zbecid7wripme";
 $dBName="uozxi82sks708ppq";
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
