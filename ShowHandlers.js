let params = new URLSearchParams(location.search);
var error  = params.get('name')

function show(){
  if(error='wrnguid'){
   document.getElementById("username").style.display = "block";
 }else if(error='wrngpwd'){
   document.getElementById("password").style.display = "block";
 }
}

show();
