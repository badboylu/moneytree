<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$emails = array();

foreach ( $_POST as $key => $value )
{
    if ($key)
    {
        $this_email = $value;
        $emails[] = $this_email;
    }
}
 
echo $emails;
