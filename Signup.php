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


}
