<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<html>
<form action="https://canibuy.co.za/Ordermanagement.php" method="get" id="OrderForm" name="OrderForm">
<input type="hidden" name="NLgrams" id="NLgrams" value="">
</form>
<script type="text/JavaScript"> 
var  orderNL = localStorage.getItem('GramsNL');
if(orderNL == null){
  orderNL = 0;
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("OrderForm").submit();
}else if(orderNL){
  document.getElementById("NLgrams").value = orderNL;
  document.getElementById("OrderForm").submit();
}
</script>
</html>
