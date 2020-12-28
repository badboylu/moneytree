<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<html>
<form action="https://canibuy.co.za/Ordermanagement.php" method="get" id="OrderForm" name="OrderForm">
<input type="hidden" name="NLgrams" id="NLgrams" value="">
<input type="hidden" name="DPgrams" id="DPgrams" value="">
<input type="hidden" name="BWgrams" id="BWgrams" value="">
<input type="hidden" name="OCgrams" id="OCgrams" value="">
</form>
<script type="text/JavaScript"> 
var  orderNL = localStorage.getItem('GramsNL');
var  orderDP = localStorage.getItem('GramsDP');
var  orderNL = localStorage.getItem('GramsNL');
var  orderDP = localStorage.getItem('GramsDP');
if(orderNL == null){
  orderNL = 0;
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("OrderForm").submit();
}else if(orderNL){
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("OrderForm").submit();
}
if(orderDP == null){
  orderDP = 0;
  document.getElementById("DPgrams").value = orderDP;
  document.getElementById("OrderForm").submit();
}else if(orderDP){
  document.getElementById("DPgrams").value = orderDP;
  document.getElementById("OrderForm").submit();
}
if(orderBW == null){
  orderBW = 0;
  document.getElementById("BWgrams").value = orderBW;
  document.getElementById("OrderForm").submit();
}else if(orderBW){
  document.getElementById("BWgrams").value = orderBW;
  document.getElementById("OrderForm").submit();
}
if(orderOC == null){
  orderOC = 0;
  document.getElementById("OCgrams").value = orderOC;
  document.getElementById("OrderForm").submit();
}else if(orderOC){
  document.getElementById("OCgrams").value = orderOC;
  document.getElementById("OrderForm").submit();
}
</script>
</html>
