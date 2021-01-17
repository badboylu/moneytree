<?php
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

$data = array(
    // Merchant details
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'amount' => '100.00',
    'item_name' => 'Test Product',
    'return_url' => 'https://canibuy.co.za/Payfastpost.php',
    'cancel_url' => 'https://canibuy.co.za/Shopredirect.php',
    'notify_url' => 'https://canibuy.co.za/Payfastpost.php'
);

$signature = generateSignature($data);
echo $signature;

?>
<html>
<form action="https://sandbox.payfast.co.za/eng/process?true" method="post">
   <input type="hidden" name="merchant_id" value="10000100">
   <input type="hidden" name="merchant_key" value="46f0cd694581a">
   <input type="hidden" name="amount" value="100.00">
   <input type="hidden" name="item_name" value="Test Product">
   <input type="hidden" name="return_url" value="https://canibuy.co.za/Payfastpost.php">
   <input type="hidden" name="cancel_url" value="https://canibuy.co.za/Shopredirect.php">
   <input type="hidden" name="notify_url" value="https://canibuy.co.za/Payfastpost.php">
   <input type="hidden" name="signature" value="<?php echo $signature; ?>"> 
   <input type="submit">
</form> 
</html>
