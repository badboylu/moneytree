<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<html>
<form action="https://canibuy.co.za/Ordermanagement.php" method="get" id="OrderForm" name="OrderForm">
<input type="hidden" name="DPgrams" id="DPgrams" value="">
<input type="hidden" name="OCgrams" id="OCgrams" value="">
<input type="hidden" name="CCgrams" id="CCgrams" value="">
<input type="hidden" name="CCESgrams" id="CCESgrams" value="">
<input type="hidden" name="BWgrams" id="BWgrams" value="">
<input type="hidden" name="NLgrams" id="NLgrams" value="">
<input type="hidden" name="PEgrams" id="PEgrams" value="">
</form> 
<script type="text/JavaScript">  
 if(orderNL == null || orderDP == null || orderOC == null || orderBW == null || orderCC == null || orderCCES == null || orderPR == null || orderPE == null ){
  orderNL = 0;
  orderDP = 0;
  orderOC = 0;
  orderCC = 0;
  orderBW = 0;
  orderPR = 0;
  orderCC = 0;
  orderCCES = 0;
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("DPgrams").value = orderDP;
  document.getElementById("OCgrams").value = orderOC;
  document.getElementById("CCgrams").value = orderCC;
  document.getElementById("BWgrams").value = orderBW;
  document.getElementById("PRgrams").value = orderPR;
  document.getElementById("PEgrams").value = orderPE;
  document.getElementById("CCESgrams").value = orderCCES;
  document.getElementById("OrderForm").submit();
}else{
  orderDP = localStorage.getItem('GramsDP'); 
  orderOC = localStorage.getItem('GramsOC'); 
  orderBW = localStorage.getItem('GramsBW'); 
  orderNL = localStorage.getItem('GramsNL'); 
  orderPR = localStorage.getItem('GramsPR'); 
  orderCC = localStorage.getItem('BatchCC'); 
  orderCCES = localStorage.getItem('BatchCCES'); 
  orderPE = localStorage.getItem('GramsPE'); 
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("DPgrams").value = orderDP;
  document.getElementById("OCgrams").value = orderOC;
  document.getElementById("CCgrams").value = orderCC;
  document.getElementById("BWgrams").value = orderBW;
  document.getElementById("PRgrams").value = orderPR;
  document.getElementById("PEgrams").value = orderPE;
  document.getElementById("CCESgrams").value = orderCCES;
  document.getElementById("OrderForm").submit();
}
</script>
</html>



