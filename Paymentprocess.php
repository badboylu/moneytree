<?php
$username = 'Test5';
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
$htmlForm .= '<input type="submit" name="Pay" value="Order" id="Blanks" class="Orderbtn" /></form>';
echo $htmlForm;
echo'
<script>
document.getElementById("Blanks").submit();
</script>';

?>
