function amountvalue(){
let amount = localStorage.getItem('totalAmountNumber');
amount = parseInt(amount);
document.getElementById("amount").value=amount + 40;
}
amountvalue();

