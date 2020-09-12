const cartshomeCC = document.querySelectorAll('.cannacapsHome');
var priceHomeCC = 240;

cartshomeCC.forEach(cannacapsHome =>{
        cannacapsHome.addEventListener('click', () => {
                cartNumbersCC();
                addGramsNumbersHomeCC();
                reloadHomeCC();
                totalCostHomeCC(priceHomeCC);  
                displaytotalpriceHomeCC();
                

})
}
)

function onloadCartNumbersHomeCC (){
        let productNumbersHomeCC = localStorage.getItem('cartNumberCC');
        if(productNumbersHomeCC in localStorage){
                document.querySelector('.basel-cart-numberCC').textContent = parseInt(productNumbersHomeCC);
        };  
}
function cartNumbersCC() {
        
        let productNumbersHomeCC = localStorage.getItem('cartNumberCC'); 
               productNumbersHomeCC = parseInt(productNumbersHomeCC);
               if(productNumbersHomeCC in localStorage) {
                localStorage.setItem('cartNumberCC', parseInt(productNumbersHomeCC)  + 1);
               }else{
                localStorage.setItem('cartNumberCC', 1);
               
                
}
}

function addGramsNumbersHomeCC() {
        let gramsNumberaddHomeCC = localStorage.getItem('BatchCC'); 
        gramsNumberaddHomeCC = parseInt(gramsNumberaddHomeCC);
               if(gramsNumberaddHomeCC) {
                localStorage.setItem('BatchCC', gramsNumberaddHomeCC + 1);
               }else{
                localStorage.setItem('BatchCC', 1);
               }
}


function reloadHomeCC(){
    location.reload();
}

function totalCostHomeCC(priceHomeCC) {
        console.log('The product price is', priceHome);
        localStorage.setItem('totalCostCC', priceHomeCC);
       
}

function displaytotalpriceHomeCC() {
        let gramsnumberHomeCC = localStorage.getItem('BatchCC');
        gramsnumberHomeCC = parseInt(gramsnumberHomeCC);
        let pricetotalHomeCC = localStorage.getItem('totalCostCC');
        pricetotalHomeCC = parseInt(pricetotalHomeCC);
        console.log(typeof pricetotalHome);
        let totalAmountHomeCC = pricetotalHomeCC * gramsnumberHomeCC;
        localStorage.setItem('totalAmountCC', totalAmountHomeCC);
}

function hideDpButtonHomeCC(){
    if ("BatchCC" in localStorage){
    document.getElementById("CcHome").style.display = "none";
}else{
    document.getElementById("CcHome").style.display = "block";
}
}

function hideCcButtonHomecart(){
        if ("BatchCC" in localStorage){
        document.getElementById("CcHomecart").style.display = "block";
    }else{
        document.getElementById("CcHomecart").style.display = "none";
    }
    }


hideDpButtonHomeCC();
onloadCartNumbersHomeCC();
hideDpButtonHomeCC();
hideCcButtonHomecart();