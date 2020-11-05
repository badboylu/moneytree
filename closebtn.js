var clearBW = document.getElementById('closebtnBW1');
var clearDP = document.getElementById('closebtnDP1');
var clearOC = document.getElementById('closebtnOC1');
var clearCC = document.getElementById('closebtnCC1');
var clearPR = document.getElementById('closebtnPR1');
var clearNL = document.getElementById('closebtnNL1');
var clearCCES = document.getElementById('closebtnCCES1');
var clearPE = document.getElementById('closebtnPE1');
clearBW.style.cursor = 'pointer';
clearDP.style.cursor = 'pointer';
clearOC.style.cursor = 'pointer';
clearCC.style.cursor = 'pointer';
clearPR.style.cursor = 'pointer';
clearNL.style.cursor = 'pointer';
clearCCES.style.cursor = 'pointer';
clearPE.style.cursor = 'pointer';

clearBW.onclick = function() {
   localStorage.removeItem("PacksBW");
   localStorage.removeItem("totalAmountBW");
   localStorage.removeItem("totalCostBW");
   localStorage.removeItem("cartNumberBW");
};
