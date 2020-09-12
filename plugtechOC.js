const cartsOC = document.querySelectorAll('.OrangeCali');
const moreGramsOC = document.querySelectorAll('.moreGramsOrangeCali');
const lessGramsOC = document.querySelectorAll('.lessGramsOrangeCali');
var priceOC = 20;

cartsOC.forEach(OrangeCali =>{
    OrangeCali.addEventListener('click', () => {
                cartNumbersOC();
                totalCostOC(priceOC);
                addGramsNumbersOC();
                displaytotalpriceOC();
               

})
}
)


moreGramsOC.forEach(moreGramsOrangeCali =>{
    moreGramsOrangeCali.addEventListener('click', () => {
                
                totalCostOC(priceOC);
                addGramsNumbersOC();
})
}
)

lessGramsOC.forEach(lessGramsDurbanPoison =>{
        lessGramsDurbanPoison.addEventListener('click', () => {
                minusGramsNumbersOC();
                totalCostOC(priceOC);
                
                resetOC();
               
                

})
}
)


setInterval (function onclickOC(){
        if ("cartNumberOC" in localStorage){
		document.getElementById("OC").style.display = "none";
	}else{
		document.getElementById("OC").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsOC(){
        if ("cartNumberOC" in localStorage){
		document.getElementById("OCgrams").style.display = "block";
	}else{
		document.getElementById("OCgrams").style.display = "none";
	}
}, 1000);


function cartNumbersOC() {
        
        let productNumbersOC = localStorage.getItem('cartNumberOC'); 
               productNumbersOC = parseInt(productNumbersOC);
                localStorage.setItem('cartNumberOC', 1);
                
}

function totalCostOC(priceOC) {
        localStorage.setItem('totalCostOC', priceOC);
        var cartCostOC= localStorage.getItem('totalCostOC', priceOC);
        cartCostOC = parseInt(cartCostOC);
        if(cartCostOC) {
                localStorage.setItem('totalCostOC', cartCostOC);
        }else{
                localStorage.setItem('totalCostOC', parseInt(cartCostOC));
        }
        
       
}

setInterval (function onloadgramsOC (){
        let gramsNumberaddOC = localStorage.getItem('GramsOC'); 
        if(gramsNumberaddOC){
                document.querySelector('.gramsamountOC').textContent = gramsNumberaddOC;
        };  
}, 1000);

function addGramsNumbersOC() {
        let ifavailableOC = localStorage.getItem('GramsOC')
        ifavailableOC = parseInt(ifavailableOC);
               if(ifavailableOC) {
                localStorage.setItem('GramsOC',(ifavailableOC) + 5);
                let gramsNumberaddOC = localStorage.getItem('GramsOC'); 
                gramsNumberaddOC = parseInt(gramsNumberaddOC);
                document.querySelector('.gramsamountOC').textContent =parseInt(gramsNumberaddOC);
               }else{
                localStorage.setItem('GramsOC', 5 );       
                document.querySelector('.gramsamountOC').textContent = parseInt(gramsNumberaddOC);
               }
}




function minusGramsNumbersOC() {
        let gramsNumbersminusOC = localStorage.getItem('GramsOC'); 
        gramsNumbersminusOC = parseInt(gramsNumbersminusOC);
               if(gramsNumbersminusOC) {
                localStorage.setItem('GramsOC', gramsNumbersminusOC = (gramsNumbersminusOC - 5));
                document.querySelector('.gramsamountOC').textContent = parseInt(gramsNumbersminusOC) -5;
               }else{
                document.querySelector('.gramsamountOC').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalpriceOC (){
        let displayedtotalOC = localStorage.getItem('totalAmountOC');
        if(displayedtotalOC){
                document.querySelector('.totalcartOC').textContent = displayedtotalOC;
        }; 
}, 1000);

setInterval (function displaytotalpriceOC() {
        let checkOC1 = localStorage.getItem('GramsOC')
        checkOC1 = parseInt(checkOC1);
        if (checkOC1){
        let gramsnumberOC = localStorage.getItem('GramsOC');
        gramsnumberOC = parseInt(gramsnumberOC);
        let pricetotalOC = localStorage.getItem('totalCostOC');
        pricetotalOC = parseInt(pricetotalOC);
        let totalAmountOC = pricetotalOC * gramsnumberOC;
        localStorage.setItem('totalAmountOC', totalAmountOC);}
}, 1000);

setInterval  (function checkOC(){
        let checkOC = localStorage.getItem('GramsOC')
        checkOC = parseInt(checkOC);
        if (checkOC){
                displaytotalpriceOC();
        }else{
                localStorage.removeItem("totalAmountOC");
        }
}, 1000);

function reloadOC(){
        location.reload();
}

setInterval (function resetOC(){
        let checkgramsOC = localStorage.getItem("GramsOC");
        checkgramsOC = parseInt(checkgramsOC);
        if(checkgramsOC < 1){
                localStorage.removeItem("GramsOC");
                localStorage.removeItem("totalAmountOC");
                localStorage.removeItem("totalCostOC");
                localStorage.removeItem("cartNumberOC");
        }

}, 1000);

onloadgramsOC ();
checkOC();
onloaddisplaytotalpriceOC ();
onclickOC();
onclickgramsOC();
resetOC();



