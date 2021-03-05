const cartsPE = document.querySelectorAll('.PineappleExpress');
const moreGramsPE = document.querySelectorAll('.moreGramsPineappleExpress');
const lessGramsPE = document.querySelectorAll('.lessGramsPineappleExpress');
var pricePE = 100;

cartsPE.forEach(PineappleExpress =>{
        PineappleExpress.addEventListener('click', () => {
                cartNumbersPE();
                totalCostPE(pricePE);
                addGramsNumbersPE();
                displaytotalpricePE();
               

})
}
)


moreGramsPE.forEach(moreGramsPineappleExpress =>{
        moreGramsPineappleExpress.addEventListener('click', () => {
                
                totalCostPE(pricePE);
                addGramsNumbersPE();
})
}
)

lessGramsPE.forEach(lessGramsPineappleExpress =>{
        lessGramsPineappleExpress.addEventListener('click', () => {
                minusGramsNumbersPE();
                totalCostPE(pricePE);
                resetPE();
               
                

})
}
)


setInterval (function onclickPE(){
        if ("cartNumberPE" in localStorage){
		document.getElementById("PE").style.display = "none";
	}else{
		document.getElementById("PE").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsPE(){
        if ("cartNumberPE" in localStorage){
		document.getElementById("PEgrams").style.display = "block";
	}else{
		document.getElementById("PEgrams").style.display = "none";
	}
}, 1000);


function cartNumbersPE() {
        
        let productNumbersPE = localStorage.getItem('cartNumberPE'); 
               productNumbersPE = parseInt(productNumbersPE);
                localStorage.setItem('cartNumberPE', 1);
                
}

function totalCostPE(pricePE) {
        localStorage.setItem('totalCostPE', pricePE);
        var cartCostPE= localStorage.getItem('totalCostPE', pricePE);
        cartCostPE = parseInt(cartCostPE);
        if(cartCostPE) {
                localStorage.setItem('totalCostPE', cartCostPE);
        }else{
                localStorage.setItem('totalCostPE', parseInt(cartCostPE));
        }
        
       
}

setInterval (function onloadgramsPE (){
        let gramsNumberaddPE = localStorage.getItem('GramsPE'); 
        if(gramsNumberaddPE){
                document.querySelector('.gramsamountPE').textContent = gramsNumberaddPE;
        };  
}, 1000);

function addGramsNumbersPE() {
        let ifavailablePE = localStorage.getItem('GramsPE')
        ifavailablePE = parseInt(ifavailablePE);
               if(ifavailablePE) {
                localStorage.setItem('GramsPE',(ifavailablePE) + 1);
                let gramsNumberaddPE = localStorage.getItem('GramsPE'); 
                gramsNumberaddPE = parseInt(gramsNumberaddPE);
                document.querySelector('.gramsamountPE').textContent =parseInt(gramsNumberaddPE);
               }else{
                localStorage.setItem('GramsPE', 1 );       
                document.querySelector('.gramsamountPE').textContent = parseInt(gramsNumberaddPE);
               }
}




function minusGramsNumbersPE() {
        let gramsNumbersminusPE = localStorage.getItem('GramsPE'); 
        gramsNumbersminusPE = parseInt(gramsNumbersminusPE);
               if(gramsNumbersminusPE) {
                localStorage.setItem('GramsPE', gramsNumbersminusPE = (gramsNumbersminusPE - 1));
                document.querySelector('.gramsamountPE').textContent = parseInt(gramsNumbersminusPE) -1;
               }else{
                document.querySelector('.gramsamountPE').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalpricePE (){
        let displayedtotalPE = localStorage.getItem('totalAmountPE');
        if(displayedtotalPE){
                document.querySelector('.totalcartPE').textContent = displayedtotalPE;
        }; 
}, 1000);

setInterval (function displaytotalpricePE() {
        let checkPE1 = localStorage.getItem('GramsPE')
        checkPE1 = parseInt(checkPE1);
        if (checkPE1){
        let gramsnumberPE = localStorage.getItem('GramsPE');
        gramsnumberPE = parseInt(gramsnumberPE);
        let pricetotalPE = localStorage.getItem('totalCostPE');
        pricetotalPE = parseInt(pricetotalPE);
        let totalAmountPE = pricetotalPE * gramsnumberPE;
        localStorage.setItem('totalAmountPE', totalAmountPE);}
}, 1000);

setInterval  (function checkPE(){
        let checkPE = localStorage.getItem('GramsPE')
        checkPE = parseInt(checkPE);
        if (checkPE){
                displaytotalpricePE();
        }else{
                localStorage.removeItem("totalAmountPE");
        }
}, 1000);


setInterval (function resetPE(){
        let checkgramsPE = localStorage.getItem("GramsPE");
        checkgramsPE = parseInt(checkgramsPE);
        if(checkgramsPE < 1){
                localStorage.removeItem("GramsPE");
                localStorage.removeItem("totalAmountPE");
                localStorage.removeItem("totalCostPE");
                localStorage.removeItem("cartNumberPE");
        }

}, 1000);

onloadgramsPE ();
checkPE();
onloaddisplaytotalpricePE ();
onclickPE();
onclickgramsPE();
resetPE();



