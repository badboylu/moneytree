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
    Body : '<p>Hello <?php echo $username; ?>,</p><p><span style="color:orange">canibuy</span> recieved a request to reset your account password. A link has been generated for you to <span style="color:green">reset</span> your password below. Please click on the link below to change your password.</p><p><a href="https://www.canibuy.co.za/R2.php?auth=<?php echo $auth; ?>"> Password reset link </a></p><p>If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us.</p><p>Thank you</p>'              
          
}).then(
  message => alert(message)
);
}
sendemail();
</script> 
</html>
