$authtoken = $_GET['auth'];
$confirmedpayment = 'N';
$dp = $_GET['DPgrams'];
$oc = $_GET['OCgrans'];
$bw = $_GET['BWgrams'];
$pr = $_GET['PRgrams'];
$nl = $_GET['NLgrams'];
$cces = $_GET['CCESgrams'];
$cc = $_GET['CCgrams'];
$pe = $_GET['PEgrams'];
$address = $_GET['Province']',' $_GET['City']',' $_GET['TownPTA']',' $_GET['suburbsPTAeast']',' $_GET['Crib']',' $_GET['Estate']',' $_GET['Complex']',' $_GET['Building'];
$sql="INSERT INTO orders (idOrderNumber, idUsers, idOrderDPgrams, idOrderCCbatches, idOrderOCgrams, idOrderBWgrams, idOrderPRjays, idOrderNLgrams, idOrderCCESbatches, idOrderPEgrams, idOrderAddress) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssssssssss",$authtoken,$confirmedpayment,$dp,$cc,$oc,$bw,$pr,$nl,$cces,$pe,$address);
     mysqli_stmt_execute($stmt);
