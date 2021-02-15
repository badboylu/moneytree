
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
    Body : "<p>Hello,</p><p>How is this spacing looking like?</p>"
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
