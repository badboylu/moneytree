const cartshomeOC = document.querySelectorAll('.OrangeCaliHome');
var priceHomeOC = 20;

cartshomeOC.forEach(OrangeCaliHome =>{
    OrangeCaliHome.addEventListener('click', () => {
                cartNumbersOC();
                addGramsNumbersHomeOC();
                reloadHomeOC();
                totalCostHomeOC(priceHomeOC);  
                displaytotalpriceHomeOC();
                

})
}
)

function cartNumbersOC() {
        
        let productNumbersHomeOC = localStorage.getItem('cartNumberOC'); 
               productNumbersHomeOC = parseInt(productNumbersHomeOC);
               if(productNumbersHomeOC in localStorage) {
                localStorage.setItem('cartNumberOC', parseInt(productNumbersHomeOC)  + 1);
               }else{
                localStorage.setItem('cartNumberOC', 1);
               
                
}
}

function addGramsNumbersHomeOC() {
        let gramsNumberaddHomeOC = localStorage.getItem('GramsOC'); 
        gramsNumberaddHomeOC = parseInt(gramsNumberaddHomeOC);
               if(gramsNumberaddHomeOC) {
                localStorage.setItem('GramsOC', gramsNumberaddHomeOC + 5);
               }else{
                localStorage.setItem('GramsOC', 5);
               }
}


function reloadHomeOC(){
    location.reload();
}

function totalCostHomeOC(priceHomeOC) {
        localStorage.setItem('totalCostOC', priceHomeOC);
       
}

function displaytotalpriceHomeOC() {
        let gramsnumberHomeOC = localStorage.getItem('GramsOC');
        gramsnumberHomeOC = parseInt(gramsnumberHomeOC);
        let pricetotalHomeOC = localStorage.getItem('totalCostOC');
        pricetotalHomeOC = parseInt(pricetotalHomeOC);
        let totalAmountHomeOC = pricetotalHomeOC * gramsnumberHomeOC;
        localStorage.setItem('totalAmountOC', totalAmountHomeOC);
}

function hideDpButtonHomeOC(){
    if ("GramsOC" in localStorage){
    document.getElementById("OcHome").style.display = "none";
}else{
    document.getElementById("OcHome").style.display = "block";
}
}

function hideDpButtonHomecartOC(){
        if ("GramsOC" in localStorage){
        document.getElementById("OcHomecart").style.display = "block";
    }else{
        document.getElementById("OcHomecart").style.display = "none";
    }
    }


hideDpButtonHomeOC();
hideDpButtonHomeOC();
hideDpButtonHomecartOC();