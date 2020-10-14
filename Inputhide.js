setInterval (function hideJHB(){
   var City = document.getElementById('').value;
        if (City=='Tshwane/Pretoria'){
		document.getElementById("BW").style.display = "none";
	}else{
		document.getElementById("BW").style.display = "block";
	}
}, 1000);

hideJHB();
