<html>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
function sendemail(){
Email.send({
    Host : "mail.canibuy.co.za port 58",
    Username : "no-reply@canibuy.co.za",
    Password : "God@loves",
    To : 'liyandza.magagula@gmail.com',
    From : "no-reply@canibuy.co.za",
    Subject : "Send with php by Lunga Magagula",
    Body : "I am proud to type that you have sent this email with code written by yourself boi!"
}).then(
  message => alert(message)
);
}
sendemail();
</script> 
</html>
