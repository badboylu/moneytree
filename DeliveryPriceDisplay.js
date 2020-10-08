function deliveryPriceDisplay(){
let deliveryCost = localStorage.getItem('totalAmountNumber');
deliveryCost = parseInt(deliveryCost) + 40;
document.querySelector('.totalOrderDelivery').textContent = deliveryCost;
}
deliveryPriceDisplay();
