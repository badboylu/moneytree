<?php
$token= bin2hex(random_bytes(16));
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <h3>Welcome to <span style="color:orange;">canibuy</span></h3>.             
                        <p style="color:green;" >Cannabis Disposal Agency</p>
                        <p><small>Backend users (<a href="Signin.php"><span>Click here<span></a>)</small></p>
                        <p>To enter you must acknowledge the following:</p>
                        <p>I am over 18 years of age and I have read these <a href="A1.php">terms and conditions</a>.</p>
                        <div class="page-links">
                            <p><a href="Welcome.php"><span>I don't agree<span></a></p>
                            <p><a href="Shop.php?auth=<?php echo $token; ?>"><span style="color:green">I agree<span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
