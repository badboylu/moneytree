<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$preppertoken= bin2hex(random_bytes(3));
$custitoken= bin2hex(random_bytes(3));
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
$town = $_GET['Towns'];
$suburb = $_GET['suburbs'];
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
$total = $_GET['totalamount'];
$total1 = 'R567';

$sql="INSERT INTO oders (idOrderUsername,idOrderDPgrams,idOrderCCbatches,idOrderOCgrams,idOrderBWgrams, idOrderPRjays, idOrderNLgrams, idOrderCCESbatches, idOrderPEgrams, idOrderConfirmation, idOrderToken, idOrderTime, idOrderDate,idOrderTotal,idOrderCustiCode,idOrderCode) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=sqlerror111");
       exit();
}
     mysqli_stmt_bind_param($stmt,"siiiiiiiissssiss",$username,$dp,$cc,$oc,$bw,$pr,$nl,$cces,$pe,$confirmedpayment1,$authtoken,$time,$date,$total,$custitoken,$preppertoken);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

$sql="INSERT INTO address (idUsername,idProvince,idCity,idTown,idSuburb,idCrib,idBuilding,idEstate,idComplex,idMall,idShop,idStreet,idUnitNumber,idHouseNumber,idContactNumber,idTime,idDate,idToken,idOrderConfirmation,idOrderCustiCode,idOrderCode) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=sqlerror222");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssssssssssssssssssss",$username,$province,$city,$town,$suburb,$structure,$building,$estate,$complex,$mall,$shop,$street,$unitnumber,$housenumber,$contactnumber,$time,$date,$authtoken,$confirmedpayment1,$custitoken,$preppertoken);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

$sql3="INSERT INTO deliverytoken (idDate,idUsername,idCustomerToken,idPrepperToken,idOrderID) VALUES (?,?,?,?,?);";
$stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql3)){
    header("Location:Signin.php?error=sqlerror999");
    exit();
 }

    mysqli_stmt_bind_param($stmt,"sssss",$date,$confirmedpayment,$custitoken,$preppertoken,$authtoken);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

$sql4="INSERT INTO orderdelivery (idDriver,idToken,idDate,idOrderToken,idOrderCancel,idOrderConfirmation) VALUES (?,?,?,?,?,?);";
$stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql4)){
    header("Location:Signin.php?error=sqlerror111");
    exit();
 }

    mysqli_stmt_bind_param($stmt,"ssssss",$confirmedpayment,$custitoken,$date,$total1,$preppertoken,$username);
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
    'merchant_id' => '10021306',
    'merchant_key' => '6nblvx2g5iyj8',
    'return_url' => 'https://canibuy.co.za/process2.php',
    'cancel_url' => 'https://canibuy.co.za/process1.php',
    'email_address'=> 'support@canibuy.co.za',
    'amount'=> $total,
    'item_name' => 'Canibuy Health Store',
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
