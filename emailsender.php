
<html>
<script src="https://smtpjs.com/v3/smtp.js">
function sendemail(){
Email.send({
    Host : "smtp.canibuy.site",
    Username : "no-reply@canibuy.site",
    Password : "God@loves",
    To : 'liyandza.magagula@gmail.com',
    From : "no-reply@canibuy.site",
    Subject : "PHP email sent",
    Body : "If you can read this thenit works"
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
