const cartshomePR = document.querySelectorAll('.PreRollsHome');
var priceHomePR = 60;

cartshomePR.forEach(PreRollsHome =>{
        PreRollsHome.addEventListener('click', () => {
                cartNumbersPR();
                addGramsNumbersHomePR();
                totalCostHomePR(priceHomePR);  
                displaytotalpriceHomePR();
                
                

})
}
)


function cartNumbersPR() {
        
        let productNumbersHomePR = localStorage.getItem('cartNumberPR'); 
               productNumbersHomePR = parseInt(productNumbersHomePR);
               if(productNumbersHomePR in localStorage) {
                localStorage.setItem('cartNumberPR', parseInt(productNumbersHomePR)  + 1);
               }else{
                localStorage.setItem('cartNumberPR', 1);
               
                
}
}

function addGramsNumbersHomePR() {
        let gramsNumberaddHomePR = localStorage.getItem('GramsPR'); 
        gramsNumberaddHomePR = parseInt(gramsNumberaddHomePR);
               if(gramsNumberaddHomePR) {
                localStorage.setItem('GramsPR', gramsNumberaddHomePR + 1);
               }else{
                localStorage.setItem('GramsPR', 1);
               }
}

function totalCostHomePR(priceHomePR) {
        localStorage.setItem('totalCostPR', priceHomePR);
       
}

function displaytotalpriceHomePR() {
        let gramsnumberHomePR = localStorage.getItem('GramsPR');
        gramsnumberHomePR = parseInt(gramsnumberHomePR);
        let pricetotalHomePR = localStorage.getItem('totalCostPR');
        pricetotalHomePR = parseInt(pricetotalHomePR);
        let totalAmountHomePR = pricetotalHomePR * gramsnumberHomePR;
        localStorage.setItem('totalAmountPR', totalAmountHomePR);
}

setInterval(function hideDpButtonHomePR(){
    if ("GramsPR" in localStorage){
    document.getElementById("PrHome").style.display = "none";
}else{
    document.getElementById("PrHome").style.display = "block";
}
},1000)

setInterval(function hideDpButtonHomecartPR(){
        if ("GramsPR" in localStorage){
        document.getElementById("PrHomecart").style.display = "block";
    }else{
        document.getElementById("PrHomecart").style.display = "none";
    }
    },1000)



hideDpButtonHomePR();
hideDpButtonHomecartPR();
