<?php
$auth=$_GET['error'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
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
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you registered with.</p>
                        <form action="FPW.php" method="get">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button type="submit" class="ibtn">Send Reset Link</button>
                            </div>
                        </form>
                        <div style="display:none" id="wrngemail">
                        <p><span style="color:red"><small>*E-mail address submitted is not registered</small></span></p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function wrngemail(){
 let confirmation="<?php echo $auth; ?>";
 if(confirmation=="emailnotfound"){
  document.getElementById("wrngemail").style.display = "block";
 }
}
wrngemail();
</script>
</html>
