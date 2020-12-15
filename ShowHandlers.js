let params = new URLSearchParams(location.search);
var errorh  = params.get('error');

function show(){
  if(errorh =='wrnguid'){
  document.getElementById("myText").value = params.get('username');
  document.getElementById("username").style.display = "block";
 }else if(errorh=='wrngpwd'){
   document.getElementById("password").style.display = "block";
 }
}

show();
