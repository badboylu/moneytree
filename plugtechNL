const cartsNL = document.querySelectorAll('.NorthernLights');
const moreGramsNL = document.querySelectorAll('.moreGramsNorthernLights');
const lessGramsNL = document.querySelectorAll('.lessGramsNorthernLights');
var priceNL = 45;

cartsNL.forEach(NorthernLights =>{
        NorthernLights.addEventListener('click', () => {
                cartNumbersNL();
                totalCostNL(priceNL);
                addGramsNumbersNL();
                displaytotalpriceNL();
               

})
}
)


moreGramsNL.forEach(moreGramsNorthernLights =>{
        moreGramsNorthernLights.addEventListener('click', () => {
                
                totalCostNL(priceNL);
                addGramsNumbersNL();
})
}
)

lessGramsNL.forEach(lessGramsNorthernLights =>{
        lessGramsNorthernLights.addEventListener('click', () => {
                minusGramsNumbersNL();
                totalCostNL(priceNL);
                
                resetNL();
               
                

})
}
)


setInterval (function onclickNL(){
        if ("cartNumberNL" in localStorage){
		document.getElementById("NL").style.display = "none";
	}else{
		document.getElementById("NL").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsNL(){
        if ("cartNumberNL" in localStorage){
		document.getElementById("NLgrams").style.display = "block";
	}else{
		document.getElementById("NLgrams").style.display = "none";
	}
}, 1000);


function cartNumbersNL() {
        
        let productNumbersNL = localStorage.getItem('cartNumberNL'); 
               productNumbersNL = parseInt(productNumbersNL);
                localStorage.setItem('cartNumberNL', 1);
                
}

function totalCostNL(priceNL) {
        localStorage.setItem('totalCostNL', priceNL);
        var cartCostNL= localStorage.getItem('totalCostNL', priceNL);
        cartCostNL = parseInt(cartCostNL);
        if(cartCostNL) {
                localStorage.setItem('totalCostNL', cartCostNL);
        }else{
                localStorage.setItem('totalCostNL', parseInt(cartCostNL));
        }
        
       
}

setInterval (function onloadgramsNL (){
        let gramsNumberaddNL = localStorage.getItem('GramsNL'); 
        if(gramsNumberaddNL){
                document.querySelector('.gramsamountNL').textContent = gramsNumberaddNL;
        };  
}, 1000);

function addGramsNumbersNL() {
        let ifavailableNL = localStorage.getItem('GramsNL')
        ifavailableNL = parseInt(ifavailableNL);
               if(ifavailableNL) {
                localStorage.setItem('GramsNL',(ifavailableNL) + 5);
                let gramsNumberaddNL = localStorage.getItem('GramsNL'); 
                gramsNumberaddNL = parseInt(gramsNumberaddNL);
                document.querySelector('.gramsamountNL').textContent =parseInt(gramsNumberaddNL);
               }else{
                localStorage.setItem('GramsNL', 5 );       
                document.querySelector('.gramsamountNL').textContent = parseInt(gramsNumberaddNL);
               }
}




function minusGramsNumbersNL() {
        let gramsNumbersminusNL = localStorage.getItem('GramsNL'); 
        gramsNumbersminusNL = parseInt(gramsNumbersminusNL);
               if(gramsNumbersminusNL) {
                localStorage.setItem('GramsNL', gramsNumbersminusNL = (gramsNumbersminusNL - 5));
                document.querySelector('.gramsamountNL').textContent = parseInt(gramsNumbersminusNL) -5;
               }else{
                document.querySelector('.gramsamountNL').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalpriceNL (){
        let displayedtotalNL = localStorage.getItem('totalAmountNL');
        if(displayedtotalNL){
                document.querySelector('.totalcartNL').textContent = displayedtotalNL;
        }; 
}, 1000);

setInterval (function displaytotalpriceNL() {
        let checkNL1 = localStorage.getItem('GramsNL')
        checkNL1 = parseInt(checkNL1);
        if (checkNL1){
        let gramsnumberNL = localStorage.getItem('GramsNL');
        gramsnumberNL = parseInt(gramsnumberNL);
        let pricetotalNL = localStorage.getItem('totalCostNL');
        pricetotalNL = parseInt(pricetotalNL);
        let totalAmountNL = pricetotalNL * gramsnumberNL;
        localStorage.setItem('totalAmountNL', totalAmountNL);}
}, 1000);

setInterval  (function checkNL(){
        let checkNL = localStorage.getItem('GramsNL')
        checkNL = parseInt(checkNL);
        if (checkNL){
                displaytotalpriceNL();
        }else{
                localStorage.removeItem("totalAmountNL");
        }
}, 1000);


setInterval (function resetNL(){
        let checkgramsNL = localStorage.getItem("GramsNL");
        checkgramsNL = parseInt(checkgramsNL);
        if(checkgramsNL < 1){
                localStorage.removeItem("GramsNL");
                localStorage.removeItem("totalAmountNL");
                localStorage.removeItem("totalCostNL");
                localStorage.removeItem("cartNumberNL");
        }

}, 1000);

onloadgramsNL ();
checkNL();
onloaddisplaytotalpriceNL ();
onclickNL();
onclickgramsNL();
resetNL();



