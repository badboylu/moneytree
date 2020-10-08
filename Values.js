function amountvalue(){
let amount = localStorage.getItem('totalAmountNumber');
amount = parseInt(amount);
document.getElementById("amount").value=amount;
}
amountvalue();

