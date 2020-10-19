setInterval (function hideJHB(){
   var City = document.getElementById('city').value;
        if (City=='Tshwane/Pretoria'){
		document.getElementById("hidePTAtown").style.display = "block";
                document.getElementById("townsJHB").removeAttribute("required");
	}else{
		document.getElementById("hidePTAtown").style.display = "none";
	}
}, 1000);

setInterval (function hidePTA(){
   var City = document.getElementById('city').value;
        if (City=='Johannesburg'){
		document.getElementById("hideJHBtown").style.display = "block";
                document.getElementById("townsPTA").removeAttribute("required");
	}else{
		document.getElementById("hideJHBtown").style.display = "none";
	}
}, 1000);

setInterval (function showPTAeast(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaEast' && City=='Tshwane/Pretoria'){
		document.getElementById("hidePTAeastsuburb").style.display = "block";
                document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                document.getElementById("suburbsPTACentral").removeAttribute("required");
                document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                document.getElementById("suburbsPTACenturion").removeAttribute("required");
	}else{
		document.getElementById("hidePTAeastsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showPTAnorthEast(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaNorthEast' && City=='Tshwane/Pretoria'){
		document.getElementById("hidePTANorthEastsuburb").style.display = "block";
                document.getElementById("suburbsPTAeast").removeAttribute("required");
                document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                document.getElementById("suburbsPTACentral").removeAttribute("required");
                document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                document.getElementById("suburbsPTACenturion").removeAttribute("required");
	}else{
		document.getElementById("hidePTANorthEastsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showPTAnorthWest(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaNorthWest' && City=='Tshwane/Pretoria'){
		document.getElementById("hidePTANorthWestsuburb").style.display = "block";
                document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                document.getElementById("suburbsPTAeast").removeAttribute("required");
                document.getElementById("suburbsPTACentral").removeAttribute("required");
                document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                document.getElementById("suburbsPTACenturion").removeAttribute("required");
	}else{
		document.getElementById("hidePTANorthWestsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showPTACentral(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaCentral' && City=='Tshwane/Pretoria'){
		document.getElementById("hidePTACentralsuburb").style.display = "block";
                document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                document.getElementById("suburbsPTAeast").removeAttribute("required");
                document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                document.getElementById("suburbsPTACenturion").removeAttribute("required");
	}else{
		document.getElementById("hidePTACentralsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showPTACentralWest(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='PretoriaCentralWest' && City=='Tshwane/Pretoria'){
		document.getElementById("hidePTACentralWestsuburb").style.display = "block";
                document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                document.getElementById("suburbsPTACentral").removeAttribute("required");
                document.getElementById("suburbsPTAeast").removeAttribute("required");
                document.getElementById("suburbsPTACenturion").removeAttribute("required");
	}else{
		document.getElementById("hidePTACentralWestsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showCenturion(){
   var City = document.getElementById('city').value;
   var Town = document.getElementById('townsPTA').value;
        if (Town=='Centurion' && City=='Tshwane/Pretoria'){
		document.getElementById("hideCenturionsuburb").style.display = "block";
                document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                document.getElementById("suburbsPTACentral").removeAttribute("required");
                document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                document.getElementById("suburbsPTAeast").removeAttribute("required");
	}else{
		document.getElementById("hideCenturionsuburb").style.display = "none";
	}
}, 1000);

setInterval (function showStructuretypeEast(){
   var Suburb = document.getElementById('suburbsPTAeast').value;
        if (Suburb){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showStructuretypeNorthEast(){
   var Suburb = document.getElementById('suburbsPTANorthEast').value;
        if (Suburb){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showStructuretypeNorthWest(){
   var Suburb = document.getElementById('suburbsPTANorthWest').value;
        if (Suburb){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showStructuretypeCentral(){
   var Suburb = document.getElementById('suburbsPTACentral').value;
        if (Suburb){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showStructuretypeCentralWest(){
   var Suburb = document.getElementById('suburbsPTACentralWest').value;
        if (Suburb){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showStructuretypeCenturion(){
   var Suburb = document.getElementById('suburbsPTACenturion').value;
        if (Suburb){
		document.getElementById("hidecribtype").style.display = "block";
	}
}, 1000);

setInterval (function showEstate(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate'){
		document.getElementById("hideEstate").style.display = "block";
                document.getElementById("Complex1").removeAttribute("required");
                document.getElementById("Mall1").removeAttribute("required");
                document.getElementById("Shop1").removeAttribute("required");
                document.getElementById("Building1").removeAttribute("required");
                document.getElementById("Company1").removeAttribute("required");
	}else{
		document.getElementById("hideEstate").style.display = "block";
	}
}, 1000);

setInterval (function showComplex(){
   var Complex = document.getElementById('Cribtype').value;
        if (Complex=='Complex'){
		document.getElementById("hideComplex").style.display = "block";
                document.getElementById("Estate1").removeAttribute("required");
                document.getElementById("Mall1").removeAttribute("required");
                document.getElementById("Shop1").removeAttribute("required");
                document.getElementById("Building1").removeAttribute("required");
                document.getElementById("Company1").removeAttribute("required");
	}else{
		document.getElementById("hideComplex").style.display = "block";
	}
}, 1000);

setInterval (function showBuilding(){
   var Complex = document.getElementById('Cribtype').value;
        if (Complex=='Flat'){
		document.getElementById("hideBuilding").style.display = "block";
                document.getElementById("Complex1").removeAttribute("required");
                document.getElementById("Mall1").removeAttribute("required");
                document.getElementById("Shop1").removeAttribute("required");
                document.getElementById("Estate1").removeAttribute("required");
                document.getElementById("Company1").removeAttribute("required");
	}else{
		document.getElementById("hideBuilding").style.display = "block";
	}
}, 1000);

setInterval (function showOffice(){
   var Complex = document.getElementById('Cribtype').value;
        if (Complex=='Office'){
		document.getElementById("hideOffice").style.display = "block";
                document.getElementById("Complex1").removeAttribute("required");
                document.getElementById("Mall1").removeAttribute("required");
                document.getElementById("Shop1").removeAttribute("required");
                document.getElementById("Building1").removeAttribute("required");
                document.getElementById("Estate1").removeAttribute("required");
	}else{
		document.getElementById("hideOffice").style.display = "block";
	}
}, 1000);

setInterval (function showMall(){
   var Complex = document.getElementById('Cribtype').value;
        if (Complex=='Mall'){
		document.getElementById("hideMall").style.display = "block";
                document.getElementById("Complex1").removeAttribute("required");
                document.getElementById("Estate1").removeAttribute("required");
                document.getElementById("Shop1").removeAttribute("required");
                document.getElementById("Building1").removeAttribute("required");
                document.getElementById("Company1").removeAttribute("required");
                document.getElementById("Street1").removeAttribute("required");
	}else{
		document.getElementById("hideMall").style.display = "block";
	}
}, 1000);

setInterval (function showShop(){
   var Complex = document.getElementById('Cribtype').value;
        if (Complex=='Mall' || Complex=='Shop' ){
		document.getElementById("hideShop").style.display = "block";
                document.getElementById("Complex1").removeAttribute("required");
                document.getElementById("Mall1").removeAttribute("required");
                document.getElementById("Estate1").removeAttribute("required");
                document.getElementById("Building1").removeAttribute("required");
                document.getElementById("Company1").removeAttribute("required");
	}else{
		document.getElementById("hideShop").style.display = "block";
	}
}, 1000);

setInterval (function showStreet(){
   var Estate = document.getElementById('Cribtype').value;
   var House = document.getElementById('Cribtype').value;
   var Complex = document.getElementById('Cribtype').value;
        if (Estate=='Estate' || House=='House' || Complex=='Complex' || Complex=='Flat' || Complex=='Office' || Complex=='Shop' ){
		document.getElementById("hideStreet").style.display = "block";
	}else{
		document.getElementById("hideStreet").style.display = "block";
	}
}, 1000);

setInterval (function showNumber(){
   var Estate = document.getElementById('Cribtype').value;
        if (Estate=='Estate' || Estate=='Complex' || Estate=='Flat' ){
		document.getElementById("hideNumber").style.display = "block";
                document.getElementById("House1").removeAttribute("required");
	}else{
		document.getElementById("hideNumber").style.display = "block";
	}
}, 1000);

setInterval (function showHouseNumber(){
   var House = document.getElementById('Cribtype').value;
        if (House=='House'){
		document.getElementById("hideHouseNumber").style.display = "block";
                document.getElementById("Unit1").removeAttribute("required");
	}else{
		document.getElementById("hideHouseNumber").style.display = "block";
	}
}, 1000);

setInterval (function showContactNumber(){
   var Estate = document.getElementById('Cribtype').value;
   var House = document.getElementById('Cribtype').value;
        if (Estate=='Estate' || House=='House' || House=='Complex' || House=='Flat' || House=='Office' || House=='Mall' || House=='Shop' ){
		document.getElementById("hideContactNumber").style.display = "block";
	}else{
		document.getElementById("hideContactNumber").style.display = "none";
	}
}, 1000);

setInterval (function showContactName(){
   var Estate = document.getElementById('Cribtype').value;
   var House = document.getElementById('Cribtype').value;
        if (Estate=='Estate' || House=='House' || House=='Complex' || House=='Flat' || House=='Office' || House=='Mall' || House=='Shop' ){
		document.getElementById("hideName").style.display = "block";
	}else{
		document.getElementById("hideName").style.display = "none";
	}
}, 1000);

hideJHB();
hidePTA();
showPTAeast();
showStructuretypeEast();
showEstate();
showStreet();
showNumber();
showContactNumber();
showContactName();
showPTAnorthEast();
showPTAnorthWest();
showPTACentral();
showPTACentralWest();
showCenturion();
showStructuretypeNorthEast();
showStructuretypeNorthWest();
showStructuretypeCentral();
showStructuretypeCentralWest();
showStructuretypeCenturion();
showComplex();
showBuilding();
showOffice();
showMall();
showShop();
