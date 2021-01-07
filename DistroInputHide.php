<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
}
$order=Min($ordernumbers);
$final="SELECT * FROM oders WHERE idOrders=".$order;
$finalresult=mysqli_query($conn,$final);
$row = mysqli_fetch_array($finalresult);
?>
<script>
var DB = <?php echo $row['idOrderDBgrams'] ?>;
var CC = <?php echo $row['idOrderCCbatches']?>;
var OC = <?php echo $row['idOrderOCgrams']?>;
var BW = <?php echo $row['idOrderBWgrams']?>;
var PR = <?php echo $row['idOrderPRjays']?>;
var CCES = <?php echo $row['idOrderCCESbatches']?>;
var NL = <?php echo $row['idOrderNLgrams']?>;
var PE = <?php echo $row['idOrderPEgrams']?>;

function hideOrder(){
if(DB = 0){
   document.getElementById("hideDP").style.display = "none";
}
if(CC = 0){
   document.getElementById("hideCC").style.display = "none";
}
if(OC = 0){
   document.getElementById("hideOC").style.display = "none";
}
}
 
hideOrder();
</script>
