function hideOrder1(){
   var mallhide = '<?php print_r($row['idCrib']); ?>';
   if(mallhide == 'Mall'){
   document.getElementById("hideBuilding").style.display = "none";
   document.getElementById("hideEstate").style.display = "none";
   document.getElementById("hideComplex").style.display = "none";
   document.getElementById("hideHouse").style.display = "none";
   document.getElementById("hideUnit").style.display = "none";
   document.getElementById("hideStreet").style.display = "none";
   }
   if(mallhide == 'Shop'){
   document.getElementById("hideBuilding").style.display = "none";
   document.getElementById("hideEstate").style.display = "none";
   document.getElementById("hideComplex").style.display = "none";
   document.getElementById("hideHouse").style.display = "none";
   document.getElementById("hideUnit").style.display = "none";
   document.getElementById("hideMall").style.display = "none";
   }
   if(mallhide == 'House'){
   document.getElementById("hideBuilding").style.display = "none";
   document.getElementById("hideEstate").style.display = "none";
   document.getElementById("hideComplex").style.display = "none";
   document.getElementById("hideHouse").style.display = "none";
   document.getElementById("hideUnit").style.display = "none";
   document.getElementById("hideMall").style.display = "none";
   }
   if(mallhide == 'Estate'){
   document.getElementById("hideBuilding").style.display = "none";
   document.getElementById("hideComplex").style.display = "none";
   document.getElementById("hideHouse").style.display = "none";
   document.getElementById("hideUnit").style.display = "none";
   document.getElementById("hideMall").style.display = "none";
   }
}
hideOrder1();
