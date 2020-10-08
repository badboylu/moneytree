function deliveryPriceDisplay(){
let deliveryCost = localStorage.getItem('totalAmountNumber');
deliveryCost = parseInt(deliveryCost);
document.querySelector('.totalOrder1Delivery').textContent = deliveryCost + 40;
}
deliveryPriceDisplay();
