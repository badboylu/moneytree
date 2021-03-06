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

var iconsAddNL = document.getElementById('iconsAddNL');
var iconsMinusNL = document.getElementById('iconsMinusNL');
iconsAddNL.style.cursor = 'pointer';
iconsMinusNL.style.cursor = 'pointer';

var iconsAddPE = document.getElementById('iconsAddPE');
var iconsMinusPE = document.getElementById('iconsMinusPE');
iconsAddPE.style.cursor = 'pointer';
iconsMinusPE.style.cursor = 'pointer';

var iconsAdd = document.getElementById('iconsAdd');
var iconsMinus = document.getElementById('iconsMinus');
iconsAdd.style.cursor = 'pointer';
iconsMinus.style.cursor = 'pointer';

iconsAddBW.onclick = function() {
var priceBW = 30;
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
   var priceBW = 30;
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
var pricePR = 60;
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
                localStorage.setItem('GramsPR',(ifavailablePR) + 1);
                let gramsNumberaddPR = localStorage.getItem('GramsPR'); 
                gramsNumberaddPR = parseInt(gramsNumberaddPR);
                document.querySelector('.gramsamountPR').textContent =parseInt(gramsNumberaddPR);
               }else{
                localStorage.setItem('GramsPR', 1 );       
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumberaddPR);
               }
};

iconsMinusPR.onclick = function() {
   var pricePR = 60;
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
                localStorage.setItem('GramsPR', gramsNumbersminusPR = (gramsNumbersminusPR - 1));
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumbersminusPR) -1;
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

iconsAddNL.onclick = function() {
var priceNL = 45;
    localStorage.setItem('totalCostNL', priceNL);
        var cartCostNL= localStorage.getItem('totalCostNL', priceNL);
        cartCostNL = parseInt(cartCostNL);
        if(cartCostNL) {
                localStorage.setItem('totalCostNL', cartCostNL);
        }else{
                localStorage.setItem('totalCostNL', parseInt(cartCostNL));
        }
    let ifavailableNL = localStorage.getItem('GramsNL')
        ifavailableNL = parseInt(ifavailableNL);
               if(ifavailableNL) {
                localStorage.setItem('GramsNL',(ifavailableNL) + 5);
                let gramsNumberaddNL = localStorage.getItem('GramsNL'); 
                gramsNumberaddNL = parseInt(gramsNumberaddNL);
                document.querySelector('.gramsamountNL').textContent =parseInt(gramsNumberaddNL);
               }else{
                localStorage.setItem('GramsNL', 5 );       
                document.querySelector('.gramsamountNL').textContent = parseInt(gramsNumberaddNL);
               }
};

iconsMinusNL.onclick = function() {
   var priceNL = 45;
     localStorage.setItem('totalCostNL', priceNL);
        var cartCostNL= localStorage.getItem('totalCostNL', priceNL);
        cartCostNL = parseInt(cartCostNL);
        if(cartCostNL) {
                localStorage.setItem('totalCostNL', cartCostNL);
        }else{
                localStorage.setItem('totalCostNL', parseInt(cartCostNL));
        }
   let gramsNumbersminusNL = localStorage.getItem('GramsNL'); 
        gramsNumbersminusNL = parseInt(gramsNumbersminusNL);
               if(gramsNumbersminusNL) {
                localStorage.setItem('GramsNL', gramsNumbersminusNL = (gramsNumbersminusNL - 5));
                document.querySelector('.gramsamountNL').textContent = parseInt(gramsNumbersminusNL) -5;
               }else{
                document.querySelector('.gramsamountNL').textContent = 0;   
        }
    let checkgramsNL = localStorage.getItem("GramsNL");
        checkgramsNL = parseInt(checkgramsNL);
        if(checkgramsNL < 1){
                localStorage.removeItem("GramsNL");
                localStorage.removeItem("totalAmountNL");
                localStorage.removeItem("totalCostNL");
                localStorage.removeItem("cartNumberNL");
        }
};

iconsAddPE.onclick = function() {
var pricePE = 100;
   localStorage.setItem('totalCostPE', pricePE);
        var cartCostPE= localStorage.getItem('totalCostPE', pricePE);
        cartCostPE = parseInt(cartCostPE);
        if(cartCostPE) {
                localStorage.setItem('totalCostPE', cartCostPE);
        }else{
                localStorage.setItem('totalCostPE', parseInt(cartCostPE));
        }
   let ifavailablePE = localStorage.getItem('GramsPE')
        ifavailablePE = parseInt(ifavailablePE);
               if(ifavailablePE) {
                localStorage.setItem('GramsPE',(ifavailablePE) + 1);
                let gramsNumberaddPE = localStorage.getItem('GramsPE'); 
                gramsNumberaddPE = parseInt(gramsNumberaddPE);
                document.querySelector('.gramsamountPE').textContent =parseInt(gramsNumberaddPE);
               }else{
                localStorage.setItem('GramsPE', 1 );       
                document.querySelector('.gramsamountPE').textContent = parseInt(gramsNumberaddPE);
               }
};

iconsMinusPE.onclick = function() {
   var pricePE = 100;
    localStorage.setItem('totalCostPE', pricePE);
        var cartCostPE= localStorage.getItem('totalCostPE', pricePE);
        cartCostPE = parseInt(cartCostPE);
        if(cartCostPE) {
                localStorage.setItem('totalCostPE', cartCostPE);
        }else{
                localStorage.setItem('totalCostPE', parseInt(cartCostPE));
        }
   let gramsNumbersminusPE = localStorage.getItem('GramsPE'); 
        gramsNumbersminusPE = parseInt(gramsNumbersminusPE);
               if(gramsNumbersminusPE) {
                localStorage.setItem('GramsPE', gramsNumbersminusPE = (gramsNumbersminusPE - 1));
                document.querySelector('.gramsamountPE').textContent = parseInt(gramsNumbersminusPE) -1;
               }else{
                document.querySelector('.gramsamountPE').textContent = 0;   
        }
   let checkgramsPE = localStorage.getItem("GramsPE");
        checkgramsPE = parseInt(checkgramsPE);
        if(checkgramsPE < 1){
                localStorage.removeItem("GramsPE");
                localStorage.removeItem("totalAmountPE");
                localStorage.removeItem("totalCostPE");
                localStorage.removeItem("cartNumberPE");
        }
};

iconsAdd.onclick = function() {
var price = 70;
  localStorage.setItem('totalCostDP', price);
        var cartCost= localStorage.getItem('totalCostDP', price);
        cartCost = parseInt(cartCost);
        if(cartCost) {
                localStorage.setItem('totalCostDP', cartCost);
        }else{
                localStorage.setItem('totalCostDP', parseInt(cartCost));
        }
   let ifavailable = localStorage.getItem('GramsDP')
        ifavailable = parseInt(ifavailable);
               if(ifavailable) {
                localStorage.setItem('GramsDP',(ifavailable) + 5);
                let gramsNumberadd = localStorage.getItem('GramsDP'); 
                gramsNumberadd = parseInt(gramsNumberadd);
                document.querySelector('.gramsamountDP').textContent =parseInt(gramsNumberadd);
               }else{
                localStorage.setItem('GramsDP', 5 );       
                document.querySelector('.gramsamountDP').textContent = parseInt(gramsNumberadd);
               }
};

iconsMinus.onclick = function() {
   var price = 70;
   localStorage.setItem('totalCostDP', price);
        var cartCost= localStorage.getItem('totalCostDP', price);
        cartCost = parseInt(cartCost);
        if(cartCost) {
                localStorage.setItem('totalCostDP', cartCost);
        }else{
                localStorage.setItem('totalCostDP', parseInt(cartCost));
        }
    let gramsNumbersminus = localStorage.getItem('GramsDP'); 
        gramsNumbersminus = parseInt(gramsNumbersminus);
               if(gramsNumbersminus) {
                localStorage.setItem('GramsDP', gramsNumbersminus = (gramsNumbersminus - 5));
                document.querySelector('.gramsamountDP').textContent = parseInt(gramsNumbersminus) -5;
               }else{
                document.querySelector('.gramsamountDP').textContent = 0;   
        }
    let checkgrams = localStorage.getItem("GramsDP");
        checkgrams = parseInt(checkgrams);
        if(checkgrams < 1){
                localStorage.removeItem("GramsDP");
                localStorage.removeItem("totalAmountDP");
                localStorage.removeItem("totalCostDP");
                localStorage.removeItem("cartNumberDP");
        }
};
