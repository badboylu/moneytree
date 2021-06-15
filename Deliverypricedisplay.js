setInterval (function cartPriceDisplay(){
let cartCost = localStorage.getItem('totalAmountNumber');
cartCost = parseInt(cartCost);
document.querySelector('.totalpricedelivery').textContent = cartCost + 15;
},1000);
cartPriceDisplay();
