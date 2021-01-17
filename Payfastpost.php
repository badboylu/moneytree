<?php
header( 'HTTP/1.0 200 OK' );
flush();

$pfData = $_POST;

foreach( $pfData as $key = $val ) {
    $pfData[$key] = stripslashes( $val );
}

echo $pfData;
