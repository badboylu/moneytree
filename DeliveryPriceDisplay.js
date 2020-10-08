function deliveryPriceDisplay(){
let deliveryCost = localStorage.getItem('totalAmountNumber');
deliveryCost = parseInt(deliveryCost);
document.querySelector('.totalOrderDelivery').textContent = deliveryCost + 40;
}
deliveryPriceDisplay();
