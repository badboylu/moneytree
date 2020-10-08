function deliveryPriceDisplay(){
let deliveryCost = localStorage.getItem('totalAmountNumber');
let deliveryFee = 40;
deliveryCost1 = parseInt(deliveryCost) + deliveryFee;
document.querySelector('.totalOrderDelivery').textContent = deliveryCost1;
}
deliveryPriceDisplay();


