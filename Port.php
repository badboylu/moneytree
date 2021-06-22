<?php
$token= bin2hex(random_bytes(16));
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port</title>
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
                    <img src="LoginBackground.jpg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Welcome to <span style="color:seagreen;">canibu</span></h3>           
                        <p><strong>Cannabis Disposal Agency</strong></p>
<p> 
<div style="display: flex; justify-content: center;">
<img  
src="https://res.cloudinary.com/ddjrcafre/image/upload/c_scale,w_100/v1621676015/1200px-SAPS_badge.svg_hiit7p.png"  
alt="" /> 
</div>
</p>
                        <p style="color:grey;" ><small>Powered by the <a href="https://www.saps.gov.za">SAPS</a> and the <a href="https://www.tia.org.za">TIA</a></small></p>
                        <p style="color:grey;" ><small>About us [<a href="A3.php"><span>info<span></a>]</small></p>
                        <p style="color:grey;" ><small>Operations login [<a href="Signin.php"><span>click here<span></a>]</small></p>
                        <p><small>To enter you must acknowledge the following:</small></p>
                        <p><small>I am over 18 years of age and I have read these <a href="A1.php">terms and conditions</a>.</small></p>
                        <div class="page-links">
                            <p><a href="Welcome.php"><span><small>I don't agree</small><span></a></p>
                            <p><a href="Items.php?auth=<?php echo $token; ?>"><span style="color:green"><small>I agree</small><span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
