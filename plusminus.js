var iconsAddBW = document.getElementById('iconsAddBW');
var iconsMinusBW = document.getElementById('iconsMinusBW');
iconsAddBW.style.cursor = 'pointer';
iconsMinusBW.style.cursor = 'pointer';

var iconsAddOC = document.getElementById('iconsAddOC');
var iconsMinusOC = document.getElementById('iconsMinusOC');
iconsAddOC.style.cursor = 'pointer';
iconsMinusOC.style.cursor = 'pointer';

iconsAddBW.onclick = function() {
var priceBW = 45;
   localStorage.setItem('totalCostBW', priceBW);
   var cartCostBW= localStorage.getItem('totalCostBW', priceBW);
   cartCostBW = parseInt(cartCostBW);
        if(cartCostBW) {
                localStorage.setItem('totalCostBW', cartCostBW);
        }else{
                localStorage.setItem('totalCostBW', parseInt(cartCostBW));
        }
        
   let ifavailableBW = localStorage.getItem('PacksBW')
        ifavailableBW = parseInt(ifavailableBW);
               if(ifavailableBW) {
                localStorage.setItem('PacksBW',(ifavailableBW) + 1);
                let gramsNumberaddBW = localStorage.getItem('PacksBW'); 
                gramsNumberaddBW = parseInt(gramsNumberaddBW);
                document.querySelector('.gramsamountBW').textContent =parseInt(gramsNumberaddBW);
               }else{
                localStorage.setItem('PacksBW', 1 );       
                document.querySelector('.gramsamountBW').textContent = parseInt(gramsNumberaddBW);
               }
};

iconsMinusBW.onclick = function() {
   var priceBW = 45;
    localStorage.setItem('totalCostBW', priceBW);
        var cartCostBW= localStorage.getItem('totalCostBW', priceBW);
        cartCostBW = parseInt(cartCostBW);
        if(cartCostBW) {
                localStorage.setItem('totalCostBW', cartCostBW);
        }else{
                localStorage.setItem('totalCostBW', parseInt(cartCostBW));
        }
   let gramsNumbersminusBW = localStorage.getItem('PacksBW'); 
        gramsNumbersminusBW = parseInt(gramsNumbersminusBW);
               if(gramsNumbersminusBW) {
                localStorage.setItem('PacksBW', gramsNumbersminusBW = (gramsNumbersminusBW - 1));
                document.querySelector('.gramsamountBW').textContent = parseInt(gramsNumbersminusBW) -1;
               }else{
                document.querySelector('.gramsamountBW').textContent = 0;   
}
   let checkgramsBW = localStorage.getItem("PacksBW");
        checkgramsBW = parseInt(checkgramsBW);
        if(checkgramsBW < 1){
                localStorage.removeItem("PacksBW");
                localStorage.removeItem("totalAmountBW");
                localStorage.removeItem("totalCostBW");
                localStorage.removeItem("cartNumberBW");
        }

};

iconsAddOC.onclick = function() {
  var priceOC = 20;
  localStorage.setItem('totalCostOC', priceOC);
        var cartCostOC= localStorage.getItem('totalCostOC', priceOC);
        cartCostOC = parseInt(cartCostOC);
        if(cartCostOC) {
                localStorage.setItem('totalCostOC', cartCostOC);
        }else{
                localStorage.setItem('totalCostOC', parseInt(cartCostOC));
        }
     let ifavailableOC = localStorage.getItem('GramsOC')
        ifavailableOC = parseInt(ifavailableOC);
               if(ifavailableOC) {
                localStorage.setItem('GramsOC',(ifavailableOC) + 5);
                let gramsNumberaddOC = localStorage.getItem('GramsOC'); 
                gramsNumberaddOC = parseInt(gramsNumberaddOC);
                document.querySelector('.gramsamountOC').textContent =parseInt(gramsNumberaddOC);
               }else{
                localStorage.setItem('GramsOC', 5 );       
                document.querySelector('.gramsamountOC').textContent = parseInt(gramsNumberaddOC);
               }
};

iconsMinusOC.onclick = function() {
  var priceOC = 20;
  localStorage.setItem('totalCostOC', priceOC);
        var cartCostOC= localStorage.getItem('totalCostOC', priceOC);
        cartCostOC = parseInt(cartCostOC);
        if(cartCostOC) {
                localStorage.setItem('totalCostOC', cartCostOC);
        }else{
                localStorage.setItem('totalCostOC', parseInt(cartCostOC));
        }
   let gramsNumbersminusOC = localStorage.getItem('GramsOC'); 
        gramsNumbersminusOC = parseInt(gramsNumbersminusOC);
               if(gramsNumbersminusOC) {
                localStorage.setItem('GramsOC', gramsNumbersminusOC = (gramsNumbersminusOC - 5));
                document.querySelector('.gramsamountOC').textContent = parseInt(gramsNumbersminusOC) -5;
               }else{
                document.querySelector('.gramsamountOC').textContent = 0;   
        }
   let checkgramsOC = localStorage.getItem("GramsOC");
        checkgramsOC = parseInt(checkgramsOC);
        if(checkgramsOC < 1){
                localStorage.removeItem("GramsOC");
                localStorage.removeItem("totalAmountOC");
                localStorage.removeItem("totalCostOC");
                localStorage.removeItem("cartNumberOC");
        }
};
