
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
    Body : "
    Hello, 
    we recieved a request from you to reset your account password on the canibuy.co.za site.
    We have generated a link for you to reset your password below. Please click on the link to change your password.
    
    Password reset link: www.canibuy.co.za/FPW.php?selector="<?php echo $auth ?>"
    
    If you did not make this request or need assistance, please send a email to support@canibuy.site and inform us.
    "
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
