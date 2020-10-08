function deliveryPriceDisplay(){
let deliveryCost = localStorage.getItem('totalAmountNumber');
deliveryCost = (parseInt(deliveryCost) + 40);
localStorage.setItem('totalDeliveryCost', deliveryCost);
let totalDeliveryCost = localStorage.getItem('totalDeliveryCost');
Costdisplay = (parseInt(costdisplay) + 40);
document.querySelector('.totalOrderDelivery').textContent = Costdisplay;
}
deliveryPriceDisplay();
