<?php
$auth=$_GET['error'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                        <h3>Distro account activation</h3>
                        <p>Distro recruitment</p>
<form action="RD1.php" method="get">
<div style"padding-bottom:4px"><label>Province:</label>
<select name="Province" id="province" form="plug" required>
  <option value="" disabled selected>Select Province</option>
  <option value="Gauteng" >Gauteng</option>
</select></div>
<div style"padding-bottom:4px"><label>City:</label>
<select name="City" id="city" form="plug" required>
  <option value="" disabled selected>Select City</option>
  <option value="Johannesburg" >Johannesburg</option>
  <option value="Pretoria" >Pretoria</option>
</select></div>
<div style"padding-bottom:4px"><label>Allocated area:</label>
<select class="PTAtown" name="Towns" id="townsPTA" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="PretoriaEast">Pretoria East</option>
  <option value="PretoriaNorthEast" disabled >Pretoria North East</option>
  <option value="PretoriaNorthWest" disabled >Pretoria North West</option>
  <option value="PretoriaCentral" disabled >Pretoria Central</option>
  <option value="PretoriaCentralWest" disabled >Pretoria Central West</option>
  <option value="Centurion" disabled >Centurion</option>
  <option value="Null" style="display:none" >Null</option>
</select></div>
<div><label>Distro's e-mail address:</label></div>
<div><input class="form-control" type="text" name="email" placeholder="E-mail Address" required></div>
<div class="form-button full-width">
<button type="submit" class="ibtn">Send Activation Link</button>
</div>
</form>
                        
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
