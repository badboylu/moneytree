<?php
header( 'HTTP/1.0 200 OK' );
flush();

$data = $_POST;

echo $data['payment_status'];




