<?php
session_start();
$user = $_SESSION['username'];
$auth = $_SESSION['token'];
?>
<html>
<form action="T1.php" method="get" id="key">
<input name="username" type="hidden" value="<?php echo $user; ?>">
<input name="auth" type="hidden" value="<?php echo $auth; ?>">
</form>
<script>
function keys(){
document.getElementById("key").submit();
}
keys();
</script>
<html>
