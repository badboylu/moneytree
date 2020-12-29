<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<?php
$pfData = $_POST;
    header("Location:Ordermanagement.php?Payment=successful"."&Arry=".$pfData;)
    exit();
?>
<html>
<form action="https://canibuy.co.za/Ordermanagement" method="get" id="OrderForm" name="OrderForm">
<input type="hidden" name="NLgrams" id="NLgrams" value="">
<input type="hidden" name="DPgrams" id="DPgrams" value="">
<input type="hidden" name="BWgrams" id="BWgrams" value="">
<input type="hidden" name="OCgrams" id="OCgrams" value="">
<input type="hidden" name="PRgrams" id="PRgrams" value="">
<input type="hidden" name="CCgrams" id="CCgrams" value="">
<input type="hidden" name="CCESgrams" id="CCESgrams" value="">
<input type="hidden" name="PEgrams" id="PEgrams" value="">
</form>
<script type="text/JavaScript"> 
var  orderNL = localStorage.getItem('GramsNL');
var  orderDP = localStorage.getItem('GramsDP');
var  orderBW = localStorage.getItem('GramsBW');
var  orderOC = localStorage.getItem('GramsOC');
var  orderPR = localStorage.getItem('GramsPR');
var  orderCC = localStorage.getItem('BatchCC');
var  orderCCES = localStorage.getItem('BatchCCES');
var  orderPE = localStorage.getItem('GramsPE');
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
if(orderPR == null){
  orderPR = 0;
  document.getElementById("PRgrams").value = orderPR;
  document.getElementById("OrderForm").submit();
}else if(orderPR){
  document.getElementById("PRgrams").value = orderPR;
  document.getElementById("OrderForm").submit();
}
if(orderCC == null){
  orderCC = 0;
  document.getElementById("CCgrams").value = orderCC;
  document.getElementById("OrderForm").submit();
}else if(orderCC){
  document.getElementById("CCgrams").value = orderCC;
  document.getElementById("OrderForm").submit();
}
if(orderCCES == null){
  orderCCES = 0;
  document.getElementById("CCESgrams").value = orderCCES;
  document.getElementById("OrderForm").submit();
}else if(orderCCES){
  document.getElementById("CCESgrams").value = orderCCES;
  document.getElementById("OrderForm").submit();
}
if(orderPE == null){
  orderPE = 0;
  document.getElementById("PEgrams").value = orderPE;
  document.getElementById("OrderForm").submit();
}else if(orderPE){
  document.getElementById("PEgrams").value = orderPE;
  document.getElementById("OrderForm").submit();
}
</script>
</html>
