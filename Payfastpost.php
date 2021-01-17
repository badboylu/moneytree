<?php
header( 'HTTP/1.0 200 OK' );
flush();

$pfData = $_POST;

foreach( $pfData as $key ) {
    echo $key;
}


