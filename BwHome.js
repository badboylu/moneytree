const cartshomeBW = document.querySelectorAll('.BluntWrapHome');
var priceHomeBW = 70;

cartshomeBW.forEach(BluntWrapHome =>{
    BluntWrapHome.addEventListener('click', () => {
                cartNumbersBW();
                addGramsNumbersHomeBW();
                totalCostHomeBW(priceHome);  
                displaytotalpriceHomeBW();
                

})
}
)

function onloadCartNumbersHomeBW (){
        let productNumbersHomeBW = localStorage.getItem('cartNumberBW');
        if(productNumbersHomeBW in localStorage){
                document.querySelector('.basel-cart-number').textContent = parseInt(productNumbersHomeBW);
        };  
}
function cartNumbersBW() {
        
        let productNumbersHomeBW = localStorage.getItem('cartNumberBW'); 
               productNumbersHomeBW = parseInt(productNumbersHomeBW);
               if(productNumbersHomeBW in localStorage) {
                localStorage.setItem('cartNumberBW', parseInt(productNumbersHomeBW)  + 1);
               }else{
                localStorage.setItem('cartNumberBW', 1);
               
                
}
}

function addGramsNumbersHomeBW() {
        let gramsNumberaddHomeBW = localStorage.getItem('PacksBW'); 
        gramsNumberaddHomeBW = parseInt(gramsNumberaddHomeBW);
               if(gramsNumberaddHomeBW) {
                localStorage.setItem('PacksBW', gramsNumberaddHomeBW + 5);
               }else{
                localStorage.setItem('PacksBW', 5);
               }
}


function totalCostHomeBW(priceHomeBW) {
        localStorage.setItem('totalCostBW', priceHomeBW);
       
}

function displaytotalpriceHomeBW() {
        let gramsnumberHomeBW = localStorage.getItem('PacksBW');
        gramsnumberHomeBW = parseInt(gramsnumberHomeBW);
        let pricetotalHomeBW = localStorage.getItem('totalCostBW');
        pricetotalHomeBW = parseInt(pricetotalHomeBW);
        let totalAmountHomeBW = pricetotalHomeBW * gramsnumberHomeBW;
        localStorage.setItem('totalAmountBW', totalAmountHomeBW);
}

setInterval(function hideDpButtonHomeBW(){
    if ("PacksBW" in localStorage){
    document.getElementById("BwHome").style.display = "none";
}else{
    document.getElementById("BwHome").style.display = "block";
}
},1000)

setInterval(function hideDpButtonHomecartBW(){
        if ("PacksBW" in localStorage){
        document.getElementById("BwHomecart").style.display = "block";
    }else{
        document.getElementById("BwHomecart").style.display = "none";
    }
    },1000)


hideDpButtonHomeBW();
onloadCartNumbersHomeBW ();
hideDpButtonHomeBW();
hideDpButtonHomecartBW();