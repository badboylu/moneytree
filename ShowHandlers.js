let params = new URLSearchParams(location.search);
var errorh  = params.get('error');
var error  = params.get('logout');

function show(){
  if(errorh =='wrnguid'){
   document.getElementById("username").style.display = "block";
 }
  else if(errorh=='wrngpwd'){
   document.getElementById("uid").value = params.get('username');
   document.getElementById("password").style.display = "block";
 }
  else if(errorh=='usernameexists'){
   document.getElementById("usernamenotavail").style.display = "block";
 }
  else if(errorh=='invalidemail'){
   document.getElementById("invalidemail").style.display = "block";
   document.getElementById("uid").value = params.get('username');
 }
  else if(errorh=='emailexists'){
   document.getElementById("emailexists").style.display = "block";
   document.getElementById("uid").value = params.get('username');
 }
  else if(errorh=='pwdnomatch'){
   document.getElementById("passwordmatch").style.display = "block";
   document.getElementById("uid").value = params.get('username');
   document.getElementById("email").value = params.get('email');
 }
  else if(errorh=='invalidpwd'){
   document.getElementById("invalidpassword").style.display = "block";
   document.getElementById("uid").value = params.get('username');
   document.getElementById("email").value = params.get('email');
 }
  else if(errorh=='notloggedin'){
   document.getElementById("notloggedin").style.display = "block";
 }
  else if(error=='successful'){
   document.getElementById("successful").style.display = "block";
   document.getElementById("successful2").style.display = "block";
 }
}

show();
