function totalCartAmountsDisplay(){
        let DpCart1 = localStorage.getItem('cartNumberDP');
        let CcCart1 = localStorage.getItem('cartNumberCC');
        let OcCart1 = localStorage.getItem('cartNumberOC');

if(DpCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        localStorage.setItem('totalCartNumber', DpCart);
        document.querySelector('.basel-cart-numberCart').textContent = DpCart;
}
if(CcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        localStorage.setItem('totalCartNumber', CcCart);
        document.querySelector('.basel-cart-numberCart').textContent = CcCart;
}
if(OcCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        localStorage.setItem('totalCartNumber', OcCart);
        document.querySelector('.basel-cart-numberCart').textContent = OcCart;
}if(DpCart1 && CcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart2 = DpCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart2);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart2;
}
if(DpCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart3 = DpCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart3);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart3;
}
if(CcCart1 && OcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart4 = CcCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart4);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart4;
}
if(DpCart1 && CcCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart1 = DpCart + CcCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart1);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart1;
}
}

function totalAmountsDisplay(){
        let DpAmount1 = localStorage.getItem('totalAmountDP');
        let CcAmount1 = localStorage.getItem('totalAmountCC');
        let OcAmount1 = localStorage.getItem('totalAmountOC');


if(DpAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        localStorage.setItem('totalAmountNumber',  DpAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = DpAmount;
}
if(CcAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        localStorage.setItem('totalAmountNumber', CcAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = CcAmount;
}
if(OcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        localStorage.setItem('totalAmountNumber', OcAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = OcAmount;
}
if(OcAmount1 && CcAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount4 = CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount4);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount4;
}
if(DpAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount3 = DpAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount3);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount3;
}
if(DpAmount1 && CcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount2 = DpAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount2);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount2;
}
if(DpAmount1 && CcAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount1 = DpAmount + CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount1);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount1;
}else{
        localStorage.removeItem('totalCartNumber');
        localStorage.removeItem('totalAmountNumber');
}
}

totalCartAmountsDisplay();
totalAmountsDisplay();
