<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$username = $_GET['username'];
$authtoken = $_GET['auth'];

$query='SELECT * FROM oders WHERE idOrderToken="'.$authtoken.'" ';
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $token[]=$row['idOrders'];
}

$ordertoken=Max($token);

$sql="INSERT INTO oders (idOrderConfirmation) VALUES(?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:delivery.php?error=SQL6");
       exit();
}
     mysqli_stmt_bind_param($stmt,"siiiiiiiissss",$username,$dp,$cc,$oc,$bw,$pr,$nl,$cces,$pe,$confirmedpayment1,$authtoken,$time,$date,$total);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

?>
<html>
<form action="F1.php" method="get" id="form">
<input type="hidden" name="username" value="" id="user">
<input type="hidden" name="auth" value="" id="auth">
</form>
<script>
function user(){
let user = localStorage.getItem('username');
document.getElementById("user").value = user;
}
function auth(){
let auth = localStorage.getItem('token');
document.getElementById("auth").value = auth ;
}
function submit(){
document.getElementById("form").submit();
}
user();
auth();
submit();
</script>
</html>
