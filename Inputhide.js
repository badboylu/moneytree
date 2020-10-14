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

setInterval (function showPTAeast()
{
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaEast'){
		document.getElementById("suburbsPTAeast").style.display = "none";
	}else{
		document.getElementById("suburbsPTAeast").style.display = "block";
	}
}, 1000);

hideJHB();
hidePTA();
showPTAeast();
