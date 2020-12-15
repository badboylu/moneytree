let params = new URLSearchParams(location.search);
var errorh  = params.get('error');

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
  else if(errorh=='pwdnomatch'){
   document.getElementById("passwordmatch").style.display = "block";
   document.getElementById("uid").value = params.get('username');
   document.getElementById("email").value = params.get('email');
 }
}

show();
