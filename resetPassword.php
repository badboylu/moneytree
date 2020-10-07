<?php

if(isset($_POST['reset-submit'])){

 $selector=$_POST["selector"];
 $validator=$_POST["validator"];
 $password=$_POST["pwd"];
 $passwordRepeat=$_POST["pwdRepeat"];

  if(empty($password) || empty($passwordRepeat)){
   header("Location:createpwd.html?error=empty fields");
   exit();
  }

  else if($password!=$passwordRepeat){
   header("Location:createpwd.html?error=empty fields");
   exit();
  }

}
