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

clearDP.onclick = function() {
   localStorage.removeItem("GramsDP");
   localStorage.removeItem("totalAmountDP");
   localStorage.removeItem("totalCostDP");
   localStorage.removeItem("cartNumberDP");
};

clearOC.onclick = function() {
   localStorage.removeItem("GramsOC");
   localStorage.removeItem("totalAmountOC");
   localStorage.removeItem("totalCostOC");
   localStorage.removeItem("cartNumberOC");
};

clearNL.onclick = function() {
   localStorage.removeItem("GramsNL");
   localStorage.removeItem("totalAmountNL");
   localStorage.removeItem("totalCostNL");
   localStorage.removeItem("cartNumberNL");
};

clearPE.onclick = function() {
   localStorage.removeItem("GramsPE");
   localStorage.removeItem("totalAmountPE");
   localStorage.removeItem("totalCostPE");
   localStorage.removeItem("cartNumberPE");
};

clearCC.onclick = function() {
   localStorage.removeItem("BatchCC");
   localStorage.removeItem("totalAmountCC");
   localStorage.removeItem("totalCostCC");
   localStorage.removeItem("cartNumberCC");
};

clearCCES.onclick = function() {
   localStorage.removeItem("GramsCCes");
   localStorage.removeItem("totalAmountCCES");
   localStorage.removeItem("totalCostCCes");
   localStorage.removeItem("cartNumberCCES");
};

clearPR.onclick = function() {
   localStorage.removeItem("GramsPR");
   localStorage.removeItem("totalAmountPR");
   localStorage.removeItem("totalCostPR");
   localStorage.removeItem("cartNumberPR");
};
