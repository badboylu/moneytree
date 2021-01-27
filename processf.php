<html>
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
