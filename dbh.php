<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="users";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!conn){  
    die("connection failed:" mysqli_connect_error());
