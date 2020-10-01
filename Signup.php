if(isset($_POST['signup-submit'])){

Require 'dbh.php';

$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];

if(empty($username)||empty($email)||empty($password)||empty($passwordrepeat)||){
   header("Location:signup.php?error=emptyfields&uid=".$username.".&email=".$email);
     exit();
}                  

else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){        
   header("Location:signup.php?error=invalidemail&uid);
     exit();
}

else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){        
   header("Location:signup.php?error=invalidemail&uid=".$username);
     exit();
}









}
