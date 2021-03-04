<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
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
 $token2[]=$row2['id'];
}
$ordertoken2=Max($token2);
$sql="UPDATE oders SET idOrderConfirmation='Pending' WHERE idOrderToken='".$authtoken."' AND idOrders='".$ordertoken."' ";
mysqli_query($conn,$sql);
$sql2="UPDATE orderlog SET idOrderStat='Pending' WHERE idPrepperToken='".$authtoken."' ";
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
<input type="hidden" name="eTown" value="" id="eTown">
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
function suburb(){
let suburb = localStorage.getItem('eSuburb');
document.getElementById("eSuburb").value = suburb ;
}
function mall(){
let mall = localStorage.getItem('eMall');
document.getElementById("eMall").value = mall ;
}
function building(){
let building = localStorage.getItem('eBuilding');
document.getElementById("eBuilding").value = building ;
}
function shop(){
let shop = localStorage.getItem('eShop');
document.getElementById("eShop").value = shop ;
}
function complex(){
let complex = localStorage.getItem('eComplex');
document.getElementById("eComplex").value = complex ;
}
function company(){
let company = localStorage.getItem('eCompany');
document.getElementById("eCompany").value = company ;
}
function housenumber(){
let housenumber = localStorage.getItem('eHouseNumber');
document.getElementById("eHouseNumber").value = housenumber ;
}
function unitnumber(){
let unitnumber = localStorage.getItem('eUnitNumber');
document.getElementById("eUnitNumber").value = unitnumber ;
}
function estate(){
let estate = localStorage.getItem('eEstate');
document.getElementById("eEstate").value = estate ;
}
function dp(){
let dp = localStorage.getItem('eDP');
document.getElementById("eDP").value = dp ;
}
function cc(){
let cc = localStorage.getItem('eCC');
document.getElementById("eCC").value = cc ;
}
function oc(){
let oc = localStorage.getItem('eOC');
document.getElementById("eOC").value = oc ;
}
function bw(){
let bw = localStorage.getItem('eBW');
document.getElementById("eBW").value = bw ;
}
function nl(){
let nl = localStorage.getItem('eNL');
document.getElementById("eNL").value = nl ;
}
function pr(){
let pr = localStorage.getItem('ePR');
document.getElementById("ePR").value = pr ;
}
function cces(){
let cces = localStorage.getItem('eCCES');
document.getElementById("eCCES").value = cces ;
}
function pe(){
let pe = localStorage.getItem('ePE');
document.getElementById("ePE").value = pe ;
}
function contact(){
let contact = localStorage.getItem('eContact');
document.getElementById("eContact").value = contact ;
}
function date(){
let date = localStorage.getItem('eDate');
document.getElementById("eDate").value = date ;
}
user();
auth();
total();
city();
town();
street();
suburb();
mall();
building();
shop();
complex();
company();
housenumber();
unitnumber();
estate();
dp();
cc();
oc();
bw();
nl();
pr();
cces();
pe();
contact();
date();
submit();
</script>
</html>
