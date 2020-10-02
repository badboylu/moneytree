<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="d7228c67";
$dBName="";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!conn){  
    die("connection failed:" mysqli_connect_error());
