<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$date = date("Y-m-d");
$time = date("H:i:s");
date_default_timezone_set('Africa/Johannesburg');
$authtoken = $_GET['auth'];
$username = $_GET['username'];
$confirmedpayment1 = 'Placed';
$confirmedpayment = 'Pending';
$dp = $_GET['DPgrams'];
$oc = $_GET['OCgrams'];
$bw = $_GET['BWgrams'];
$pr = $_GET['PRgrams'];
$nl = $_GET['NLgrams'];
$cces = $_GET['CCESgrams'];
$cc = $_GET['CCgrams'];
$pe = $_GET['PEgrams'];

$province = $_GET['Province'];
$city = $_GET['City'];
$townpta = $_GET['TownsPTA'];
$suburb = $_GET['suburbsPTAeast'];
$street = $_GET['Street'];
$structure = $_GET['Crib'];
$mall = $_GET['Mall'];
$building = $_GET['Building'];
$estate = $_GET['Estate'];
$complex = $_GET['Complex'];
$company = $_GET['Company'];
$shop = $_GET['Shop'];
$housenumber = $_GET['House-number'];
$unitnumber = $_GET['Unit-number'];
$contactnumber = $_GET['Contact-number'];

$sql="INSERT INTO oders (idOrderUsername,idOrderDPgrams,idOrderCCbatches,idOrderOCgrams,idOrderBWgrams, idOrderPRjays, idOrderNLgrams, idOrderCCESbatches, idOrderPEgrams, idOrderConfirmation, idOrderToken, idOrderTime, idOrderDate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:delivery.php?error=SQL6");
       exit();
}
     mysqli_stmt_bind_param($stmt,"siiiiiiiissss",$username,$dp,$cc,$oc,$bw,$pr,$nl,$cces,$pe,$confirmedpayment,$authtoken,$time,$date);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

$sql="INSERT INTO address (idUsername,idProvince,idCity,idTown,idSuburb,idCrib,idBuilding,idEstate,idComplex,idMall,idShop,idStreet,idUnitNumber,idHouseNumber,idContactNumber,idTime,idDate,idToken,idOrderConfirmation) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:delivery.php?error=SQL7");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssssssssssssssssss",$username,$province,$city,$townpta,$suburb,$structure,$building,$estate,$complex,$mall,$shop,$street,$unitnumber,$housenumber,$contactnumber,$time,$date,$authtoken,$confirmedpayment1);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

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

$cartTotal = 10.00;
$data = array(
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'return_url' => 'https://www.canibuy.co.za/Payfastpost.php',
    'cancel_url' => 'https://canibuy.co.za/Cart.php',
    'notify_url' => 'https://www.canibuy.co.za/Payfastpost.php',
    'name_first' => 'Test2',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
    'm_payment_id' => '1234', 
    'amount' => '456',
    'item_name' => 'Order#123',
);
$signature = generateSignature($data);
$data['signature'] = $signature;

$htmlForm = '<form action="https://sandbox.payfast.co.za/eng/process?true" method="post" id="form">';
foreach($data as $name=> $value)
{
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
}
$htmlForm .= '<input type="submit" name="Pay" value="Order" id="Blanks" class="Orderbtn" style="display:none"/></form>';
echo $htmlForm;
echo'
<script>
   document.getElementById("form").submit();
</script>';

?>
