const cartsPR = document.querySelectorAll('.PreRolls');
const moreGramsPR = document.querySelectorAll('.moreGramsPreRolls');
const lessGramsPR = document.querySelectorAll('.lessGramsPreRolls');
var pricePR = 60;

cartsPR.forEach(PreRolls =>{
        PreRolls.addEventListener('click', () => {
                cartNumbersPR();
                totalCostPR(pricePR);
                addGramsNumbersPR();
                displaytotalpricePR();
               

})
}
)


moreGramsPR.forEach(moreGramsPreRolls =>{
        moreGramsPreRolls.addEventListener('click', () => {
                
                totalCostPR(pricePR);
                addGramsNumbersPR();
})
}
)

lessGramsPR.forEach(lessGramsPreRolls =>{
        lessGramsPreRolls.addEventListener('click', () => {
                minusGramsNumbersPR();
                totalCostPR(pricePR);
                resetPR();
               
                

})
}
)


setInterval (function onclickPR(){
        if ("cartNumberPR" in localStorage){
		document.getElementById("PR").style.display = "none";
	}else{
		document.getElementById("PR").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsPR(){
        if ("cartNumberPR" in localStorage){
		document.getElementById("PRgrams").style.display = "block";
	}else{
		document.getElementById("PRgrams").style.display = "none";
	}
}, 1000);


function cartNumbersPR() {
        
        let productNumbersPR = localStorage.getItem('cartNumberPR'); 
               productNumbersPR = parseInt(productNumbersPR);
                localStorage.setItem('cartNumberPR', 1);
                
}

function totalCostPR(pricePR) {
        localStorage.setItem('totalCostPR', pricePR);
        var cartCostPR= localStorage.getItem('totalCostPR', pricePR);
        cartCostPR = parseInt(cartCostPR);
        if(cartCostPR) {
                localStorage.setItem('totalCostPR', cartCostPR);
        }else{
                localStorage.setItem('totalCostPR', parseInt(cartCostPR));
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
                localStorage.setItem('GramsPR',(ifavailablePR) + 1);
                let gramsNumberaddPR = localStorage.getItem('GramsPR'); 
                gramsNumberaddPR = parseInt(gramsNumberaddPR);
                document.querySelector('.gramsamountPR').textContent =parseInt(gramsNumberaddPR);
               }else{
                localStorage.setItem('GramsPR', 1 );       
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumberaddPR);
               }
}




function minusGramsNumbersPR() {
        let gramsNumbersminusPR = localStorage.getItem('GramsPR'); 
        gramsNumbersminusPR = parseInt(gramsNumbersminusPR);
               if(gramsNumbersminusPR) {
                localStorage.setItem('GramsPR', gramsNumbersminusPR = (gramsNumbersminusPR - 1));
                document.querySelector('.gramsamountPR').textContent = parseInt(gramsNumbersminusPR) -1;
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



