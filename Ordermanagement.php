
<html>
<form action="https://canibuy.co.za/Ordermanagement.php" method="post" id="OrderForm" name="OrderForm">
<input type="hidden" name="merchant_key" value="46f0cd694581a">
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

