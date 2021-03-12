setInterval (function cartPriceDisplay(){
let cartCost = localStorage.getItem('totalAmountNumber');
cartCost = parseInt(cartCost);
document.querySelector('.totalOrder').textContent = cartCost;
document.querySelector('.totalOrder1').textContent = cartCost + 30;
},1000);
cartPriceDisplay();
