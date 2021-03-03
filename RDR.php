<?php
$auth=$_GET['error'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="iofrm-theme17.css">
</head>
<body>
    <div class="form-body without-side">
        
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
                        <h3>Recruite Delivery Agent</h3>
                    
<form action="RDR1.php" method="get">
<div><label>Enter Delivery Agent's e-mail address:</label></div>
<div><input class="form-control" type="text" name="email" placeholder="E-mail Address" required></div>
<input type="hidden" name="Location" value="<?php echo $_GET['location']; ?>">
<div class="form-button full-width">
<button type="submit" class="ibtn">Send Activation Link</button>
</div>
</form>
                        <div style="display:none" id="wrngemail">
                        <p><span style="color:red"><small>*E-mail address submitted is not registered</small></span></p>
                        </div>
                        <div style="display:none" id="link">
                        <p><span style="color:red"><small>*Reset link has already been sent to this e-mail address</small></span></p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function handler(){
 let confirmation="<?php echo $auth; ?>";
 if(confirmation=="emailnotfound"){
  document.getElementById("wrngemail").style.display = "block";
 }
 if(confirmation=="linksent"){
  document.getElementById("link").style.display = "block";
 }
}
handler();
</script>
</html>
