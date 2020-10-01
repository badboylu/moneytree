function cartPriceDisplay(){
let cartCost = localStorage.getItem('totalAmountNumber');
cartCost = parseInt(cartCost);
document.querySelector('.totalOrder').textContent = cartCost;
}

cartPriceDisplay();
