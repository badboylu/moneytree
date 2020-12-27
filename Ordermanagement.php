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
     var orderDP = localStorage.getItem('GramsDP'); 
     var orderOC = localStorage.getItem('GramsOC'); 
     var orderBW = localStorage.getItem('GramsBW'); 
     var orderNL = localStorage.getItem('GramsNL'); 
     var orderPR = localStorage.getItem('GramsPR'); 
     var orderCC = localStorage.getItem('GramsCC'); 
     var orderCCES = localStorage.getItem('GramsCCES'); 
     var orderPE = localStorage.getItem('GramsPE'); 

 if(orderDP == null){
  orderDP = 0;
}else{
 document.getElementById("DPgrams").value = orderDP;
 document.getElementById("OrderForm").submit();
}
</script>
</html>



