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
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town && City){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showEstate(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate==Estate){
		document.getElementById("hideEstate").style.display = "block";
	}else{
		document.getElementById("hidePTAtown").style.display = "none";
	}
}, 1000);

hideJHB();
hidePTA();
showPTAeast();
showStructuretype();
showEstate();
