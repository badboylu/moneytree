setInterval(function totalCartAmountsDisplay(){
        let DpCart1 = localStorage.getItem('cartNumberDP');
        let CcCart1 = localStorage.getItem('cartNumberCC');
        let OcCart1 = localStorage.getItem('cartNumberOC');
        let BwCart1 = localStorage.getItem('cartNumberBW');
        let PrCart1 = localStorage.getItem('cartNumberPR');

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
}
if(BwCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        localStorage.setItem('totalCartNumber', BwCart);
        document.querySelector('.basel-cart-numberCart').textContent = BwCart;
}
if(PrCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        localStorage.setItem('totalCartNumber', 1);
        document.querySelector('.basel-cart-numberCart').textContent = 1;
}
if(PrCart1 && DpCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart13 = DpCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart13);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart13;
}
if(PrCart1 && CcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart14 = CcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart14);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart14;
}
if(BwCart1 && PrCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart15 = PrCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart15);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart15;
}
if(PrCart1 && OcCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart16 = OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart16);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart16;
}
if(BwCart1 && DpCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart5 = DpCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart5);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart5;
}
if(BwCart1 && CcCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart6 = CcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart6);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart6;
}
if(BwCart1 && OcCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart12 = OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart12);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart12;
}
if(DpCart1 && CcCart1){
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
if(DpCart1 && CcCart1 && PrCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart17 = DpCart + CcCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart17);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart17;
}
if(DpCart1 && PrCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart18 = DpCart + PrCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart18);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart18;
}
if(PrCart1 && CcCart1 && OcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart19 = PrCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart19);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart19;
}
if(DpCart1 && PrCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart20 = DpCart + PrCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart20);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart20;
}
if(PrCart1 && CcCart1 && BwCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart21 = PrCart + CcCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart21);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart21;
}
if(PrCart1 && BwCart1 && OcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBw');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart22 = PrCart + BwCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart22);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart22;
}

if(DpCart1 && CcCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart8 = DpCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart8);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart8;
}
if(DpCart1 && CcCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart9 = DpCart + CcCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart9);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart9;
}
if(DpCart1 && BwCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let BwCart = localStorage.getItem('cartNumberBw');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart10 = DpCart + BwCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart10);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart10;
}
if(BwCart1 && CcCart1 && OcCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart11 = BwCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart11);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart11;
}
if(DpCart1 && CcCart1 && OcCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart1 = DpCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart1);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart1;
}
if(PrCart1 && CcCart1 && OcCart1 && BwCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart23 = PrCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart23);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart23;
}
if(DpCart1 && PrCart1 && OcCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart24 = DpCart + PrCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart24);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart24;
}
if(DpCart1 && CcCart1 && PrCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart25 = DpCart + CcCart + PrCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart25);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart25;
}
if(DpCart1 && CcCart1 && OcCart1 && PrCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart26 = DpCart + CcCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart26);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart26;
}
if(DpCart1 && CcCart1 && OcCart1 && BwCart1 && PrCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart27 = DpCart + CcCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart27);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart27;
}
if(DpCart1 === null && CcCart1 === null && OcCart1 === null && BwCart1 === null && PrCart1 === null){
        localStorage.removeItem('totalCartNumber');
        localStorage.removeItem('totalAmountNumber');
        document.querySelector('.basel-cart-numberCart').textContent = 0;
        document.querySelector('.basel-cart-subtotalCart').textContent = '';
}
},1000)

setInterval(function totalAmountsDisplay(){
        let DpAmount1 = localStorage.getItem('totalAmountDP');
        let CcAmount1 = localStorage.getItem('totalAmountCC');
        let OcAmount1 = localStorage.getItem('totalAmountOC');
        let BwAmount1 = localStorage.getItem('totalAmountBW');
        let PrAmount1 = localStorage.getItem('totalAmountPR');


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
if(BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        localStorage.setItem('totalAmountNumber', BwAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = BwAmount;
}
if(PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        localStorage.setItem('totalAmountNumber', PrAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = PrAmount;
}
if(PrAmount1 && OcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount12 = PrAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount12);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount12;
}
if(PrAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount13 = BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount13);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount13;
}
if(CcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount14 = PrAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount14);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount14;
}
if(DpAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount15 = PrAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount15);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount15;
}
if(OcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount5 = BwAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount5);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount5;
}
if(CcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount6 = BwAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount6);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount6;
}
if(DpAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount7 = BwAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount7);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount7;
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
if(DpAmount1 && CcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount16 = DpAmount + CcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount16);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount16;
}
if(DpAmount1 && PrAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount17 = DpAmount + PrAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount17);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount17;
}
if(PrAmount1 && CcAmount1 && OcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount18 = PrAmount + CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount18);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount18;
}
if(PrAmount1 && CcAmount1 && BwAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount19 = PrAmount + CcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount19);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount19;
}
if(DpAmount1 && PrAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount20 = DpAmount + PrAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount20);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount20;
}
if(PrAmount1 && OcAmount1 && BwAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount21 = DpAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount21);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount21;
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
}
if(DpAmount1 && CcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount9 = DpAmount + CcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount9);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount9;
}
if(DpAmount1 && OcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount10 = DpAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount10);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount10;
}
if(CcAmount1 && OcAmount1 && BwAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount11 = CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount11);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount11;
}

if(DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount8 = DpAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount8);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount8;
}
if(PrAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount23 = PrAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount23);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount23;
}
if(DpAmount1 && PrAmount1 && OcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount24 = DpAmount + PrAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount24);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount24;
}
if(DpAmount1 && CcAmount1 && PrAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount25 = DpAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount25);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount25;
}
if(DpAmount1 && CcAmount1 && OcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount26 = DpAmount + CcAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount26);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount26;
}
if(DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount22 = DpAmount + CcAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount22);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount22;
}
},1000)

setInterval (function emptycartAmounts(){
        let cartcheck2 = localStorage.getItem('totalCartNumber')
            if (cartcheck2 === null){
                    document.getElementById("amounthide").style.display = "none";
            }else{
            document.getElementById("amounthide").style.display = "block";
        }
    },1000);

totalCartAmountsDisplay();
totalAmountsDisplay();
emptycartAmounts();
