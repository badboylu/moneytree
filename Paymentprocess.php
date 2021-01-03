<?php
$username = 'Test5';
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
$address = $_GET['auth'];

$sql="INSERT INTO orders (idOrderNumber, idUsers, idOrderDPgrams, idOrderCCbatches, idOrderOCgrams, idOrderBWgrams, idOrderPRjays, idOrderNLgrams, idOrderCCESbatches, idOrderPEgrams, idOrderAddress) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.php?error=SQL3");
       exit();
}
     $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt,"sssssssssss",$username,$email,$hashedPwd);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);

   function generateSignature($data, $passPhrase = null) {
    // Create parameter string
    $pfOutput = '';
    foreach( $data as $key => $val ) {
        if(!empty($val)) {
            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
        }
    }
    // Remove last ampersand
    $getString = substr( $pfOutput, 0, -1 );
    if( $passPhrase !== null ) {
        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
    }
    return md5( $getString );
}
$cartTotal = 10.00;
$data = array(
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'return_url' => 'https://canibuy.co.za/Shop.php',
    'cancel_url' => 'https://canibuy.co.za/Cart.php',
    'notify_url' => 'https://canibuy.co.za/Orderget.php',
    'name_first' => 'Test2',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
    'm_payment_id' => '1234', 
    'amount' => '456',
    'item_name' => 'Order#123',
);
$signature = generateSignature($data);
$data['signature'] = $signature;

$htmlForm = '<form action="https://sandbox.payfast.co.za/eng/process" method="post" id="form">';
foreach($data as $name=> $value)
{
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
}
$htmlForm .= '<input type="submit" name="Pay" value="Order" id="Blanks" class="Orderbtn" style="display:none"/></form>';
echo $htmlForm;
echo'
<script>

</script>';

?>
