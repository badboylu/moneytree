setInterval (function hideJHB(){
   var City = document.getElementById('city').value;
        if (City=='Tshwane/Pretoria'){
		document.getElementById("hidePTAtown").style.display = "block";
	}else{
		document.getElementById("hidePTAtown").style.display = "none";
	}
}, 1000);

setInterval (function hidePTA(){
   var City = document.getElementById('city').value;
        if (City=='Johannesburg'){
		document.getElementById("hideJHBtown").style.display = "block";
	}else{
		document.getElementById("hideJHBtown").style.display = "none";
	}
}, 1000);

setInterval (function showPTAeast(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaEast' && City=='Tshwane/Pretoria'){
		document.getElementById("hidePTAeastsuburb").style.display = "block";
	}else{
		document.getElementById("hidePTAeastsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showStructuretype(){
   var Town = document.getElementById('townsPTA').value;
        if (Town){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showEstate(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate'){
		document.getElementById("hideEstate").style.display = "block";
	}else{
		document.getElementById("hideEstate").style.display = "none";
	}
}, 1000);

setInterval (function showStreet(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate'){
		document.getElementById("hideStreet").style.display = "block";
	}else{
		document.getElementById("hideStreet").style.display = "none";
	}
}, 1000);

setInterval (function showNumber(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate'){
		document.getElementById("hideNumber").style.display = "block";
	}else{
		document.getElementById("hideStreet").style.display = "none";
	}
}, 1000);

setInterval (function showContactNumber(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate'){
		document.getElementById("hideContactNumber").style.display = "block";
	}else{
		document.getElementById("hideContactNumber").style.display = "none";
	}
}, 1000);

setInterval (function showContactName(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate'){
		document.getElementById("hideName").style.display = "block";
	}else{
		document.getElementById("hideName").style.display = "none";
	}
}, 1000);

hideJHB();
hidePTA();
showPTAeast();
showStructuretype();
showEstate();
showStreet();
showNumber();
showContactNumber();
showContactName();
