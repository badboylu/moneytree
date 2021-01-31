$query4="SELECT * FROM earnings WHERE idDate='".$date."' AND idDistro='".$distro."'' ";
$result4=mysqli_query($conn,$query4);
$count4=mysqli_num_rows($result4);
  if (!$count4){
    $count4='0';
}
if($count4='0'){
$sql="INSERT INTO earnings (idDate,idDistro,idDistroEarnings,idPayment) VALUES(?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=sqlerror111");
       exit();
     }
     mysqli_stmt_bind_param($stmt,"ssis",$date,$distro,$distroearnings,$payment);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
}
$sql="UPDATE earnings SET idDistroEarnings='".$distroearnings."' WHERE idDistro='".$distro."'";
$ready=mysqli_query($conn,$sql);
mysqli_query($conn,$sql);
