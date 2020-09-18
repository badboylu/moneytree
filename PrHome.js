const cartshome = document.querySelectorAll('.DurbanPoisonHome');
var priceHome = 70;

cartshome.forEach(DurbanPoisonHome =>{
        DurbanPoisonHome.addEventListener('click', () => {
                cartNumbers();
                addGramsNumbersHome();
                totalCostHome(priceHome);  
                displaytotalpriceHome();
                
                

})
}
)


function cartNumbers() {
        
        let productNumbersHome = localStorage.getItem('cartNumberDP'); 
               productNumbersHome = parseInt(productNumbersHome);
               if(productNumbersHome in localStorage) {
                localStorage.setItem('cartNumberDP', parseInt(productNumbersHome)  + 1);
               }else{
                localStorage.setItem('cartNumberDP', 1);
               
                
}
}

function addGramsNumbersHome() {
        let gramsNumberaddHome = localStorage.getItem('GramsDP'); 
        gramsNumberaddHome = parseInt(gramsNumberaddHome);
               if(gramsNumberaddHome) {
                localStorage.setItem('GramsDP', gramsNumberaddHome + 5);
               }else{
                localStorage.setItem('GramsDP', 5);
               }
}

function totalCostHome(priceHome) {
        console.log('The product price is', priceHome);
        localStorage.setItem('totalCostDP', priceHome);
       
}

function displaytotalpriceHome() {
        let gramsnumberHome = localStorage.getItem('GramsDP');
        gramsnumberHome = parseInt(gramsnumberHome);
        let pricetotalHome = localStorage.getItem('totalCostDP');
        pricetotalHome = parseInt(pricetotalHome);
        let totalAmountHome = pricetotalHome * gramsnumberHome;
        localStorage.setItem('totalAmountDP', totalAmountHome);
}

setInterval(function hideDpButtonHome(){
    if ("GramsDP" in localStorage){
    document.getElementById("DpHome").style.display = "none";
}else{
    document.getElementById("DpHome").style.display = "block";
}
},1000)

setInterval(function hideDpButtonHomecart(){
        if ("GramsDP" in localStorage){
        document.getElementById("DpHomecart").style.display = "block";
    }else{
        document.getElementById("DpHomecart").style.display = "none";
    }
    },1000)



hideDpButtonHome();
hideDpButtonHomecart();
