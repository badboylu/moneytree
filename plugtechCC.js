const cartsCC = document.querySelectorAll('.cannacaps');
const moreGramsCC = document.querySelectorAll('.moreGramsCannacaps');
const lessGramsCC = document.querySelectorAll('.lessGramsCannacaps');
var priceCC = 240;



cartsCC.forEach(cannacaps =>{
        cannacaps.addEventListener('click', () => {
                cartNumbersCC();
                totalCostCC(priceCC);  
                addGramsNumbersCC();
                displaytotalpriceCC();

})
}
)


moreGramsCC.forEach(moreGramsCannacaps =>{
        moreGramsCannacaps.addEventListener('click', () => {
                reloadCC();
                totalCostCC(priceCC);
                addGramsNumbersCC();
})
}
)

lessGramsCC.forEach(lessGramsCannacaps =>{
        lessGramsCannacaps.addEventListener('click', () => {
                minusGramsNumbersCC();
                totalCostCC(priceCC);
                reloadCC();
                resetCC();
               
                

})
}
)


setInterval( function onclickCC(){
        if ("BatchCC" in localStorage){
		document.getElementById("CC").style.display = "none";
	}else{
		document.getElementById("CC").style.display = "block";
	}
},1000)

setInterval(function onclickgramsCC(){
        if ("BatchCC" in localStorage){
		document.getElementById("CCgrams").style.display = "block";
	}else{
		document.getElementById("CCgrams").style.display = "none";
	}
},1000)


function cartNumbersCC() {
        
        let productNumbersCC = localStorage.getItem('cartNumberCC'); 
               productNumbersCC = parseInt(productNumbersCC);
               if(productNumbersCC) {
                localStorage.setItem('cartNumberCC', productNumbersCC + 1);
               }else{
                localStorage.setItem('cartNumberCC', 1);
               }
                
}

function totalCostCC(priceCC) {
        localStorage.setItem('totalCostCC', priceCC);
        var cartCostCC= localStorage.getItem('totalCostCC', priceCC);
        cartCostCC = parseInt(cartCostCC);
        if(cartCostCC) {
                localStorage.setItem('totalCostCC', cartCostCC);
        }else{
                localStorage.setItem('totalCostCC', parseInt(cartCostCC));
        }
        
       
}

setInterval(function onloadgramsCC (){
        let gramsNumberaddCC = localStorage.getItem('BatchCC'); 
        if(gramsNumberaddCC){
                document.querySelector('.gramsamountCC').textContent = gramsNumberaddCC;
        };  
},1000)

function addGramsNumbersCC() {
        let ifavailableCC = localStorage.getItem('BatchCC')
        ifavailableCC = parseInt(ifavailableCC);
               if(ifavailableCC) {
                localStorage.setItem('BatchCC',(ifavailableCC) + 1);
                let gramsNumberaddCC = localStorage.getItem('BatchCC'); 
                gramsNumberaddCC = parseInt(gramsNumberaddCC);
                document.querySelector('.gramsamountCC').textContent =parseInt(gramsNumberaddCC);
               }else{
                localStorage.setItem('BatchCC', 1 );       
                document.querySelector('.gramsamountCC').textContent = parseInt(gramsNumberaddCC);
               }
}


function minusGramsNumbersCC() {
        let gramsNumbersminusCC = localStorage.getItem('BatchCC'); 
        gramsNumbersminusCC = parseInt(gramsNumbersminusCC);
               if(gramsNumbersminusCC) {
                localStorage.setItem('BatchCC', gramsNumbersminusCC = (gramsNumbersminusCC - 1));
                document.querySelector('.gramsamountCC').textContent = parseInt(gramsNumbersminusCC) -1;
               }else{
                document.querySelector('.gramsamountCC').textContent = 0;   
}
}
setInterval(function onloaddisplaytotalpriceCC (){
        let displayedtotalCC = localStorage.getItem('totalAmountCC');
        if(displayedtotalCC){
                document.querySelector('.totalcartCC').textContent = displayedtotalCC;
        }; 
},1000)

setInterval(function displaytotalpriceCC() {
        let checkCC1 = localStorage.getItem('BatchCC')
        checkCC1 = parseInt(checkCC1);
        if (checkCC1){
        let gramsnumberCC = localStorage.getItem('BatchCC');
        gramsnumberCC = parseInt(gramsnumberCC);
        let pricetotalCC = localStorage.getItem('totalCostCC');
        pricetotalCC = parseInt(pricetotalCC);
        let totalAmountCC1 = pricetotalCC * gramsnumberCC;
        localStorage.setItem('totalAmountCC', totalAmountCC1);} 
},1000)

setInterval(function checkCC(){
        if (localStorage.getItem('BatchCC')){
                displaytotalpriceCC();
        }
},1000)

function reloadCC(){
        location.reload();
}

setInterval(function resetCC(){
        let checkgramsCC = localStorage.getItem("BatchCC");
        checkgramsCC = parseInt(checkgramsCC);
        if(checkgramsCC < 1){
                localStorage.removeItem("BatchCC");
                localStorage.removeItem("totalAmountCC");
                localStorage.removeItem("totalCostCC");
                localStorage.removeItem("cartNumberCC");
        }

},1000)

onloadgramsCC ();
checkCC();
onclickCC();
onloaddisplaytotalpriceCC ();
onclickgramsCC();
resetCC();
