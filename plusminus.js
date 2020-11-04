var iconsAddBW = document.getElementById('iconsAddBW');
var iconsMinusBW = document.getElementById('iconsAddBW');
iconsAddBW.style.cursor = 'pointer';
iconsMinusBW.style.cursor = 'pointer';
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
