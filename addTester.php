<?php
 $servername="jhdjjtqo9w5bzq2t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
 $dBUsername="db361uh5fgdhosa8";
 $dBPassword="c17zbecid7wripme";
 $dBName="uozxi82sks708ppq";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$province=$_POST['Gauteng'];
$city='Tshwane';
$area='PretoriaEast';
$email='lunga.magagula01@gmail.com';
$location=$province.'-'.$city.'-'.$area;
$username1='Distro-Demo';
$username2='Prepper-Demo';
$username3='Driver-Demo';
$username4='Alfa-Demo';
$password='Demo@test1';
$passwordrepeat=$_POST['pwdrepeat'];
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
date_default_timezone_set('Africa/Johannesburg');
$date=date("Y-m-d");

$sql="INSERT INTO alfauser (idAlfa, idEmail, idPassword, idDate) VALUES(?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RAD2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"ssss",$username4,$email,$hashedPwd,$date);
     mysqli_stmt_execute($stmt);

$sql="INSERT INTO distrouser (idDistro, idEmail, idPassword, idDate, idLocation) VALUES(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RD2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssss",$username1,$email,$hashedPwd,$date,$location);
     mysqli_stmt_execute($stmt);

$sql="INSERT INTO driveruser (idDriver, idEmail, idPassword, idDate, idLocation) VALUES(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RDR2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssss",$username3,$email,$hashedPwd,$date,$location);
     mysqli_stmt_execute($stmt);

$sql="INSERT INTO prepperuser (idPrepper, idEmail, idPassword, idDate, idLocation) VALUES(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RP2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssss",$username2,$email,$hashedPwd,$date,$location);
     mysqli_stmt_execute($stmt);
