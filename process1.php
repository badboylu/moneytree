<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

?>

<html>

<form action="process1.php" method="get" id="form2">
<input type="hidden" name="auth" value="" id="auth">
</form>

<form action="F1.php" method="get" id="form">
<input type="hidden" name="username" value="" id="user">
<input type="hidden" name="auth" value="" id="auth">
</form>

<script>
function submit2(){
document.getElementById("form2").submit();
}
submit2();
</script>

<?php
$ot=
$sql='DELETE FROM oders WHERE idOrderToken="'.$ot.'"';
mysqli_query($conn, $sql);
$sql2='DELETE FROM address WHERE idToken="'.$ot.'"';
mysqli_query($conn, $sql2);
$sql3='DELETE FROM deliverytoken WHERE idOrderID="'.$ot.'"';
mysqli_query($conn, $sql3);
?>

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
