function totalAmountsDisplay()
{
let DpAmount1 = localStorage.getItem('totalAmountDP');
        let CcAmount1 = localStorage.getItem('totalAmountCC');
        let OcAmount1 = localStorage.getItem('totalAmountOC');
        let BwAmount1 = localStorage.getItem('totalAmountBW');
        let PrAmount1 = localStorage.getItem('totalAmountPR');
        let NlAmount1 = localStorage.getItem('totalAmountNL');
        let CCesAmount1 = localStorage.getItem('totalAmountCCES');
        let PeAmount1 = localStorage.getItem('totalAmountPE');
if(PeAmount1){
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        localStorage.setItem('totalAmountNumber', PeAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = PeAmount;
}
if(PeAmount1 && CCesAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount231 = PeAmount + CCesAmount + PrAmount + BwAmount + OcAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount231);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount231;
}
}

totalAmountsDisplay();
