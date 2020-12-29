<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<?php
$pfData = $_POST;
print ($pfData['name_first']);
?>

