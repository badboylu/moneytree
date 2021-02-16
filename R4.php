<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$username=$_GET['username'];
$email=$_GET['email'];
$password=$_GET['auth'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account registration</title>
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
                        <h3><span style="color:green"> Account activation link sent!</span></h3>
                        
                        <p>Check your email for the link to activate your account</p>
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
Email.send({
    Host : "mail.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : 'liyandza.magagula@gmail.com',
    From : "no-reply@canibuy.site",
    Subject : "Canibuy account activation",
    Body : '<p>Hello,</p><p>We at Canibuy welcome you to our online store. The last step to getting your account active is to confirm your email address. Please click on the link below to activate your account.</p><p><a href="https://www.canibuy.co.za/S1.php?signup=complete"."&username=<?php echo $username; ?>"."&email=<?php echo $email; ?>"."&auth=<?php echo $password; ?>"> Account activation link </a></p><p>If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us. Thank you</p>'              
  });
}
sendemail();
</script> 
</html>
