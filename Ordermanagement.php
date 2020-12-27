<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<html>
<form action="https://canibuy.co.za/Ordermanagement.php" method="get" id="OrderForm" name="OrderForm">
<input type="hidden" name="DPgrams" id="DPgrams" value="">
</form>
<script type="text/JavaScript">  
if(orderNL == null){
  orderNL = 0;
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("OrderForm").submit();
}else if(orderNL){
  orderNL = localStorage.getItem('GramsNL');
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("OrderForm").submit();
}
</script>
</html>
