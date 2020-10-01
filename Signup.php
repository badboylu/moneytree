if(isset($_POST['signup-submit'])){

Require 'dbh.php';

$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$username=$_POST['pwdrepeat'];
