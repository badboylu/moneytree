
$sql="INSERT INTO alfauser (idAlfa, idEmail, idPassword, idDate) VALUES(?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RAD2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedPwd,$date);
     mysqli_stmt_execute($stmt);

$sql="INSERT INTO distrouser (idDistro, idEmail, idPassword, idDate, idLocation) VALUES(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RD2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssss",$username,$email,$hashedPwd,$date,$location);
     mysqli_stmt_execute($stmt);

$sql="INSERT INTO driveruser (idDriver, idEmail, idPassword, idDate, idLocation) VALUES(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RDR2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssss",$username,$email,$hashedPwd,$date,$location);
     mysqli_stmt_execute($stmt);

$sql="INSERT INTO prepperuser (idPrepper, idEmail, idPassword, idDate, idLocation) VALUES(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:RP2.php?error=SQL3");
       exit();
}
     mysqli_stmt_bind_param($stmt,"sssss",$username,$email,$hashedPwd,$date,$location);
     mysqli_stmt_execute($stmt);
