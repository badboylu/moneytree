<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$date = date("Y-m-d");
$time = date("H:i:s");
date_default_timezone_set('Africa/Johannesburg');
$authtoken = $_GET['auth'];
$username = $_GET['username'];
$confirmedpayment = 'N';
$dp = $_GET['DPgrams'];
$oc = $_GET['OCgrams'];
$bw = $_GET['BWgrams'];
$pr = $_GET['PRgrams'];
$nl = $_GET['NLgrams'];
$cces = $_GET['CCESgrams'];
$cc = $_GET['CCgrams'];
$pe = $_GET['PEgrams'];

$province = $_GET['DPgrams'];
$city = $_GET['OCgrams'];
$town = $_GET['BWgrams'];
$suburb = $_GET['PRgrams'];
$street = $_GET['NLgrams'];
$structure = $_GET['CCESgrams'];
$mall = $_GET['CCgrams'];
$building = $_GET['PEgrams'];
$estate = $_GET['CCgrams'];
$complex = $_GET['PEgrams'];
$Shoppingcomplex = $_GET['CCgrams'];
$company = $_GET['PEgrams'];
$shop = $_GET['CCgrams'];
$housenumber = $_GET['PEgrams'];
$unitnumber = $_GET['PEgrams'];

$sql="INSERT INTO oders (idOrderUsername,idOrderDPgrams,idOrderCCbatches,idOrderOCgrams,idOrderBWgrams, idOrderPRjays, idOrderNLgrams, idOrderCCESbatches, idOrderPEgrams, idOrderConfirmation, idOrderToken, idOrderTime, idOrderDate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:delivery.php?error=SQL6");
       exit();
}
     mysqli_stmt_bind_param($stmt,"siiiiiiiissss",$username,$dp,$cc,$oc,$bw,$pr,$nl,$cces,$pe,$confirmedpayment,$authtoken,$time,$date);
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
document.getElementById("form").submit();
</script>';

?>
