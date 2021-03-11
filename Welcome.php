<?php
$reset=$_GET['pwdReset'];
$signup=$_GET['signup'];
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
                        <h3>Welcome! <br> Login to <span style="color:orange;">canibuy</span></h3>.             
                        <p style="color:green;" >Cannibus Health Store</p>
                        <p style="color:green;" >Cannibus Health Store</p>
                        <div class="page-links">
                            <br>
                            <a href="Welcome.php"><span>Register new account<span></a>
                            <br>
                            <a href="Shop.php"><span style="color:green">Register new account<span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script 
src="ShowHandlers.js" >
</script>
<script>
function handler(){
 let confirmation="<?php echo $reset; ?>";
 if(confirmation=="successful"){
  document.getElementById("successful4").style.display = "block";
 }
}
handler();
</script>
<script>
function handler2(){
 let signup="<?php echo $signup; ?>";
 if(signup=="successful"){
  document.getElementById("successful5").style.display = "block";
 }
}
handler2();
</script>
</html>
