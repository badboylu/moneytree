<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$mailuid=$_POST['mailuid'];
$password=$_POST['pwd'];


if(empty($mailuid)||empty($password)){
    header("Location:Signing.html?error=emptyfields");
    exit();
    }

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location:Signing.html?error=wrongemailformat");
    exit();
}

    $sql="SELECT * FROM users WHERE uidUsers=?";
    
    $stmt=mysqli_stmt_init($conn); 
 
    mysqli_stmt_bind_params($stmt,"ss",$mailuid,$mailuid);
     mysqli_stmt_execute($stmt);
     $result=mysqli_stmt_get_result($stmt);
      
      if($row=mysqli_fetch_assoc($result)){
       $pwdcheck=password_verify($password, $row['pwdUsers']);
       exit();
   }
      else if($pwdcheck == true){
       SESSION_START();
       $_SESSION['userId']=$row['idUsers'];
       $_SESSION['userUid']=$row['uidUsers'];
        header("Location:signing.html?login=successful");
        exit();
   }
      else{
        header("Location:signing.html?error=wrongpassword");
        exit();
   }
    
    ?>
