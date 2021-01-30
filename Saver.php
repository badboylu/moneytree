$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending' OR idOrderConfirmation='Prepared' OR idOrderConfirmation='Collected' AND idOrderUsername='".$username."' ";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
   $ordernumbers[]=$row['idOrders'];
   }
   $order=Min($ordernumbers);   

   $sql="SELECT * FROM oder WHERE idOrderConfirmation=? AND idOrderUsername='".$username."' AND idOrders='".$order."' ";
   $stmt=mysqli_stmt_init($conn);
   mysqli_stmt_bind_param($stmt,"s",$prepared);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $prep=mysqli_stmt_num_rows($stmt);
   if(!$prep){
    $prep = '0';
   }
  
   $sql="SELECT * FROM oder WHERE idOrderConfirmation=? idOrderUsername='".$username."' AND idOrders='".$order."' ";
   $stmt=mysqli_stmt_init($conn);
   mysqli_stmt_bind_param($stmt,"s",$collected);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $collected=mysqli_stmt_num_rows($stmt);
   if(!$collected){
    $collected = '0';
   }
