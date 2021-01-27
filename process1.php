<?php
 $user = $_COOKIE['username'];
 $auth = $_COOKIE['token'];
 echo $user;
 echo $auth;
?>
<html>
<form action="F1.php" method="get" id="key">
<input name="username" type="hidden" value="<?php echo $user; ?>">
<input name="auth" type="hidden" value="<?php echo $auth; ?>">
</form>

<html>
