function deliveryd(){

   if(document.frmmoneytree.City.value=='Tshwane/Pretoria'){
     document.getElementById("townsPTA").style.display = "block";
     document.getElementById("townsJHB").style.display = "none";
   }
   if(document.frmmoneytree.City.value=='Johannesburg'){
     document.getElementById("townsPTA").style.display = "none";
     document.getElementById("townsJHB").style.display = "block";
   }
 }

deliveryd();
