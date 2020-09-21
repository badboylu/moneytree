setInterval(function totalCartAmountsDisplay(){
        let DpCart1 = localStorage.getItem('cartNumberDP');
        let CcCart1 = localStorage.getItem('cartNumberCC');
        let OcCart1 = localStorage.getItem('cartNumberOC');
        let BwCart1 = localStorage.getItem('cartNumberBW');
        let PrCart1 = localStorage.getItem('cartNumberPR');
        let NlCart1 = localStorage.getItem('cartNumberNL');

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
        localStorage.setItem('totalCartNumber', PrCart);
        document.querySelector('.basel-cart-numberCart').textContent = PrCart;
}
if(PrCart1 && DpCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart1 = DpCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart1);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart1;
}
if(PrCart1 && CcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart2 = CcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart2);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart2;
}
if(BwCart1 && PrCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart3 = PrCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart3);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart3;
}
if(PrCart1 && OcCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart4 = OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart4);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart4;
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
        let totalcart7 = OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart7);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart7;
}
if(DpCart1 && CcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart8 = DpCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart8);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart8;
}
if(DpCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart9 = DpCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart9);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart9;
}
if(CcCart1 && OcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart10 = CcCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart10);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart10;
}
if(DpCart1 && CcCart1 && PrCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart11 = DpCart + CcCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart11);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart11;
}
if(DpCart1 && PrCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart12 = DpCart + PrCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart12);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart12;
}
if(PrCart1 && CcCart1 && OcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart13 = PrCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart13);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart13;
}
if(DpCart1 && PrCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart14 = DpCart + PrCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart14);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart14;
}
if(PrCart1 && CcCart1 && BwCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart15 = PrCart + CcCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart15);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart15;
}
if(PrCart1 && BwCart1 && OcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart16 = PrCart + BwCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart16);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart16;
}

if(DpCart1 && CcCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart17 = DpCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart17);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart17;
}
if(DpCart1 && CcCart1 && BwCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart18 = DpCart + CcCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart18);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart18;
}
if(DpCart1 && BwCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart19 = DpCart + BwCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart19);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart19;
}
if(BwCart1 && CcCart1 && OcCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart20 = BwCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart20);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart20;
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
        let totalcart21 = DpCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart21);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart21;
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
        let totalcart22 = PrCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart22);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart22;
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
        let totalcart23 = DpCart + PrCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart23);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart23;
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
        let totalcart24 = DpCart + CcCart + PrCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart24);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart24;
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
        let totalcart25 = DpCart + CcCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart25);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart25;
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
        let totalcart26 = DpCart + CcCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart26);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart26;
}
if(NlCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        localStorage.setItem('totalCartNumber', NlCart);
        document.querySelector('.basel-cart-numberCart').textContent = NlCart;
}
if(DpCart1 && NlCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart27 = DpCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart27);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart27;
}
if(CcCart1 && NlCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart28 = CcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart28);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart28;
}
if(OcCart1 && NlCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart29 = OcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart29);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart29;
}
if(BwCart1 && NlCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart30 = BwCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart30);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart30;
}
if(PrCart1 && NlCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart31 = PrCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart31);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart31;
}
if(NlCart1 && DpCart1 && OcCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart32 = NlCart + DpCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart32);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart32;
}
if(NlCart1 && DpCart1 && CcCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart33 = NlCart + DpCart + CcCart ;
        localStorage.setItem('totalCartNumber', totalcart33);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart33;
}
if(NlCart1 && DpCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart34 = NlCart + DpCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart34);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart34;
}
if(NlCart1 && DpCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart35 = NlCart + DpCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart35);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart35;
}
if(NlCart1 && CcCart1 && OcCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart36 = NlCart + CcCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart36);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart36;
}
if(NlCart1 && CcCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart37 = NlCart + CcCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart37);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart37;
}
if(NlCart1 && CcCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart38 = NlCart + CcCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart38);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart38;
}
if(NlCart1 && OcCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart39 = NlCart + OcCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart39);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart39;
}
if(NlCart1 && OcCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart40 = NlCart + OcCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart40);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart40;
}
if(NlCart1 && BwCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart41 = NlCart + BwCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart41);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart41;
}
if(NlCart1 && DpCart1 && CcCart1 && OcCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart42 = NlCart + DpCart + CcCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart42);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart42;
}
if(NlCart1 && DpCart1 && CcCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart43 = NlCart + DpCart + CcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart43);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart43;
}
if(NlCart1 && DpCart1 && CcCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart44 = NlCart + DpCart + CcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart44);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart44;
}
if(NlCart1 && CcCart1 && OcCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart45 = NlCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart45);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart45;
}
if(NlCart1 && CcCart1 && OcCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart46 = NlCart + CcCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart46);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart46;
}
if(NlCart1 && OcCart1 && BwCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart47 = NlCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart47);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart47;
}
if(NlCart1 && DpCart1 && OcCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart48 = NlCart + DpCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart48);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart48;
}
if(NlCart1 && DpCart1 && OcCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart49 = NlCart + DpCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart49);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart49;
}
if(NlCart1 && CcCart1 && OcCart1 && BwCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart50 = NlCart + CcCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart50);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart50;
}
if(NlCart1 && DpCart1 && OcCart1 && BwCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart51 = NlCart + DpCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart51);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart51;
}
if(NlCart1 && DpCart1 && CcCart1 && BwCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart52 = NlCart + DpCart + CcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart52);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart52;
}
if(NlCart1 && DpCart1 && CcCart1 && OcCart1 && PrCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart53 = NlCart + DpCart + CcCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart53);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart53;
}
if(NlCart1 && DpCart1 && CcCart1 && OcCart1 && BwCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart54 = NlCart + DpCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart54);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart54;
}
if(DpCart1 && CcCart1 && OcCart1 && BwCart1 && PrCart1 && NlCart1){
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
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart55 = DpCart + CcCart + OcCart + BwCart + PrCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart55);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart55;
}
if(DpCart1 === null && CcCart1 === null && OcCart1 === null && BwCart1 === null && PrCart1 === null && NlCart1 === null){
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
        let NlAmount1 = localStorage.getItem('totalAmountNL');


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
        let totalAmount1 = PrAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount1);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount1;
}
if(PrAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount2 = BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount2);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount2;
}
if(CcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount3 = PrAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount3);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount3;
}
if(DpAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount4 = PrAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount4);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount4;
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
        let totalAmount8 = CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount8);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount8;
}
if(DpAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount9 = DpAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount9);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount9;
}
if(DpAmount1 && CcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount10 = DpAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount10);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount10;
}
if(DpAmount1 && CcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount11 = DpAmount + CcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount11);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount11;
}
if(DpAmount1 && PrAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount12 = DpAmount + PrAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount12);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount12;
}
if(PrAmount1 && CcAmount1 && OcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount13 = PrAmount + CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount13);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount13;
}
if(PrAmount1 && CcAmount1 && BwAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount14 = PrAmount + CcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount14);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount14;
}
if(DpAmount1 && PrAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount15 = DpAmount + PrAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount15);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount15;
}
if(PrAmount1 && OcAmount1 && BwAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount16 = PrAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount16);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount16;
}
if(DpAmount1 && CcAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount17 = DpAmount + CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount17);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount17;
}
if(DpAmount1 && CcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount18 = DpAmount + CcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount18);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount18;
}
if(DpAmount1 && OcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount19 = DpAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount19);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount19;
}
if(CcAmount1 && OcAmount1 && BwAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount20 = CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount20);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount20;
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
        let totalAmount21 = DpAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount21);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount21;
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
        let totalAmount22 = PrAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount22);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount22;
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
        let totalAmount23 = DpAmount + PrAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount23);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount23;
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
        let totalAmount24 = DpAmount + CcAmount + PrAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount24);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount24;
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
        let totalAmount25 = DpAmount + CcAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount25);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount25;
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
        let totalAmount26 = DpAmount + CcAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount26);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount26;
}
if(NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        localStorage.setItem('totalAmountNumber', NlAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = NlAmount;
}
if(NlAmount1 && DpAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount27 = NlAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount27);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount27;
}
if(NlAmount1 && CcAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount28 = NlAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount28);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount28;
}
if(NlAmount1 && OcAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount29 = NlAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount29);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount29;
}
if(NlAmount1 && BwAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount30 = NlAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount30);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount30;
}
if(NlAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount31 = NlAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount31);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount31;
}
if(NlAmount1 && DpAmount1 && CcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount32 = DpAmount + CcAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount32);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount32;
}
if(NlAmount1 && DpAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount33 = DpAmount + NlAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount33);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount33;
}
if(NlAmount1 && DpAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount34 = DpAmount + NlAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount34);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount34;
}
if(NlAmount1 && DpAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount35 = DpAmount + NlAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount35);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount35;
}
if(NlAmount1 && CcAmount1 && OcAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount36 = NlAmount + CcAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount36);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount36;
}
if(NlAmount1 && CcAmount1 && BwAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount37 = NlAmount + CcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount37);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount37;
}
if(NlAmount1 && CcAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount38 = NlAmount + CcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount38);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount38;
}
if(NlAmount1 && OcAmount1 && BwAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount39 = NlAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount39);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount39;
}
if(NlAmount1 && OcAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount40 = NlAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount40);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount40;
}
if(NlAmount1 && PrAmount1 && BwAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount41 = NlAmount + PrAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount41);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount41;
}
if(NlAmount1 && DpAmount1 && CcAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let totalAmount42 = DpAmount + CcAmount + NlAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount42);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount42;
}
if(NlAmount1 && DpAmount1 && CcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount43 = DpAmount + CcAmount + NlAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount43);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount43;
}
if(NlAmount1 && DpAmount1 && CcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount44 = DpAmount + CcAmount + NlAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount44);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount44;
}
if(NlAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount45 = NlAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount45);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount45;
}
if(NlAmount1 && CcAmount1 && OcAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount46 = NlAmount + CcAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount46);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount46;
}
if(NlAmount1 && OcAmount1 && BwAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount47 = NlAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount47);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount47;
}
if(NlAmount1 && OcAmount1 && BwAmount1 && DpAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount48 = NlAmount + OcAmount + BwAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount48);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount48;
}
if(NlAmount1 && OcAmount1 && PrAmount1 && DpAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount49 = NlAmount + OcAmount + PrAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount49);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount49;
}
if(NlAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount50 = DpAmount + CcAmount + NlAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount50);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount50;
}
if(NlAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount51 = DpAmount + CcAmount + NlAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount51);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount51;
}
if(NlAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount52 = NlAmount + CcAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount52);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount52;
}
if(NlAmount1 && CcAmount1 && DpAmount1 && BwAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount53 = NlAmount + CcAmount + DpAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount53);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount53;
}
if(NlAmount1 && OcAmount1 && DpAmount1 && BwAmount1 && PrAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount54 = NlAmount + OcAmount + DpAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount54);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount54;
}
if(NlAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && DpAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount55 = NlAmount + CcAmount + OcAmount + BwAmount + PrAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount55);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount55;
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
