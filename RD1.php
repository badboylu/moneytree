<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$province=$_GET['province'];
$city=$_GET['city'];
$area=$_GET['area'];
$email=$_GET['email'];

  $sql="SELECT * FROM pwdrest WHERE pwdResetEmail=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
 if (!$count){
    $count='0';
 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distro recruitment</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="iofrm-theme17.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3><span style="color:green"> Distro activation link sent!</span></h3>
                        <p>Return to <a href="AdminCBI.php">Dashboard</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
function sendemail(){
let count="<?php echo $count; ?>";
if(count=="0"){
Email.send({
    Host : "mail.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : '<?php echo $email; ?>',
    From : "no-reply@canibuy.site",
    Subject : "Distro account activation",
    Body : '<p><div style="height:30px; width:100%; background:green;"></div><img  src="https://res.cloudinary.com/badboylu/image/upload/c_scale,w_200/v1595757623/website_logo_head_aswjjx.jpg" alt="Basel" /><div style="height:15px; width:100%; background:black;"></div></p><br><p>Good day,</p><p>you have been offered an opportunity to join the <span style="color:orange">canibuy</span> team as a <span style="color:green">distribution agent</span>.<p>Please click on the link below to activate your account.</p><p><a href="https://www.canibuy.co.za/RD2.php?province=<?php echo $_GET['Province'];?>&city=<?php echo $_GET['City'];?>&area=<?php echo $_GET['Area'];?>"> <button>Account activation link</button> </a></p><p>Thank you</p><br><br><p><div style="height:48px; width:100%; background:black;"><p><div><span style="color:white; padding-left:5px; padding-top:15px; margine-bottom:5px;"><small>© 2021 Kahrent Technology Africa All rights reserved.</small></span></div></p></div></p>'              
  });
 }
}
sendemail();
</script> 
<script>
 function set(){
  localStorage.removeItem("R");
}
set();
</script>
</html>
<?php
if(!$count>0){
$sql="INSERT INTO pwdrest (pwdResetEmail) VALUES (?);";
    $stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }
 mysqli_stmt_bind_param($stmt,"s",$email);
 mysqli_stmt_execute($stmt);
 }
?>
