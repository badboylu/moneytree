const cartshomePE = document.querySelectorAll('.PineappleExpressHome');
var priceHomePE = 100;

cartshomePE.forEach(PineappleExpressHome =>{
        PineappleExpressHome.addEventListener('click', () => {
                cartNumbersPE();
                addGramsNumbersHomePE();
                totalCostHomePE(priceHomePE);  
                displaytotalpriceHomePE();
                
                

})
}
)


function cartNumbersPE() {
        
        let productNumbersHomePE = localStorage.getItem('cartNumberPE'); 
               productNumbersHomePE = parseInt(productNumbersHomePE);
               if(productNumbersHomePE in localStorage) {
                localStorage.setItem('cartNumberPE', parseInt(productNumbersHomePE)  + 1);
               }else{
                localStorage.setItem('cartNumberPE', 1);
               
                
}
}

function addGramsNumbersHomePE() {
        let gramsNumberaddHomePE = localStorage.getItem('GramsPE'); 
        gramsNumberaddHomePE = parseInt(gramsNumberaddHomePE);
               if(gramsNumberaddHomePE) {
                localStorage.setItem('GramsPE', gramsNumberaddHomePE + 1);
               }else{
                localStorage.setItem('GramsPE', 1);
               }
}

function totalCostHomePE(priceHomePE) {
        localStorage.setItem('totalCostPE', priceHomePE);
       
}

function displaytotalpriceHomePE() {
        let gramsnumberHomePE = localStorage.getItem('GramsPE');
        gramsnumberHomePE = parseInt(gramsnumberHomePE);
        let pricetotalHomePE = localStorage.getItem('totalCostPE');
        pricetotalHomePE = parseInt(pricetotalHomePE);
        let totalAmountHomePE = pricetotalHomePE * gramsnumberHomePE;
        localStorage.setItem('totalAmountPE', totalAmountHomePE);
}

setInterval(function hideDpButtonHomePE(){
    if ("GramsPE" in localStorage){
    document.getElementById("PeHome").style.display = "none";
}else{
    document.getElementById("PeHome").style.display = "block";
}
},1000)

setInterval(function hideDpButtonHomecartPE(){
        if ("GramsPE" in localStorage){
        document.getElementById("PeHomecart").style.display = "block";
    }else{
        document.getElementById("PeHomecart").style.display = "none";
    }
    },1000)



hideDpButtonHomePE();
hideDpButtonHomecartPE();
