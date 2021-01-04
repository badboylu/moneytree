<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$authtoken = $_GET['auth'];
$username = $_GET['username'];
$confirmedpayment = 'N';
$dp = $_GET['DPgrams'];
$oc = $_GET['OCgrans'];
$bw = $_GET['BWgrams'];
$pr = $_GET['PRgrams'];
$nl = $_GET['NLgrams'];
$cces = $_GET['CCESgrams'];
$cc = $_GET['CCgrams'];
$pe = $_GET['PEgrams'];
$address = 'Testing';

    $sql="INSERT INTO orders (idOrderUsername,idOrderDPgrams,idOrderCCbatches,idOrderOCgrams,idOrderBWgrams, idOrderPRjays, idOrderNLgrams, idOrderCCESbatches, idOrderPEgrams, idOrderConfirmation, idOrderToken, idOrderTime, idOrderDate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Orderpost.php?error=SQL4");
       exit();
}
     mysqli_stmt_bind_param($stmt,"siiiiiiiiss",$username,$confirmedpayment,$authtoken);
     mysqli_stmt_execute($stmt);

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
