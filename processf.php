<html>
<form action="F1.php" method="get" id="key">
<input name="username" type="hidden" value="" id="user">
<input name="auth" type="hidden" value="" id="auth">
</form>
<script>
function keys(){
let username = localStorage.getItem('username'); 
let token = localStorage.getItem('token');
document.getElementById("user").value = username;
document.getElementById("auth").value = token;
document.getElementById("key").submit();
}
keys();
</script>
<html>
