function totalAmountsDisplay()
{
let PeAmount1 = localStorage.getItem('totalAmountPE');
if(PeAmount1){
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        localStorage.setItem('totalAmountNumber', PeAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = PeAmount;
}
}

totalAmountsDisplay();
