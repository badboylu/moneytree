
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
    Subject : "PHP email sent",
    Body : "Bro this you? lol"
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
