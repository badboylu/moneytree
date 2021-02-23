<?php
$auth=bin2hex(random_bytes(16));
$email='liyandza.magagula@gmail.com';
$username='Lunga';
?>
<html>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
function sendemail(){
Email.send({
    Host : "mail.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : '<?php echo $email; ?>',
    From : "no-reply@canibuy.site",
    Subject : "Reset Canibuy password",
    Body : '<p><div style="height:30px; width:100%; background:green;"></div><img  src="https://res.cloudinary.com/badboylu/image/upload/c_scale,w_200/v1595757623/website_logo_head_aswjjx.jpg" alt="Basel" /><div style="height:15px; width:100%; background:black;"></div></p><br><p>Hello <?php echo $username; ?>,</p><p><span style="color:orange">canibuy</span> recieved a request to reset your account password. A link has been generated for you to <span style="color:green">reset</span> your password below. Please click on the link below to change your password.</p><p><a href="https://www.canibuy.co.za/R2.php?auth=<?php echo $auth; ?>"><button>Password reset link</button></a></p><p>If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us.</p><p>Thank you</p><br><br><p><div style="height:48px; width:100%; background:black;"><p><div><span style="color:white; padding-left:5px; padding-top:15px; margine-bottom:5px;"><small>© 2021 Kahrent Technology Africa All rights reserved.</small></span></div><div><span style="color:white; padding-left:5px;"><small><a href="https://canibuy.co.za/A1.php">Terms and conditions</a></small></span></div></p></div></p>'              
   }).then(
  message => alert(message)
);
 }
sendemail(); 
</script> 
</html>
