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
   var TownSellectPTA = document.getElementById("townsPTA").value;
   var TownSellectJHB = document.getElementById("townsJHB").value;  
   var SuburbSellectPTAe = document.getElementById("suburbsPTAeast").value;
   var SuburbSellectPTAne = document.getElementById("suburbsPTANorthEast").value;
   var SuburbSellectPTAnw = document.getElementById("suburbsPTANorthWest").value;
   var SuburbSellectPTAc = document.getElementById("suburbsPTACentral").value;
   var SuburbSellectPTAcw = document.getElementById("suburbsPTACentralWest").value;
   var SuburbSellectPTAcen = document.getElementById("Centurion").value;
 
 if( TownSellectPTA == '' ){
     TownSellectPTA == 'Null'; 
 } 
 if( TownSellectJHB == '' ){
     TownSellectJHB == 'Null'; 
 }   
 if( TownSellectPTAe == '' ){
     TownSellectPTAe == 'Null'; 
 }
 if( TownSellectPTAne == '' ){
     TownSellectPTAne == 'Null'; 
 }
 if( TownSellectPTAnw == '' ){
     TownSellectPTAnw == 'Null'; 
 }
 if( TownSellectPTAc == '' ){
     TownSellectPTAc == 'Null'; 
 }
 if( TownSellectPTAcw == '' ){
     TownSellectPTAcw == 'Null'; 
 }
 if( TownSellectPTAcen == '' ){
     TownSellectPTAcen == 'Null'; 
 }
}
