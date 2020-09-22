const cartsCCes = document.querySelectorAll('.CannacapsES');
const moreGramsCCes = document.querySelectorAll('.moreGramsCannacapsES');
const lessGramsCCes = document.querySelectorAll('.lessGramsCannacapsES');
var priceCCes = 450;

cartsCCes.forEach(CannacapsES =>{
        CannacapsES.addEventListener('click', () => {
                cartNumbersCCes();
                totalCostCCes(priceCCes);
                addGramsNumbersCCes();
                displaytotalpriceCCes();
               

})
}
)


moreGramsCCes.forEach(moreGramsCannacapsES =>{
        moreGramsCannacapsES.addEventListener('click', () => {
                
                totalCostCCes(priceCCes);
                addGramsNumbersCCes();
})
}
)

lessGramsCCes.forEach(lessGramsCannacapsES =>{
        lessGramsCannacapsES.addEventListener('click', () => {
                minusGramsNumbersCCes();
                totalCostCCes(priceCCes);
                resetCCes();
               
                

})
}
)


setInterval (function onclickCCes(){
        if ("cartNumberCCES" in localStorage){
		document.getElementById("CCes").style.display = "none";
	}else{
		document.getElementById("CCes").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsCCes(){
        if ("cartNumberCCES" in localStorage){
		document.getElementById("CCesgrams").style.display = "block";
	}else{
		document.getElementById("CCesgrams").style.display = "none";
	}
}, 1000);


function cartNumbersCCes() {
        
        let productNumbersCCes = localStorage.getItem('cartNumberCCES'); 
               productNumbersCCes = parseInt(productNumbersCCes);
                localStorage.setItem('cartNumberCCES', 1);
                
}

function totalCostCCes(priceCCes) {
        localStorage.setItem('totalCostCCes', priceCCes);
        var cartCostCCes= localStorage.getItem('totalCostCCes', priceCCes);
        cartCostCCes = parseInt(cartCostCCes);
        if(cartCostCCes) {
                localStorage.setItem('totalCostCCes', cartCostCCes);
        }else{
                localStorage.setItem('totalCostCCes', parseInt(cartCostCCes));
        }
        
       
}

setInterval (function onloadgramsCCes(){
        let gramsNumberaddCCes = localStorage.getItem('GramsCCes'); 
        if(gramsNumberaddCCes){
                document.querySelector('.gramsamountCCes').textContent = gramsNumberaddCCes;
        };  
}, 1000);

function addGramsNumbersCCes() {
        let ifavailableCCes = localStorage.getItem('GramsCCes')
        ifavailableCCes = parseInt(ifavailableCCes);
               if(ifavailableCCes) {
                localStorage.setItem('GramsCCes',(ifavailableCCes) + 1);
                let gramsNumberaddCCes = localStorage.getItem('GramsCCes'); 
                gramsNumberaddCCes = parseInt(gramsNumberaddCCes);
                document.querySelector('.gramsamountCCes').textContent =parseInt(gramsNumberaddCCes);
               }else{
                localStorage.setItem('GramsCCes', 1 );       
                document.querySelector('.gramsamountCCes').textContent = parseInt(gramsNumberaddCCes);
               }
}




function minusGramsNumbersCCes() {
        let gramsNumbersminusCCes = localStorage.getItem('GramsCCes'); 
        gramsNumbersminusCCes = parseInt(gramsNumbersminusCCes);
               if(gramsNumbersminusCCes) {
                localStorage.setItem('GramsCCes', gramsNumbersminusCCes = (gramsNumbersminusCCes - 1));
                document.querySelector('.gramsamountCCes').textContent = parseInt(gramsNumbersminusCCee) -1;
               }else{
                document.querySelector('.gramsamountCCes').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalpriceCCes(){
        let displayedtotalCCes = localStorage.getItem('totalAmountCCES');
        if(displayedtotalCCes){
                document.querySelector('.totalcartCCes').textContent = displayedtotalCCes;
        }; 
}, 1000);

setInterval (function displaytotalpriceCCes() {
        let checkCCes1 = localStorage.getItem('GramsCCes')
        checkCCes1 = parseInt(checkCCes1);
        if (checkCCes1){
        let gramsnumberCCes = localStorage.getItem('GramsCCes');
        gramsnumberCCes = parseInt(gramsnumberCCes);
        let pricetotalCCes = localStorage.getItem('totalCostCCes');
        pricetotalCCes = parseInt(pricetotalCCes);
        let totalAmountCCes = pricetotalCCes * gramsnumberCCes;
        localStorage.setItem('totalAmountCCES', totalAmountCCes);}
}, 1000);

setInterval  (function checkCCes(){
        let checkCCes = localStorage.getItem('GramsCCes')
        checkCCes = parseInt(checkCCes);
        if (checkCCes){
                displaytotalpriceCCes();
        }else{
                localStorage.removeItem("totalAmountCCES");
        }
}, 1000);

setInterval (function resetCCes(){
        let checkgramsCCes = localStorage.getItem("GramsCCes");
        checkgramsCCes = parseInt(checkgramsCCes);
        if(checkgramsCCes < 1){
                localStorage.removeItem("GramsCCes");
                localStorage.removeItem("totalAmountCCES");
                localStorage.removeItem("totalCostCCes");
                localStorage.removeItem("cartNumberCCES");
        }

}, 1000);

onloadgramsCCes ();
checkCCes();
onloaddisplaytotalpriceCCes ();
onclickCCes();
onclickgramsCCes();
resetCCes();



