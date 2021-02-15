<?php
$auth=bin2hex(random_bytes(8));
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
    To : 'liyandza.magagula@gmail.com',
    From : "no-reply@canibuy.site",
    Subject : "Reset Canibuy password",
    Body : '<p>Hello,</p><p>we have recieved a request to reset your account password on the canibuy.co.za site. We have generated a link for you to reset your password below. Please click on the link below to change your password.</p><p> Password reset link: www.canibuy.co.za/FPW.php?selector=</p>'   
}).then(
  message => alert(message)
);
}
sendemail();
</script> 
<?php
echo'sent';
?>
</html>
