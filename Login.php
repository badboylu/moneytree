<?PHP

if(isset($_POST['login'])){

   require'dbh.php';

  $mailuid=$_POST['mailuid'];
  $password=$_POST['pwd'];

  if(empty($mailuid)||empty($password)){
   header("Location:signing.html?error=emptyfields");
   exit();
 }
  else{
   $sql="SELECT * FROM users WHERE uidUsers=?";
   $stmt=mysqli_stmt_init($conn) 


 }
}
