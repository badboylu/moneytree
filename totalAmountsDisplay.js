setInterval(function totalCartAmountsDisplay(){
        let DpCart1 = localStorage.getItem('cartNumberDP');
        let CcCart1 = localStorage.getItem('cartNumberCC');
        let OcCart1 = localStorage.getItem('cartNumberOC');
        let BwCart1 = localStorage.getItem('cartNumberBW');
        let PrCart1 = localStorage.getItem('cartNumberPR');
        let NlCart1 = localStorage.getItem('cartNumberNL');
        let CCesCart1 = localStorage.getItem('cartNumberCCES');
        let PeCart1 = localStorage.getItem('cartNumberPE');

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
if(CCesCart1){
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        localStorage.setItem('totalCartNumber', CCesCart);
        document.querySelector('.basel-cart-numberCart').textContent = CCesCart;
}
if(DpCart1 && CCesCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart56 = DpCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart56);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart56;
}
if(CcCart1 && CCesCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart57 = CcCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart57);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart57;
}
if(OcCart1 && CCesCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart58 = OcCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart58);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart58;
}
if(BwCart1 && CCesCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart59 = BwCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart59);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart59;
}
if(PrCart1 && CCesCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart60 = PrCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart60);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart60;
}
if(NlCart1 && CCesCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart61 = NlCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart61);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart61;
}
if(CCesCart1 && DpCart1 && CcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart62 = DpCart + CCesCart + CcCart ;
        localStorage.setItem('totalCartNumber', totalcart62);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart62;
}
if(CCesCart1 && DpCart1 && OcCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart63 = DpCart + CCesCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart63);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart63;
}
if(CCesCart1 && DpCart1 && BwCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart64 = DpCart + CCesCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart64);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart64;
}
if(CCesCart1 && DpCart1 && PrCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart65 = DpCart + CCesCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart65);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart65;
}
if(CCesCart1 && DpCart1 && NlCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart66 = DpCart + CCesCart + NlCart ;
        localStorage.setItem('totalCartNumber', totalcart66);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart66;
}
if(CCesCart1 && CcCart1 && OcCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart67 = CcCart + CCesCart + OcCart ;
        localStorage.setItem('totalCartNumber', totalcart67);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart67;
}
if(CCesCart1 && CcCart1 && BwCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart68 = CcCart + CCesCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart68);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart68;
}
if(CCesCart1 && CcCart1 && PrCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart69 = CcCart + CCesCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart69);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart69;
}
if(CCesCart1 && CcCart1 && NlCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart70 = CcCart + CCesCart + NlCart ;
        localStorage.setItem('totalCartNumber', totalcart70);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart70;
}
if(CCesCart1 && OcCart1 && BwCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart71 = OcCart + CCesCart + BwCart ;
        localStorage.setItem('totalCartNumber', totalcart71);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart71;
}
if(CCesCart1 && OcCart1 && PrCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart72 = OcCart + CCesCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart72);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart72;
}
if(CCesCart1 && OcCart1 && NlCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart73 = OcCart + CCesCart + NlCart ;
        localStorage.setItem('totalCartNumber', totalcart73);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart73;
}
if(CCesCart1 && BwCart1 && PrCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart74 = BwCart + CCesCart + PrCart ;
        localStorage.setItem('totalCartNumber', totalcart74);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart74;
}
if(CCesCart1 && BwCart1 && NlCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart75 = BwCart + CCesCart + NlCart ;
        localStorage.setItem('totalCartNumber', totalcart75);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart75;
}
if(CCesCart1 && PrCart1 && NlCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart76 = PrCart + CCesCart + NlCart ;
        localStorage.setItem('totalCartNumber', totalcart76);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart76;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart77 = DpCart + CCesCart + CcCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart77);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart77;
}
if(CCesCart1 && DpCart1 && CcCart1 && BwCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart78 = DpCart + CCesCart + CcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart78);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart78;
}
if(CCesCart1 && DpCart1 && CcCart1 && PrCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart79 = DpCart + CCesCart + CcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart79);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart79;
}
if(CCesCart1 && DpCart1 && CcCart1 && NlCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart80 = DpCart + CCesCart + CcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart80);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart80;
}
if(CCesCart1 && CcCart1 && OcCart1 && BwCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart81 = OcCart + CCesCart + CcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart81);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart81;
}
if(CCesCart1 && CcCart1 && OcCart1 && PrCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart82 = PrCart + CCesCart + CcCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart82);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart82;
}
if(CCesCart1 && CcCart1 && OcCart1 && NlCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart83 = OcCart + CCesCart + CcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart83);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart83;
}
if(CCesCart1 && OcCart1 && BwCart1 && DpCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart84 = OcCart + CCesCart + BwCart + DpCart;
        localStorage.setItem('totalCartNumber', totalcart84);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart84;
}
if(CCesCart1 && OcCart1 && BwCart1 && PrCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart86 = OcCart + CCesCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart86);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart86;
}
if(CCesCart1 && OcCart1 && BwCart1 && NlCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart87 = OcCart + CCesCart + BwCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart87);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart87;
}
if(CCesCart1 && BwCart1 && PrCart1 && DpCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart88 = PrCart + CCesCart + BwCart + DpCart;
        localStorage.setItem('totalCartNumber', totalcart88);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart88;
}
if(CCesCart1 && BwCart1 && PrCart1 && CcCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart89 = PrCart + CCesCart + BwCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart89);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart89;
}
if(CCesCart1 && BwCart1 && PrCart1 && NlCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart91 = PrCart + CCesCart + BwCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart91);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart91;
}
if(CCesCart1 && PrCart1 && NlCart1 && DpCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart92 = PrCart + CCesCart + DpCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart92);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart92;
}
if(CCesCart1 && PrCart1 && NlCart1 && CcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart93 = PrCart + CCesCart + CcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart93);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart93;
}
if(CCesCart1 && PrCart1 && NlCart1 && OcCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart94 = PrCart + CCesCart + OcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart94);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart94;
}
if(CCesCart1 && DpCart1 && PrCart1 && OcCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let totalcart95 = PrCart + CCesCart + DpCart + OcCart;
        localStorage.setItem('totalCartNumber', totalcart95);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart95;
}
if(CCesCart1 && DpCart1 && OcCart1 && NlCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart96 = DpCart + CCesCart + OcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart96);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart96;
}
if(CCesCart1 && BwCart1 && NlCart1 && CcCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart97 = BwCart + CCesCart + CcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart97);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart97;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && BwCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart98 = DpCart + CCesCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart98);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart98;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && PrCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart99 = DpCart + CCesCart + CcCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart99);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart99;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && NlCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart100 = DpCart + CCesCart + CcCart + OcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart100);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart100;
}
if(CCesCart1 && OcCart1 && BwCart1 && PrCart1 && NlCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart101 = BwCart + CCesCart + PrCart + OcCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart101);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart101;
}
if(CCesCart1 && OcCart1 && BwCart1 && PrCart1 && DpCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart102 = BwCart + CCesCart + PrCart + OcCart + DpCart;
        localStorage.setItem('totalCartNumber', totalcart102);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart102;
}
if(CCesCart1 && BwCart1 && PrCart1 && NlCart1 && DpCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart103 = BwCart + CCesCart + PrCart + NlCart + DpCart;
        localStorage.setItem('totalCartNumber', totalcart103);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart103;
}
if(CCesCart1 && BwCart1 && PrCart1 && NlCart1 && CcCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart104 = BwCart + CCesCart + PrCart + NlCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart104);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart104;
}
if(CCesCart1 && OcCart1 && PrCart1 && NlCart1 && DpCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart105 = OcCart + CCesCart + PrCart + NlCart + DpCart;
        localStorage.setItem('totalCartNumber', totalcart105);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart105;
}
if(CCesCart1 && BwCart1 && OcCart1 && NlCart1 && DpCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let totalcart106 = BwCart + CCesCart + OcCart + NlCart + DpCart;
        localStorage.setItem('totalCartNumber', totalcart106);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart106;
}
if(CCesCart1 && OcCart1 && BwCart1 && PrCart1 && CcCart1 ){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart107 = CCesCart + BwCart + PrCart + OcCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart107);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart107;
}
if(CCesCart1 && NlCart1 && BwCart1 && CcCart1 && DpCart1 ){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart108 = CCesCart + BwCart + DpCart + NlCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart108);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart108;
}
if(CCesCart1 && NlCart1 && PrCart1 && CcCart1 && DpCart1 ){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let totalcart109 = CCesCart + PrCart + DpCart + NlCart + CcCart;
        localStorage.setItem('totalCartNumber', totalcart109);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart109;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && BwCart1 && PrCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart110 = DpCart + CCesCart + CcCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart110);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart110;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && BwCart1 && NlCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let totalcart111 = DpCart + CCesCart + CcCart + OcCart + BwCart + NlCart;
        localStorage.setItem('totalCartNumber', totalcart111);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart111;
}
if(CCesCart1 && CcCart1 && OcCart1 && BwCart1 && PrCart1 && NlCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart112 = NlCart + CCesCart + CcCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart112);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart112;
}
if(CCesCart1 && DpCart1 && OcCart1 && BwCart1 && PrCart1 && NlCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart113 = NlCart + CCesCart + DpCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart113);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart113;
}
if(CCesCart1 && DpCart1 && CcCart1 && BwCart1 && PrCart1 && NlCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart114 = NlCart + CCesCart + DpCart + CcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart114);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart114;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && PrCart1 && NlCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart115 = NlCart + CCesCart + DpCart + CcCart + OcCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart115);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart115;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && BwCart1 && NlCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let totalcart116 = NlCart + CCesCart + DpCart + CcCart + OcCart + BwCart;
        localStorage.setItem('totalCartNumber', totalcart116);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart116;
}
if(CCesCart1 && DpCart1 && CcCart1 && OcCart1 && BwCart1 && PrCart1 && NlCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let totalcart117 = NlCart + CCesCart + DpCart + CcCart + OcCart + BwCart + PrCart;
        localStorage.setItem('totalCartNumber', totalcart117);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart117;
}
if(PeCart1){
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        localStorage.setItem('totalCartNumber', PeCart);
        document.querySelector('.basel-cart-numberCart').textContent = PeCart;
}
if(DpCart1 && PeCart1){
        let DpCart = localStorage.getItem('cartNumberDP');
        DpCart = parseInt(DpCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart118 = DpCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart118);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart118;
}
if(CcCart1 && PeCart1){
        let CcCart = localStorage.getItem('cartNumberCC');
        CcCart = parseInt(CcCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart119 = CcCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart119);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart119;
}
if(OcCart1 && PeCart1){
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart120 = OcCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart120);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart120;
}
if(BwCart1 && PeCart1){
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart121 = BwCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart121);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart121;
}
if(PrCart1 && PeCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart122 = PrCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart122);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart122;
}
if(NlCart1 && PeCart1){
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart123 = NlCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart123);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart123;
}
if(CCesCart1 && PeCart1){
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let totalcart124 = CCesCart + PeCart;
        localStorage.setItem('totalCartNumber', totalcart124);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart124;
}
if(PeCart1 && CCesCart1 && PrCart1 && OcCart1 && BwCart1 && NlCart1){
        let PrCart = localStorage.getItem('cartNumberPR');
        PrCart = parseInt(PrCart);
        let OcCart = localStorage.getItem('cartNumberOC');
        OcCart = parseInt(OcCart);
        let PeCart = localStorage.getItem('cartNumberPE');
        PeCart = parseInt(PeCart);
        let BwCart = localStorage.getItem('cartNumberBW');
        BwCart = parseInt(BwCart);
        let NlCart = localStorage.getItem('cartNumberNL');
        NlCart = parseInt(NlCart);
        let CCesCart = localStorage.getItem('cartNumberCCES');
        CCesCart = parseInt(CCesCart);
        let totalcart228 = PrCart + PeCart + OcCart + BwCart + NlCart + CCesCart;
        localStorage.setItem('totalCartNumber', totalcart228);
        document.querySelector('.basel-cart-numberCart').textContent = totalcart228;
}
if(DpCart1 === null && CcCart1 === null && OcCart1 === null && BwCart1 === null && PrCart1 === null && NlCart1 === null && CCesCart1 === null && PeCart1 === null){
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
        let CCesAmount1 = localStorage.getItem('totalAmountCCES');
        let PeAmount1 = localStorage.getItem('totalAmountPE');


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
if(CCesAmount1){
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        localStorage.setItem('totalAmountNumber', CCesAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = CCesAmount;
}
if(DpAmount1 && CCesAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount56 = CCesAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount56);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount56;
}
if(CcAmount1 && CCesAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount57 = CCesAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount57);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount57;
}
if(OcAmount1 && CCesAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount58 = CCesAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount58);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount58;
}
if(BwAmount1 && CCesAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount59 = CCesAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount59);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount59;
}
if(PrAmount1 && CCesAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount60 = CCesAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount60);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount60;
}
if(NlAmount1 && CCesAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount61 = CCesAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount61);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount61;
}
if(CCesAmount1 && DpAmount1 && CcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount62 = CCesAmount + DpAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount62);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount62;
}
if(CCesAmount1 && DpAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount63 = CCesAmount + DpAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount63);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount63;
}
if(CCesAmount1 && DpAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount64 = CCesAmount + DpAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount64);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount64;
}
if(CCesAmount1 && DpAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount65 = CCesAmount + DpAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount65);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount65;
}
if(CCesAmount1 && DpAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount66 = CCesAmount + DpAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount66);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount66;
}
if(CCesAmount1 && CcAmount1 && OcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount67 = CCesAmount + CcAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount67);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount67;
}
if(CCesAmount1 && CcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount68 = CCesAmount + CcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount68);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount68;
}
if(CCesAmount1 && CcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount69 = CCesAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount69);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount69;
}
if(CCesAmount1 && CcAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount70 = CCesAmount + CcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount70);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount70;
}
if(CCesAmount1 && OcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount71 = CCesAmount + OcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount71);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount71;
}
if(CCesAmount1 && OcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount72 = CCesAmount + OcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount72);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount72;
}
if(CCesAmount1 && OcAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount73 = CCesAmount + OcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount73);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount73;
}
if(CCesAmount1 && BwAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount74 = CCesAmount + BwAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount74);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount74;
}
if(CCesAmount1 && BwAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount75 = CCesAmount + BwAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount75);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount75;
}
if(CCesAmount1 && PrAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount76 = CCesAmount + PrAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount76);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount76;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount77 = CCesAmount + DpAmount + CcAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount77);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount77;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount78 = CCesAmount + DpAmount + CcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount78);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount78;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount79 = CCesAmount + DpAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount79);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount79;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount80 = CCesAmount + DpAmount + CcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount80);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount80;
}
if(CCesAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount81 = CCesAmount + OcAmount + CcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount81);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount81;
}
if(CCesAmount1 && CcAmount1 && OcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount82 = CCesAmount + OcAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount82);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount82;
}
if(CCesAmount1 && CcAmount1 && OcAmount1 && NlAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount83 = CCesAmount + OcAmount + CcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount83);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount83;
}
if(CCesAmount1 && OcAmount1 && BwAmount1 && PrAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount84 = CCesAmount + OcAmount + BwAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount84);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount84;
}
if(CCesAmount1 && OcAmount1 && BwAmount1 && NlAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount85 = CCesAmount + OcAmount + BwAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount85);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount85;
}
if(CCesAmount1 && OcAmount1 && BwAmount1 && DpAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount86 = CCesAmount + OcAmount + BwAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount86);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount86;
}
if(CCesAmount1 && OcAmount1 && BwAmount1 && CcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount87 = CCesAmount + OcAmount + BwAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount87);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount87;
}
if(CCesAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount88 = CCesAmount + BwAmount + PrAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount88);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount88;
}
if(CCesAmount1 && BwAmount1 && PrAmount1 && DpAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount89 = CCesAmount + BwAmount + PrAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount89);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount89;
}
if(CCesAmount1 && BwAmount1 && PrAmount1 && CcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount90 = CCesAmount + BwAmount + PrAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount90);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount90;
}
if(CCesAmount1 && PrAmount1 && NlAmount1 && DpAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount92 = CCesAmount + NlAmount + PrAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount92);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount92;
}
if(CCesAmount1 && PrAmount1 && NlAmount1 && CcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount93 = CCesAmount + NlAmount + PrAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount93);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount93;
}
if(CCesAmount1 && PrAmount1 && NlAmount1 && OcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount94 = CCesAmount + NlAmount + PrAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount94);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount94;
}
if(CCesAmount1 && PrAmount1 && OcAmount1 && DpAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount95 = CCesAmount + OcAmount + PrAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount95);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount95;
}
if(CCesAmount1 && NlAmount1 && OcAmount1 && DpAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount96 = CCesAmount + OcAmount + NlAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount96);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount96;
}
if(CCesAmount1 && BwAmount1 && NlAmount1 && CcAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let totalAmount97 = CCesAmount + NlAmount + BwAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount97);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount97;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount98 = CCesAmount + DpAmount + CcAmount + OcAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount98);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount98;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount99 = CCesAmount + DpAmount + CcAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount99);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount99;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount100 = CCesAmount + DpAmount + CcAmount + OcAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount100);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount100;
}
if(CCesAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount101 = CCesAmount + BwAmount + CcAmount + OcAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount101);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount101;
}
if(CCesAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && NlAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount102 = CCesAmount + BwAmount + CcAmount + OcAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount102);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount102;
}
if(CCesAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && NlAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount103 = CCesAmount + BwAmount + PrAmount + OcAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount103);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount103;
}
if(CCesAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && DpAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount104 = CCesAmount + BwAmount + PrAmount + OcAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount104);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount104;
}
if(CCesAmount1 && BwAmount1 && PrAmount1 && NlAmount1 && DpAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount105 = CCesAmount + BwAmount + PrAmount + NlAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount105);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount105;
}
if(CCesAmount1 && BwAmount1 && PrAmount1 && NlAmount1 && CcAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let totalAmount106 = CCesAmount + BwAmount + PrAmount + NlAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount106);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount106;
}
if(CCesAmount1 && OcAmount1 && PrAmount1 && NlAmount1 && DpAmount1 ){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount107 = CCesAmount + OcAmount + PrAmount + NlAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount107);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount107;
}
if(CCesAmount1 && BwAmount1 && OcAmount1 && NlAmount1 && DpAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount108 = CCesAmount + BwAmount + OcAmount + NlAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount108);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount108;
}
if(CCesAmount1 && BwAmount1 && CcAmount1 && NlAmount1 && DpAmount1 ){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount109 = CCesAmount + BwAmount + CcAmount + NlAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount109);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount109;
}
if(CCesAmount1 && PrAmount1 && CcAmount1 && NlAmount1 && DpAmount1 ){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let totalAmount110 = CCesAmount + PrAmount + CcAmount + NlAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount110);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount110;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount111 = CCesAmount + DpAmount + CcAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount111);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount111;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount112 = CCesAmount + DpAmount + CcAmount + OcAmount + BwAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount112);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount112;
}
if(CCesAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount113 = CCesAmount + NlAmount + CcAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount113);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount113;
}
if(CCesAmount1 && DpAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount114 = CCesAmount + NlAmount + DpAmount + OcAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount114);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount114;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount115 = CCesAmount + NlAmount + CcAmount + DpAmount + BwAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount115);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount115;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && PrAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let totalAmount116 = CCesAmount + NlAmount + CcAmount + OcAmount + DpAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount116);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount116;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let totalAmount117 = CCesAmount + NlAmount + CcAmount + OcAmount + DpAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount117);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount117;
}
if(CCesAmount1 && DpAmount1 && CcAmount1 && OcAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let totalAmount118 = CCesAmount + DpAmount + CcAmount + OcAmount + BwAmount + PrAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount118);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount118;
}
if(PeAmount1){
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        localStorage.setItem('totalAmountNumber', PeAmount);
        document.querySelector('.basel-cart-subtotalCart').textContent = PeAmount;
}
if(DpAmount1 && PeAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount119 = PeAmount + DpAmount;
        localStorage.setItem('totalAmountNumber', totalAmount119);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount119;
}
if(CcAmount1 && PeAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount120 = PeAmount + CcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount120);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount120;
}
if(OcAmount1 && PeAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount121 = PeAmount + OcAmount;
        localStorage.setItem('totalAmountNumber', totalAmount121);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount121;
}
if(BwAmount1 && PeAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount122 = PeAmount + BwAmount;
        localStorage.setItem('totalAmountNumber', totalAmount122);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount122;
}
if(PrAmount1 && PeAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount123 = PeAmount + PrAmount;
        localStorage.setItem('totalAmountNumber', totalAmount123);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount123;
}
if(NlAmount1 && PeAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount124 = PeAmount + NlAmount;
        localStorage.setItem('totalAmountNumber', totalAmount124);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount124;
}
if(CCesAmount1 && PeAmount1){
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount125 = PeAmount + CCesAmount;
        localStorage.setItem('totalAmountNumber', totalAmount125);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount125;
}
if(PeAmount1 && DpAmount1 && CcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount126 = PeAmount + DpAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount126);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount126;
}
if(PeAmount1 && DpAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount127 = PeAmount + DpAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount127);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount127;
}
if(PeAmount1 && DpAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount128 = PeAmount + DpAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount128);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount128;
}
if(PeAmount1 && DpAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount129 = PeAmount + DpAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount129);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount129;
}
if(PeAmount1 && DpAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount130 = PeAmount + DpAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount130);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount130;
}
if(PeAmount1 && CcAmount1 && OcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount131 = PeAmount + CcAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount131);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount131;
}
if(PeAmount1 && CcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount132 = PeAmount + CcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount132);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount132;
}
if(PeAmount1 && CcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount133 = PeAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount133);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount133;
}
if(PeAmount1 && CcAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount134 = PeAmount + CcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount134);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount134;
}
if(PeAmount1 && OcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount135 = PeAmount + OcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount135);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount135;
}
if(PeAmount1 && OcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount136 = PeAmount + OcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount136);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount136;
}
if(PeAmount1 && OcAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount137 = PeAmount + OcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount137);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount137;
}
if(PeAmount1 && BwAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount138 = PeAmount + BwAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount138);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount138;
}
if(PeAmount1 && BwAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount139 = PeAmount + BwAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount139);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount139;
}
if(PeAmount1 && PrAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount140 = PeAmount + PrAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount140);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount140;
}
if(PeAmount1 && CCesAmount1 && DpAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount141 = PeAmount + CCesAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount141);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount141;
}
if(PeAmount1 && CCesAmount1 && CcAmount1){
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount142 = PeAmount + CCesAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount142);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount142;
}
if(PeAmount1 && CCesAmount1 && OcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount143 = PeAmount + CCesAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount143);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount143;
}
if(PeAmount1 && CCesAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount144 = PeAmount + CCesAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount144);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount144;
}
if(PeAmount1 && CCesAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount145 = PeAmount + CCesAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount145);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount145;
}
if(PeAmount1 && CCesAmount1 && NlAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount146 = PeAmount + CCesAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount146);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount146;
}
if(PeAmount1 && DpAmount1 && CcAmount1 && OcAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount147 = PeAmount + DpAmount + CcAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount147);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount147;
}
if(PeAmount1 && DpAmount1 && CcAmount1 && BwAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount148 = PeAmount + DpAmount + CcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount148);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount148;
}
if(PeAmount1 && DpAmount1 && CcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount149 = PeAmount + DpAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount149);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount149;
}
if(PeAmount1 && DpAmount1 && CcAmount1 && PrAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount149 = PeAmount + DpAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount149);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount149;
}
if(PeAmount1 && DpAmount1 && CcAmount1 && NlAmount1){
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount150 = PeAmount + DpAmount + CcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount150);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount150;
}
if(PeAmount1 && CcAmount1 && OcAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount151 = PeAmount + OcAmount + CcAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount151);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount151;
}
if(PeAmount1 && CcAmount1 && OcAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount152 = PeAmount + OcAmount + CcAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount152);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount152;
}
if(PeAmount1 && CcAmount1 && OcAmount1 && NlAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount153 = PeAmount + OcAmount + CcAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount153);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount153;
}
if(PeAmount1 && OcAmount1 && BwAmount1 && PrAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount154 = PeAmount + OcAmount + BwAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount154);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount154;
}
if(PeAmount1 && OcAmount1 && BwAmount1 && NlAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount155 = PeAmount + OcAmount + BwAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount155);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount155;
}
if(PeAmount1 && OcAmount1 && BwAmount1 && DpAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount156 = PeAmount + OcAmount + BwAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount156);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount156;
}
if(PeAmount1 && OcAmount1 && BwAmount1 && CcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount157 = PeAmount + OcAmount + BwAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount157);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount157;
}
if(PeAmount1 && BwAmount1 && PrAmount1 && NlAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount158 = PeAmount + BwAmount + PrAmount + NlAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount158);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount158;
}
if(PeAmount1 && BwAmount1 && PrAmount1 && DpAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount159 = PeAmount + BwAmount + PrAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount159);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount159;
}
if(PeAmount1 && BwAmount1 && PrAmount1 && CcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount160 = PeAmount + BwAmount + PrAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount160);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount160;
}
if(PeAmount1 && PrAmount1 && NlAmount1 && DpAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount161 = PeAmount + NlAmount + PrAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount161);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount161;
}
if(PeAmount1 && PrAmount1 && NlAmount1 && CcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount162 = PeAmount + NlAmount + PrAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount162);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount162;
}
if(PeAmount1 && PrAmount1 && NlAmount1 && OcAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount163 = PeAmount + NlAmount + PrAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount163);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount163;
}
if(PeAmount1 && PrAmount1 && OcAmount1 && DpAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount164 = PeAmount + OcAmount + PrAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount164);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount164;
}
if(PeAmount1 && NlAmount1 && OcAmount1 && DpAmount1){
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let DpAmount = localStorage.getItem('totalAmountDP');
        DpAmount = parseInt(DpAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount165 = PeAmount + OcAmount + NlAmount + DpAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount165);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount165;
}
if(PeAmount1 && BwAmount1 && NlAmount1 && CcAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CcAmount = localStorage.getItem('totalAmountCC');
        CcAmount = parseInt(CcAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount166 = PeAmount + NlAmount + BwAmount + CcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount166);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount166;
}
if(PeAmount1 && CCesAmount1 && NlAmount1 && PrAmount1){
        let PrAmount = localStorage.getItem('totalAmountPR');
        PrAmount = parseInt(PrAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount167 = CCesAmount + NlAmount + PeAmount + PrAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount167);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount167;
}
if(PeAmount1 && CCesAmount1 && NlAmount1 && BwAmount1){
        let BwAmount = localStorage.getItem('totalAmountBW');
        BwAmount = parseInt(BwAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount168 = CCesAmount + NlAmount + PeAmount + BwAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount168);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount168;
}
if(PeAmount1 && CCesAmount1 && NlAmount1 && OcAmount1){
        let OcAmount = localStorage.getItem('totalAmountOC');
        OcAmount = parseInt(OcAmount);
        let NlAmount = localStorage.getItem('totalAmountNL');
        NlAmount = parseInt(NlAmount);
        let CCesAmount = localStorage.getItem('totalAmountCCES');
        CCesAmount = parseInt(CCesAmount);
        let PeAmount = localStorage.getItem('totalAmountPE');
        PeAmount = parseInt(PeAmount);
        let totalAmount169 = CCesAmount + NlAmount + PeAmount + OcAmount ;
        localStorage.setItem('totalAmountNumber', totalAmount169);
        document.querySelector('.basel-cart-subtotalCart').textContent = totalAmount169;
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

},1000)

setInterval (function emptycartAmounts(){
        let cartcheck2 = localStorage.getItem('totalCartNumber')
            if (cartcheck2 === null){
                    document.getElementById("amounthide").style.display = "none";
            }else{
            document.getElementById("amounthide").style.display = "block";
        }
    },1000);

setInterval (function Randssymbol(){
        let cartcheck3 = localStorage.getItem('totalAmountNumber')
            if (cartcheck3){
                    document.getElementById("randplug").style.display = "block";
            }else{
            document.getElementById("randplug").style.display = "none";
        }
    },1000);

totalCartAmountsDisplay();
totalAmountsDisplay();
emptycartAmounts();
Randssymbol();
