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
    Body : '<p>Hello <?php echo $username; ?>,</p><p>you have successfully <span style="color:green">placed</span> an order at <span style="color:orange">canibuy</span>.</p><p><h3>Transaction details:</h3></p><p>Amount transacted:<span> R</span><?php echo $total; ?><span>.00</span></p><p><h3>Order:</h3></p><p><?php if($dp>0){echo'Durban poison:<span> </span>';} ?><?php if($dp>0){echo $dp;} ?><?php if($dp>0){echo '<span> gram/s</span>';} ?></p><p><?php if($cc>0){echo'Dabcapsules (Light):<span> </span>';} ?><?php if($cc>0){echo $cc;} ?><?php if($cc>0){echo '<span> batch/es</span>';} ?></p><p><?php if($oc>0){echo'Orange cali:<span> </span>';} ?><?php if($oc>0){echo $oc;} ?><?php if($oc>0){echo '<span> gram/s</span>';} ?></p><p><?php if($bw>0){echo'Raw rizzla:<span> </span>';} ?><?php if($bw>0){echo $bw;} ?><?php if($bw>0){echo '<span> pack/s</span>';} ?></p><p><?php if($pr>0){echo'Pre-roll:<span> </span>';} ?><?php if($pr>0){echo $pr;} ?><?php if($pr>0){echo '<span> J/s</span>';} ?></p><p><?php if($nl>0){echo'Northern lights:<span> </span>';} ?><?php if($nl>0){echo $nl;} ?><?php if($nl>0){echo '<span> gram/s</span>';} ?></p><p><?php if($cces>0){echo'Dabcapsules (Strong):<span> </span>';} ?><?php if($cces>0){echo $cces;} ?><?php if($cces>0){echo '<span> batch/es</span>';} ?></p><p><?php if($pe>0){echo'Pineapple express: <span> </span>';} ?><?php if($pe>0){echo $pe;} ?><?php if($pe>0){echo '<span> gram/s</span>';} ?></p>'                        
}).then(
  message => alert(message)
);
}
sendemail();
</script> 
</html>
