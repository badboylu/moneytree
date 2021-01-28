<html>
<form action="F1.php" method="get" id="form">
<input type="hidden" name="auth" value="" id="auth">
<input type="hidden" name="username" value="" id="user">
</form>
<script>
function show(){
let user = localStorage.getItem('username');
document.getElementById("user").value = user;
}
function show1(){
let auth = localStorage.getItem('token');
document.getElementById("auth").value = auth ;
}
function submit(){
document.getElementById("form").submit();
}
show();
show1();
submit();
</script>
</html>
