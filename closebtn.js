var clearBW = document.getElementById('closebtnBW1');

clearBW.style.cursor = 'pointer';
clearBW.onclick = function() {
   localStorage.removeItem("PacksBW");
   localStorage.removeItem("totalAmountBW");
   localStorage.removeItem("totalCostBW");
   localStorage.removeItem("cartNumberBW");
};
