const Fill = document.querySelectorAll('.Blanks');

Fill.forEach(Blanks =>{
        Blanks.addEventListener('click', () => {
                Fillblanks();              

})
}
)

function Fillblanks(){
   var Mall = document.getElementById('Mall1').value;
   var Estate = document.getElementById('Estate1').value;
   var Company = document.getElementById('Company1').value;
   var Shop = document.getElementById('Shop1').value;
   var Complex = document.getElementById('Complex1').value;
   var Building = document.getElementById('Building1').value;
   var Street = document.getElementById('Street1').value;
   var House = document.getElementById('House1').value; 
   var Unit = document.getElementById('Unit1').value;
   var TownSellectPTA = document.getElementById('townsPTA').value;
   var TownSellectJHB = document.getElementById('townsJHB').value;  
   var SuburbSellectPTAe = document.getElementById("suburbsPTAeast").value;
   var SuburbSellectPTAne = document.getElementById("suburbsPTANorthEast").value;
   var SuburbSellectPTAnw = document.getElementById("suburbsPTANorthWest").value;
   var SuburbSellectPTAc = document.getElementById("suburbsPTACentral").value;
   var SuburbSellectPTAcw = document.getElementById("suburbsPTACentralWest").value;
   var SuburbSellectPTAcen = document.getElementById("Centurion").value;
 
 if( TownSellectPTA){
      document.getElementById("townsJHB").disable; 
 } 
 if( TownSellectJHB == '1' ){
     document.getElementById("townsPTA").selectedIndex = "7";
 }   
 if( TownSellectPTAe == '1' ){
     TownSellectPTAe == 'Null'; 
 }
 if( TownSellectPTAne == '1' ){
     TownSellectPTAne == 'Null'; 
 }
 if( TownSellectPTAnw == '1' ){
     TownSellectPTAnw == 'Null'; 
 }
 if( TownSellectPTAc == '1' ){
     TownSellectPTAc == 'Null'; 
 }
 if( TownSellectPTAcw == '1' ){
     TownSellectPTAcw == 'Null'; 
 }
 if( TownSellectPTAcen == '1' ){
     TownSellectPTAcen == 'Null'; 
 }
}
