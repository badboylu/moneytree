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

$query1='SELECT * FROM address WHERE idToken="'.$authtoken.'" ';
$result1=mysqli_query($conn,$query1);

while($row1=mysqli_fetch_array($result1)){
 $token1[]=$row1['idUser'];
}

$ordertoken1=Max($token1);

$query2='SELECT * FROM deliverytoken WHERE idOrderID="'.$authtoken.'" ';
$result2=mysqli_query($conn,$query2);

while($row2=mysqli_fetch_array($result2)){
 $token2[]=$row2['idOrder'];
}

$ordertoken2=Max($token2);

$sql='DELETE FROM oders WHERE idOrderToken="'.$authtoken.'" AND idOrders="'.$ordertoken.'"';
mysqli_query($conn, $sql);
$sql2='DELETE FROM address WHERE idToken="'.$authtoken.'" AND idUser="'.$ordertoken1.'"';
mysqli_query($conn, $sql2);
$sql3='DELETE FROM deliverytoken WHERE idOrderID="'.$authtoken.'" AND idOrder="'.$ordertoken2.'"';
mysqli_query($conn, $sql3);    
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
