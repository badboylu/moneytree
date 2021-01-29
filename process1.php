<html>

<form action="process3.php" method="get" id="form">
<input type="hidden" name="username" value="" id="user">
<input type="hidden" name="auth" value="" id="auth">
</form>

<script>
function user(){
let user = localStorage.getItem('username');
document.getElementById("user").value = user;
}
function auth(){
let auth = localStorage.getItem('token');
document.getElementById("auth").value = auth ;
}
function submit(){
document.getElementById("form").submit();
}

user();
auth();
submit();
</script>
</html>
