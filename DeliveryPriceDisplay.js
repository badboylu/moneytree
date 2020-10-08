function deliveryPriceDisplay(){
let deliveryCost = localStorage.getItem('totalAmountNumber');
deliveryCost = (parseInt(deliveryCost) + 40);
localStorage.setItem('totalDeliveryCost', deliveryCost);
let totalDeliveryCost = localStorage.getItem('totalDeliveryCost');
deliveryCost = (parseInt(deliveryCost) + 40);
document.querySelector('.totalOrderDelivery').textContent = deliveryCost;
}
deliveryPriceDisplay();
