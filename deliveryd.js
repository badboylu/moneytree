function deliveryd(){

   if(document.moneytree.City.value=='Tshwane/Pretoria'){
     document.getElementById("townsPTA").style.display = "block";
     document.getElementById("townsJHB").style.display = "none";
   }
   if(document.moneytree.City.value=='Johannesburg'){
     document.getElementById("townsPTA").style.display = "none";
     document.getElementById("townsJHB").style.display = "block";
   }
 }

deliveryd();
