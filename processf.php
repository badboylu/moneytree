<html>
<form action="F1.php" method="get" id="key">
<input name="username" type="hidden" value="" id="user">
<input name="auth" type="hidden" value="" id="auth">
</form>
<script>
function keys(){
username = document.getElementById("user").value;
token = document.getElementById("auth").value;
document.getElementById("key").submit();
}
keys();
</script>
<html>
