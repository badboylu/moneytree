const cartsCCes = document.querySelectorAll('.CannacapsES');
const moreGramsCCes = document.querySelectorAll('.moreGramsCannacapsES');
const lessGramsCCes = document.querySelectorAll('.lessGramsCannacapsES');
var priceCCes = 450;

cartsPCCes.forEach(CannacapsES =>{
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
                resetPR();
               
                

})
}
)


setInterval (function onclickCCes(){
        if ("cartNumberCCes" in localStorage){
		document.getElementById("CCes").style.display = "none";
	}else{
		document.getElementById("CCes").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsCCes(){
        if ("cartNumberCCes" in localStorage){
		document.getElementById("CCesgrams").style.display = "block";
	}else{
		document.getElementById("CCesgrams").style.display = "none";
	}
}, 1000);


function cartNumbersCCes() {
        
        let productNumbersCCes = localStorage.getItem('cartNumberCCes'); 
               productNumbersCCes = parseInt(productNumbersCCes);
                localStorage.setItem('cartNumberCCes', 1);
                
}

function totalCostCCes(priceCCes) {
        localStorage.setItem('totalCostCCes', priceCCes);
        var cartCostCCes= localStorage.getItem('totalCostCCes', priceCCes);
        cartCostCCes = parseInt(cartCostCCed);
        if(cartCostCCes) {
                localStorage.setItem('totalCostCCes', cartCostCCes);
        }else{
                localStorage.setItem('totalCostCCes', parseInt(cartCostCCes));
        }
        
       
}

setInterval (function onloadgramsPR (){
        let gramsNumberaddPR = localStorage.getItem('GramsPR'); 
        if(gramsNumberaddPR){
                document.querySelector('.gramsamountPR').textContent = gramsNumberaddPR;
        };  
}, 1000);

function addGramsNumbersPR() {
        let ifavailablePR = localStorage.getItem('GramsPR')
        ifavailablePR = parseInt(ifavailablePR);
               if(ifavailablePR) {
                localStorage.setItem('GramsPR',(ifavailablePR) + 5);
                let gramsNumberaddPR = localStorage.getItem('GramsPR'); 
                gramsNumberaddPR = parseInt(gramsNumberaddPR);
                document.querySelector('.gramsamountPR').textContent =parseInt(gramsNumberaddPR);
               }else{
                localStorage.setItem('GramsPR', 5 );       
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumberaddPR);
               }
}




function minusGramsNumbersPR() {
        let gramsNumbersminusPR = localStorage.getItem('GramsPR'); 
        gramsNumbersminusPR = parseInt(gramsNumbersminusPR);
               if(gramsNumbersminusPR) {
                localStorage.setItem('GramsPR', gramsNumbersminusPR = (gramsNumbersminusPR - 5));
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumbersminusPR) -5;
               }else{
                document.querySelector('.gramsamountPR').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalpricePR (){
        let displayedtotalPR = localStorage.getItem('totalAmountPR');
        if(displayedtotalPR){
                document.querySelector('.totalcartPR').textContent = displayedtotalPR;
        }; 
}, 1000);

setInterval (function displaytotalpricePR() {
        let checkPR1 = localStorage.getItem('GramsPR')
        checkPR1 = parseInt(checkPR1);
        if (checkPR1){
        let gramsnumberPR = localStorage.getItem('GramsPR');
        gramsnumberPR = parseInt(gramsnumberPR);
        let pricetotalPR = localStorage.getItem('totalCostPR');
        pricetotalPR = parseInt(pricetotalPR);
        let totalAmountPR = pricetotalPR * gramsnumberPR;
        localStorage.setItem('totalAmountPR', totalAmountPR);}
}, 1000);

setInterval  (function checkPR(){
        let checkPR = localStorage.getItem('GramsPR')
        checkPR = parseInt(checkPR);
        if (checkPR){
                displaytotalpricePR();
        }else{
                localStorage.removeItem("totalAmountPR");
        }
}, 1000);

setInterval (function resetPR(){
        let checkgramsPR = localStorage.getItem("GramsPR");
        checkgramsPR = parseInt(checkgramsPR);
        if(checkgramsPR < 1){
                localStorage.removeItem("GramsPR");
                localStorage.removeItem("totalAmountPR");
                localStorage.removeItem("totalCostPR");
                localStorage.removeItem("cartNumberPR");
        }

}, 1000);

onloadgramsPR ();
checkPR();
onloaddisplaytotalpricePR ();
onclickPR();
onclickgramsPR();
resetPR();



