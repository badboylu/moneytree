const cartshomeCCES = document.querySelectorAll('.CannacapsESHome');
var priceHomeCCES = 450;

cartshomeCCES.forEach(CannacapsESHome =>{
        CannacapsESHome.addEventListener('click', () => {
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
        gramsNumberaddHomeCCES = parseInt(gramsNumberaddHomeCCES);
               if(gramsNumberaddHomeCCES) {
                localStorage.setItem('GramsCCES', gramsNumberaddHomeCCES + 1);
               }else{
                localStorage.setItem('GramsCCES', 1);
               }
}

function totalCostHomeCCES(priceHomeCCES) {
        localStorage.setItem('totalCostCCES', priceHomeCCES);
       
}

function displaytotalpriceHomeCCES() {
        let gramsnumberHomeCCES = localStorage.getItem('GramsCCES');
        gramsnumberHomeCCES = parseInt(gramsnumberHomeCCES);
        let pricetotalHomeCCES = localStorage.getItem('totalCostCCES');
        pricetotalHomeCCES = parseInt(pricetotalHomeCCES);
        let totalAmountHomeCCES = pricetotalHomeCCES * gramsnumberHomeCCES;
        localStorage.setItem('totalAmountCCES', totalAmountHomeCCES);
}

setInterval(function hideDpButtonHomeCCES(){
    if ("GramsCCES" in localStorage){
    document.getElementById("CCesHome").style.display = "none";
}else{
    document.getElementById("CCesHome").style.display = "block";
}
},1000)

setInterval(function hideDpButtonHomecartCCES(){
        if ("GramsCCES" in localStorage){
        document.getElementById("CCesHomecart").style.display = "block";
    }else{
        document.getElementById("CCesHomecart").style.display = "none";
    }
    },1000)



hideDpButtonHomeCCES();
hideDpButtonHomecartCCES();
