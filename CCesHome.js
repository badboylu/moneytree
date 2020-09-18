const cartshomeCCES = document.querySelectorAll('.DurbanPoisonHome');
var priceHomeCCES = 70;

cartshomeCCES.forEach(DurbanPoisonHome =>{
        DurbanPoisonHome.addEventListener('click', () => {
                cartNumbersCCES();
                addGramsNumbersHomeCCES();
                totalCostHomeCCES(priceHomeCCES);  
                displaytotalpriceHomeCCES();
                
                

})
}
)


function cartNumbersCCES() {
        
        let productNumbersHomeCCES = localStorage.getItem('cartNumberCCES'); 
               productNumbersHomeCCES = parseInt(productNumbersHomeCCES);
               if(productNumbersHomeCCES in localStorage) {
                localStorage.setItem('cartNumberCCES', parseInt(productNumbersHomeCCES)  + 1);
               }else{
                localStorage.setItem('cartNumberCCES', 1);
               
                
}
}

function addGramsNumbersHomeCCES() {
        let gramsNumberaddHomeCCES = localStorage.getItem('GramsCCES'); 
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
