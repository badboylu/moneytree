<?php
$cartTotal = 10.00;
$data = array(
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'return_url' => 'http://www.yourdomain.co.za/return.php',
    'cancel_url' => 'http://www.yourdomain.co.za/cancel.php',
    'notify_url' => 'http://www.yourdomain.co.za/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
    // Transaction details
    'm_payment_id' => '1234', 
    'amount' => '456',
    'item_name' => 'Order#123'
);

$signature = generateSignature($data);
$data['signature'] = $signature;
$htmlForm = '<form action="https://sandbox.payfast.co.za/eng/process" method="post">';
foreach($data as $name=> $value)
{
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
}
$htmlForm .= '<input type="submit" value="Pay Now" /></form>';
echo $htmlForm;
?>
