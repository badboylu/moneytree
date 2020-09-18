const cartshomeNL = document.querySelectorAll('.NorthernLightsHome');
var priceHomeNL = 45;

cartshomeNL.forEach(NorthernLightsHome =>{
        NorthernLightsHome.addEventListener('click', () => {
                cartNumbersNL();
                addGramsNumbersHomeNL();
                totalCostHomeNL(priceHomeNL);  
                displaytotalpriceHomeNL();
                
                

})
}
)


function cartNumbersNL() {
        
        let productNumbersHomeNL = localStorage.getItem('cartNumberNL'); 
               productNumbersHomeNL = parseInt(productNumbersHomeNL);
               if(productNumbersHomeNL in localStorage) {
                localStorage.setItem('cartNumberNL', parseInt(productNumbersHomeNL)  + 1);
               }else{
                localStorage.setItem('cartNumberNL', 1);
               
                
}
}

function addGramsNumbersHomeNL() {
        let gramsNumberaddHomeNL = localStorage.getItem('GramsNL'); 
        gramsNumberaddHomeNL = parseInt(gramsNumberaddHomeNL);
               if(gramsNumberaddHomeNL) {
                localStorage.setItem('GramsNL', gramsNumberaddHomeNL + 5);
               }else{
                localStorage.setItem('GramsNL', 5);
               }
}

function totalCostHomeNL(priceHomeNL) {
        localStorage.setItem('totalCostNL', priceHomeNL);
       
}

function displaytotalpriceHomeNL() {
        let gramsnumberHomeNL = localStorage.getItem('GramsNL');
        gramsnumberHomeNL = parseInt(gramsnumberHomeNL);
        let pricetotalHomeNL = localStorage.getItem('totalCostNL');
        pricetotalHomeNL = parseInt(pricetotalHomeNL);
        let totalAmountHomeNL = pricetotalHomeNL * gramsnumberHomeNL;
        localStorage.setItem('totalAmountNL', totalAmountHomeNL);
}

setInterval(function hideDpButtonHomeNL(){
    if ("GramsNL" in localStorage){
    document.getElementById("NlHome").style.display = "none";
}else{
    document.getElementById("NlHome").style.display = "block";
}
},1000)

setInterval(function hideDpButtonHomecartNL(){
        if ("GramsNL" in localStorage){
        document.getElementById("NlHomecart").style.display = "block";
    }else{
        document.getElementById("NlHomecart").style.display = "none";
    }
    },1000)



hideDpButtonHomeNL();
hideDpButtonHomecartNL();
