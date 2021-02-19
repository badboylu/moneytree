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
<input type="hidden" name="eTotal" value="" id="eTotal">
<input type="hidden" name="eCity" value="" id="eCity">
<input type="hidden" name="eTown" value="" id="eTown">
<input type="hidden" name="eStreet" value="" id="eStreet">
<input type="hidden" name="eSuburb" value="" id="eSuburb">
<input type="hidden" name="eMall" value="" id="eMall">
<input type="hidden" name="eBuilding" value="" id="eBuilding">
<input type="hidden" name="eShop" value="" id="eShop">
<input type="hidden" name="eComplex" value="" id="eComplex">
<input type="hidden" name="eCompany" value="" id="eCompany">
<input type="hidden" name="eHouseNumber" value="" id="eHouseNumber">
<input type="hidden" name="eUnitNumber" value="" id="eUnitNumber">
<input type="hidden" name="eEstate" value="" id="eEstate">
<input type="hidden" name="eDP" value="" id="eDP">
<input type="hidden" name="eCC" value="" id="eCC">
<input type="hidden" name="eOC" value="" id="eOC">
<input type="hidden" name="eBW" value="" id="eBW">
<input type="hidden" name="eNL" value="" id="eNL">
<input type="hidden" name="ePR" value="" id="ePR">
<input type="hidden" name="eCCES" value="" id="eCCES">
<input type="hidden" name="ePE" value="" id="ePE">
<input type="hidden" name="eContact" value="" id="eContact">
<input type="hidden" name="eDate" value="" id="eDate">
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
function total(){
let total = localStorage.getItem('eTotal');
document.getElementById("eTotal").value = total ;
}
function city(){
let city = localStorage.getItem('eCity');
document.getElementById("eCity").value = city ;
}
function town(){
let town = localStorage.getItem('eTown');
document.getElementById("eTown").value = town ;
}
function street(){
let street = localStorage.getItem('eStreet');
document.getElementById("eStreet").value = street ;
}

user();
auth();
total();
city();
submit();
</script>
</html>
