function deliveryPriceDisplay(){
let check = localStorage.getItem('discount');
if(check){
let deliveryCost1 = localStorage.getItem('discount');
let deliveryFee1 = 15;
deliveryCost2 = parseInt(deliveryCost1) + deliveryFee1;
document.querySelector('.totalOrderDelivery').textContent = deliveryCost2;
}else{
let deliveryCost = localStorage.getItem('totalAmountNumber');
let deliveryFee = 15;
deliveryCost = parseInt(deliveryCost) + deliveryFee;
document.querySelector('.totalOrderDelivery').textContent = deliveryCost;
}
deliveryPriceDisplay();


