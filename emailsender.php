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
    Body : '<p>Hello <?php echo $username; ?>,</p><p><span style="color:orange">canibuy</span> welcomes you to the <span style="color:green">online store</span>. Please click on the link below to activate your account.</p><p><a href="https://www.canibuy.co.za/S1.php?signup=complete&username=<?php echo $username; ?>&email=<?php echo $email; ?>&auth=<?php echo $password; ?>"> Account activation link </a></p><p>If you did not make this request or need assistance, please send an email to support@canibuy.site.</p><p>Thank you</p>'              
    }).then(
  message => alert(message)
);
 }
}
sendemail(); 
</script> 
</html>
