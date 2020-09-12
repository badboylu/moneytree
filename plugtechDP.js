const carts = document.querySelectorAll('.DurbanPoison');
const moreGrams = document.querySelectorAll('.moreGramsDurbanPoison');
const lessGrams = document.querySelectorAll('.lessGramsDurbanPoison');
var price = 70;

carts.forEach(DurbanPoison =>{
        DurbanPoison.addEventListener('click', () => {
                cartNumbers();
                totalCost(price);
                addGramsNumbers();
                displaytotalprice();
               

})
}
)


moreGrams.forEach(moreGramsDurbanPoison =>{
        moreGramsDurbanPoison.addEventListener('click', () => {
                
                totalCost(price);
                addGramsNumbers();
})
}
)

lessGrams.forEach(lessGramsDurbanPoison =>{
        lessGramsDurbanPoison.addEventListener('click', () => {
                minusGramsNumbers();
                totalCost(price);
                
                reset();
               
                

})
}
)


setInterval (function onclick(){
        if ("cartNumberDP" in localStorage){
		document.getElementById("DP").style.display = "none";
	}else{
		document.getElementById("DP").style.display = "block";
	}
}, 1000);


setInterval (function onclickgrams(){
        if ("cartNumberDP" in localStorage){
		document.getElementById("DPgrams").style.display = "block";
	}else{
		document.getElementById("DPgrams").style.display = "none";
	}
}, 1000);


function cartNumbers() {
        
        let productNumbers = localStorage.getItem('cartNumberDP'); 
               productNumbers = parseInt(productNumbers);
                localStorage.setItem('cartNumberDP', 1);
                
}

function totalCost(price) {
        localStorage.setItem('totalCostDP', price);
        var cartCost= localStorage.getItem('totalCostDP', price);
        cartCost = parseInt(cartCost);
        if(cartCost) {
                localStorage.setItem('totalCostDP', cartCost);
        }else{
                localStorage.setItem('totalCostDP', parseInt(cartCost));
        }
        
       
}

setInterval (function onloadgrams (){
        let gramsNumberadd = localStorage.getItem('GramsDP'); 
        if(gramsNumberadd){
                document.querySelector('.gramsamountDP').textContent = gramsNumberadd;
        };  
}, 1000);

function addGramsNumbers() {
        let ifavailable = localStorage.getItem('GramsDP')
        ifavailable = parseInt(ifavailable);
               if(ifavailable) {
                localStorage.setItem('GramsDP',(ifavailable) + 5);
                let gramsNumberadd = localStorage.getItem('GramsDP'); 
                gramsNumberadd = parseInt(gramsNumberadd);
                document.querySelector('.gramsamountDP').textContent =parseInt(gramsNumberadd);
               }else{
                localStorage.setItem('GramsDP', 5 );       
                document.querySelector('.gramsamountDP').textContent = parseInt(gramsNumberadd);
               }
}




function minusGramsNumbers() {
        let gramsNumbersminus = localStorage.getItem('GramsDP'); 
        gramsNumbersminus = parseInt(gramsNumbersminus);
               if(gramsNumbersminus) {
                localStorage.setItem('GramsDP', gramsNumbersminus = (gramsNumbersminus - 5));
                document.querySelector('.gramsamountDP').textContent = parseInt(gramsNumbersminus) -5;
               }else{
                document.querySelector('.gramsamountDP').textContent = 0;   
}
}

setInterval (function onloaddisplaytotalprice (){
        let displayedtotal = localStorage.getItem('totalAmountDP');
        if(displayedtotal){
                document.querySelector('.totalcart').textContent = displayedtotal;
        }; 
}, 1000);

setInterval (function displaytotalprice() {
        let checkDP1 = localStorage.getItem('GramsDP')
        checkDP1 = parseInt(checkDP1);
        if (checkDP1){
        let gramsnumber = localStorage.getItem('GramsDP');
        gramsnumber = parseInt(gramsnumber);
        let pricetotal = localStorage.getItem('totalCostDP');
        pricetotal = parseInt(pricetotal);
        let totalAmount = pricetotal * gramsnumber;
        localStorage.setItem('totalAmountDP', totalAmount);}
}, 1000);

setInterval  (function check(){
        let checkDP = localStorage.getItem('GramsDP')
        checkDP = parseInt(checkDP);
        if (checkDP){
                displaytotalprice();
        }else{
                localStorage.removeItem("totalAmountDP");
        }
}, 1000);

function reload(){
        location.reload();
}

setInterval (function reset(){
        let checkgrams = localStorage.getItem("GramsDP");
        checkgrams = parseInt(checkgrams);
        if(checkgrams < 1){
                localStorage.removeItem("GramsDP");
                localStorage.removeItem("totalAmountDP");
                localStorage.removeItem("totalCostDP");
                localStorage.removeItem("cartNumberDP");
        }

}, 1000);

onloadgrams ();
check();
onloaddisplaytotalprice ();
onclick();
onclickgrams();
reset();



