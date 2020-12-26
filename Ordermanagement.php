
<html>
<form action="" method="post" id="OrderForm" name="OrderForm">
<input type="hidden" name="merchant_key" value="46f0cd694581a">
<input type="hidden" name="amount" id="amount" value="">
<input type="hidden" name="item_name" value="Cannibus Health Store Items">
<input type="hidden" name="return_url" value="https://canibuy.co.za/Shop.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
<input type="hidden" name="cancel_url" value="https://www.canibuy.co.za/Cart.php">
<input type="hidden" name="notify_url" value="https://www.canibuy.co.za/delivery.php">
<input type="hidden" name="signature" value="<?php $signature ?>">
<input type="hidden" name="custom_str1" value="">
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
}
 document.getElementById("townsJHB").value = orderDP;
</script>
</html>
<?php


?> 
