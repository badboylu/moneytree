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
$query2='SELECT * FROM deliverytoken WHERE idOrderID="'.$authtoken.'" ';
$result2=mysqli_query($conn,$query2);
while($row2=mysqli_fetch_array($result2)){
 $token2[]=$row2['idOrder'];
}
$ordertoken2=Max($token2);
$sql="UPDATE oders SET idOrderConfirmation='Pending' WHERE idOrderToken='".$authtoken."' AND idOrders='".$ordertoken."' ";
mysqli_query($conn,$sql);
$sql2="UPDATE orderlog SET idOrderStat='Pending' WHERE idOrderNumber='".$ordertoken2."' ";
mysqli_query($conn,$sql2);
?>

<html>
<form action="T1.php" method="get" id="form">
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
function email(){

}
user();
auth();
submit();
email();
</script>
</html>
