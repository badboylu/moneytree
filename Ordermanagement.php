<?php 
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', true );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
?>
<?php
$pfData=$_POST;
if (is_array($pfData))
{
  for ($i=0;$i<size($pfData);$i++)
  {
    print ($qty[$i]);
  }
}
?>

