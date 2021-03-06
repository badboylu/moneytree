const cartsBW = document.querySelectorAll('.BluntWrap');
const moreGramsBW = document.querySelectorAll('.moreGramsBluntWrap');
const lessGramsBW = document.querySelectorAll('.lessGramsBluntWrap');
var priceBW = 30;

cartsBW.forEach(BluntWrap =>{
    BluntWrap.addEventListener('click', () => {
                cartNumbersBW();
                totalCostBW(priceBW);
                addGramsNumbersBW();
                displaytotalpriceBW();
               

})
}
)


moreGramsBW.forEach(moreGramsBluntWrap =>{
        moreGramsBluntWrap.addEventListener('click', () => {
                
                totalCostBW(priceBW);
                addGramsNumbersBW();
})
}
)

lessGramsBW.forEach(lessGramsBluntWrap =>{
        lessGramsBluntWrap.addEventListener('click', () => {
                minusGramsNumbersBW();
                totalCostBW(priceBW);
                
                resetBW();
               
                

})
}
)


setInterval (function onclickBW(){
        if ("cartNumberBW" in localStorage){
		document.getElementById("BW").style.display = "none";
	}else{
		document.getElementById("BW").style.display = "block";
	}
}, 1000);


setInterval (function onclickgramsBW(){
        if ("cartNumberBW" in localStorage){
		document.getElementById("BWgrams").style.display = "block";
	}else{
		document.getElementById("BWgrams").style.display = "none";
	}
}, 1000);


function cartNumbersBW() {
        
        let productNumbersBW = localStorage.getItem('cartNumberBW'); 
               productNumbersBW = parseInt(productNumbersBW);
                localStorage.setItem('cartNumberBW', 1);
                
}

function totalCostBW(priceBW) {
        localStorage.setItem('totalCostBW', priceBW);
        var cartCostBW= localStorage.getItem('totalCostBW', priceBW);
        cartCostBW = parseInt(cartCostBW);
        if(cartCostBW) {
                localStorage.setItem('totalCostBW', cartCostBW);
        }else{
                localStorage.setItem('totalCostBW', parseInt(cartCostBW));
        }
        
       
}

setInterval (function onloadgramsBW (){
        let gramsNumberaddBW = localStorage.getItem('PacksBW'); 
        if(gramsNumberaddBW){
                document.querySelector('.gramsamountBW').textContent = gramsNumberaddBW;
        };  
}, 1000);

function addGramsNumbersBW() {
        let ifavailableBW = localStorage.getItem('PacksBW')
        ifavailableBW = parseInt(ifavailableBW);
               if(ifavailableBW) {
                localStorage.setItem('PacksBW',(ifavailableBW) + 1);
                let gramsNumberaddBW = localStorage.getItem('PacksBW'); 
                gramsNumberaddBW = parseInt(gramsNumberaddBW);
                document.querySelector('.gramsamountBW').textContent =parseInt(gramsNumberaddBW);
               }else{
                localStorage.setItem('PacksBW', 1 );       
                document.querySelector('.gramsamountBW').textContent = parseInt(gramsNumberaddBW);
               }
}




function minusGramsNumbersBW() {
        let gramsNumbersminusBW = localStorage.getItem('PacksBW'); 
        gramsNumbersminusBW = parseInt(gramsNumbersminusBW);
               if(gramsNumbersminusBW) {
                localStorage.setItem('PacksBW', gramsNumbersminusBW = (gramsNumbersminusBW - 1));
                document.querySelector('.gramsamountBW').textContent = parseInt(gramsNumbersminusBW) -1;
               }else{
                document.querySelector('.gramsamountBW').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalpriceBW (){
        let displayedtotalBW = localStorage.getItem('totalAmountBW');
        if(displayedtotalBW){
                document.querySelector('.totalcartBW').textContent = displayedtotalBW;
        }; 
}, 1000);

setInterval (function displaytotalpriceBW() {
        let checkBW1 = localStorage.getItem('PacksBW')
        checkBW1 = parseInt(checkBW1);
        if (checkBW1){
        let gramsnumberBW = localStorage.getItem('PacksBW');
        gramsnumberBW = parseInt(gramsnumberBW);
        let pricetotalBW = localStorage.getItem('totalCostBW');
        pricetotalBW = parseInt(pricetotalBW);
        let totalAmountBW = pricetotalBW * gramsnumberBW;
        localStorage.setItem('totalAmountBW', totalAmountBW);}
}, 1000);

setInterval  (function checkBW(){
        let checkBW = localStorage.getItem('PacksBW')
        checkBW = parseInt(checkBW);
        if (checkBW){
                displaytotalpriceBW();
        }else{
                localStorage.removeItem("totalAmountBW");
        }
}, 1000);

setInterval (function resetBW(){
        let checkgramsBW = localStorage.getItem("PacksBW");
        checkgramsBW = parseInt(checkgramsBW);
        if(checkgramsBW < 1){
                localStorage.removeItem("PacksBW");
                localStorage.removeItem("totalAmountBW");
                localStorage.removeItem("totalCostBW");
                localStorage.removeItem("cartNumberBW");
        }

}, 1000);

onloadgramsBW ();
checkBW();
onloaddisplaytotalpriceBW ();
onclickBW();
onclickgramsBW();
resetBW();



