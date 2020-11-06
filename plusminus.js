var iconsAddBW = document.getElementById('iconsAddBW');
var iconsMinusBW = document.getElementById('iconsMinusBW');
iconsAddBW.style.cursor = 'pointer';
iconsMinusBW.style.cursor = 'pointer';

var iconsAddOC = document.getElementById('iconsAddOC');
var iconsMinusOC = document.getElementById('iconsMinusOC');
iconsAddOC.style.cursor = 'pointer';
iconsMinusOC.style.cursor = 'pointer';

var iconsAddCC = document.getElementById('iconsAddCC');
var iconsMinusCC = document.getElementById('iconsMinusCC');
iconsAddCC.style.cursor = 'pointer';
iconsMinusCC.style.cursor = 'pointer';

var iconsAddPR = document.getElementById('iconsAddPR');
var iconsMinusPR = document.getElementById('iconsMinusPR');
iconsAddPR.style.cursor = 'pointer';
iconsMinusPR.style.cursor = 'pointer';

var iconsAddCCES = document.getElementById('iconsAddCCES');
var iconsMinusCCES = document.getElementById('iconsMinusCCES');
iconsAddCCES.style.cursor = 'pointer';
iconsMinusCCES.style.cursor = 'pointer';

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

iconsAddCC.onclick = function() {
var priceCC = 240;
    localStorage.setItem('totalCostCC', priceCC);
        var cartCostCC= localStorage.getItem('totalCostCC', priceCC);
        cartCostCC = parseInt(cartCostCC);
        if(cartCostCC) {
                localStorage.setItem('totalCostCC', cartCostCC);
        }else{
                localStorage.setItem('totalCostCC', parseInt(cartCostCC));
        }
    let ifavailableCC = localStorage.getItem('BatchCC')
        ifavailableCC = parseInt(ifavailableCC);
               if(ifavailableCC) {
                localStorage.setItem('BatchCC',(ifavailableCC) + 1);
                let gramsNumberaddCC = localStorage.getItem('BatchCC'); 
                gramsNumberaddCC = parseInt(gramsNumberaddCC);
                document.querySelector('.gramsamountCC').textContent =parseInt(gramsNumberaddCC);
               }else{
                localStorage.setItem('BatchCC', 1 );       
                document.querySelector('.gramsamountCC').textContent = parseInt(gramsNumberaddCC);
               }
};

iconsMinusCC.onclick = function() {
var priceCC = 240;
    localStorage.setItem('totalCostCC', priceCC);
        var cartCostCC= localStorage.getItem('totalCostCC', priceCC);
        cartCostCC = parseInt(cartCostCC);
        if(cartCostCC) {
                localStorage.setItem('totalCostCC', cartCostCC);
        }else{
                localStorage.setItem('totalCostCC', parseInt(cartCostCC));
        }
    let gramsNumbersminusCC = localStorage.getItem('BatchCC'); 
        gramsNumbersminusCC = parseInt(gramsNumbersminusCC);
               if(gramsNumbersminusCC) {
                localStorage.setItem('BatchCC', gramsNumbersminusCC = (gramsNumbersminusCC - 1));
                document.querySelector('.gramsamountCC').textContent = parseInt(gramsNumbersminusCC) -1;
               }else{
                document.querySelector('.gramsamountCC').textContent = 0;   
        }
    let checkgramsCC = localStorage.getItem("BatchCC");
        checkgramsCC = parseInt(checkgramsCC);
        if(checkgramsCC < 1){
                localStorage.removeItem("BatchCC");
                localStorage.removeItem("totalAmountCC");
                localStorage.removeItem("totalCostCC");
                localStorage.removeItem("cartNumberCC");
        }
};

iconsAddPR.onclick = function() {
var pricePR = 20;
  localStorage.setItem('totalCostPR', pricePR);
        var cartCostPR= localStorage.getItem('totalCostPR', pricePR);
        cartCostPR = parseInt(cartCostPR);
        if(cartCostPR) {
                localStorage.setItem('totalCostPR', cartCostPR);
        }else{
                localStorage.setItem('totalCostPR', parseInt(cartCostPR));
        }
    let ifavailablePR = localStorage.getItem('GramsPR')
        ifavailablePR = parseInt(ifavailablePR);
               if(ifavailablePR) {
                localStorage.setItem('GramsPR',(ifavailablePR) + 5);
                let gramsNumberaddPR = localStorage.getItem('GramsPR'); 
                gramsNumberaddPR = parseInt(gramsNumberaddPR);
                document.querySelector('.gramsamountPR').textContent =parseInt(gramsNumberaddPR);
               }else{
                localStorage.setItem('GramsPR', 5 );       
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumberaddPR);
               }
};

iconsMinusPR.onclick = function() {
   var pricePR = 20;
     localStorage.setItem('totalCostPR', pricePR);
        var cartCostPR= localStorage.getItem('totalCostPR', pricePR);
        cartCostPR = parseInt(cartCostPR);
        if(cartCostPR) {
                localStorage.setItem('totalCostPR', cartCostPR);
        }else{
                localStorage.setItem('totalCostPR', parseInt(cartCostPR));
        }
    let gramsNumbersminusPR = localStorage.getItem('GramsPR'); 
        gramsNumbersminusPR = parseInt(gramsNumbersminusPR);
               if(gramsNumbersminusPR) {
                localStorage.setItem('GramsPR', gramsNumbersminusPR = (gramsNumbersminusPR - 5));
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumbersminusPR) -5;
               }else{
                document.querySelector('.gramsamountPR').textContent = 0;   
        }
   let checkgramsPR = localStorage.getItem("GramsPR");
        checkgramsPR = parseInt(checkgramsPR);
        if(checkgramsPR < 1){
                localStorage.removeItem("GramsPR");
                localStorage.removeItem("totalAmountPR");
                localStorage.removeItem("totalCostPR");
                localStorage.removeItem("cartNumberPR");
        }
};

iconsAddCCES.onclick = function() {
var priceCCES = 450;
  localStorage.setItem('totalCostCCes', priceCCes);
        var cartCostCCes= localStorage.getItem('totalCostCCes', priceCCes);
        cartCostCCes = parseInt(cartCostCCes);
        if(cartCostCCes) {
                localStorage.setItem('totalCostCCes', cartCostCCes);
        }else{
                localStorage.setItem('totalCostCCes', parseInt(cartCostCCes));
        }
   let ifavailableCCes = localStorage.getItem('GramsCCes')
        ifavailableCCes = parseInt(ifavailableCCes);
               if(ifavailableCCes) {
                localStorage.setItem('GramsCCes',(ifavailableCCes) + 1);
                let gramsNumberaddCCes = localStorage.getItem('GramsCCes'); 
                gramsNumberaddCCes = parseInt(gramsNumberaddCCes);
                document.querySelector('.gramsamountCCes').textContent =parseInt(gramsNumberaddCCes);
               }else{
                localStorage.setItem('GramsCCes', 1 );       
                document.querySelector('.gramsamountCCes').textContent = parseInt(gramsNumberaddCCes);
               }
};

iconsMinusCCES.onclick = function() {
   var priceCCES = 450;
    localStorage.setItem('totalCostCCes', priceCCes);
        var cartCostCCes= localStorage.getItem('totalCostCCes', priceCCes);
        cartCostCCes = parseInt(cartCostCCes);
        if(cartCostCCes) {
                localStorage.setItem('totalCostCCes', cartCostCCes);
        }else{
                localStorage.setItem('totalCostCCes', parseInt(cartCostCCes));
        }
    let gramsNumbersminusCCes = localStorage.getItem('GramsCCes'); 
        gramsNumbersminusCCes = parseInt(gramsNumbersminusCCes);
               if(gramsNumbersminusCCes) {
                localStorage.setItem('GramsCCes', gramsNumbersminusCCes = (gramsNumbersminusCCes - 1));
                document.querySelector('.gramsamountCCes').textContent = parseInt(gramsNumbersminusCCee) -1;
               }else{
                document.querySelector('.gramsamountCCes').textContent = 0;   
        }
    let checkgramsCCes = localStorage.getItem("GramsCCes");
        checkgramsCCes = parseInt(checkgramsCCes);
        if(checkgramsCCes < 1){
                localStorage.removeItem("GramsCCes");
                localStorage.removeItem("totalAmountCCES");
                localStorage.removeItem("totalCostCCes");
                localStorage.removeItem("cartNumberCCES");
        }
};
