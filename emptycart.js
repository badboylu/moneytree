setInterval (function emptycartDP(){
    let cartcheck = localStorage.getItem('cartNumberDP')
        if (cartcheck === null){
		document.getElementById("DPempty").style.display = "none";
	}else{
        document.getElementById("DPempty").style.display = "block";
    }
},1000);

setInterval (function emptycartCC(){
    let cartcheck = localStorage.getItem('cartNumberCC')
        if (cartcheck === null){
		document.getElementById("CCempty").style.display = "none";
	}else{
        document.getElementById("CCempty").style.display = "block";
    }
}, 1000);

setInterval (function emptycartOC(){
    let cartcheck = localStorage.getItem('cartNumberOC')
        if (cartcheck === null){
		document.getElementById("OCempty").style.display = "none";
	}else{
        document.getElementById("OCempty").style.display = "block";
    }
}, 1000);

setInterval (function emptycartBW(){
    let cartcheck = localStorage.getItem('cartNumberBW')
        if (cartcheck === null){
		document.getElementById("BWempty").style.display = "none";
	}else{
        document.getElementById("BWempty").style.display = "block";
    }
}, 1000);

setInterval (function emptycartPR(){
    let cartcheck = localStorage.getItem('cartNumberPR')
        if (cartcheck === null){
		document.getElementById("PRempty").style.display = "none";
	}else{
        document.getElementById("PRempty").style.display = "block";
    }
}, 1000);

setInterval (function clearDP(){
    let cartcheck = localStorage.getItem('GramsDP');
    totalCart = parseInt(totalCart);
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberDP');
        localStorage.removeItem('GramsDP');
        localStorage.removeItem('totalCostDP');
        localStorage.removeItem('totalAmountDP');
	}
},1000);

setInterval (function clearCC(){
    let cartcheck = localStorage.getItem('BatchCC')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberCC');
        localStorage.removeItem('BatchCC');
        localStorage.removeItem('totalCostCC');
        localStorage.removeItem('totalAmountCC');
	}
}, 1000);

setInterval (function clearOC(){
    let cartcheck = localStorage.getItem('GramsOC')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberOC');
        localStorage.removeItem('GramsOC');
        localStorage.removeItem('totalCostOC');
        localStorage.removeItem('totalAmountOC');
	}
}, 1000);

setInterval (function clearPR(){
    let cartcheck = localStorage.getItem('GramsPR')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberPR');
        localStorage.removeItem('GramsPR');
        localStorage.removeItem('totalCostPR');
        localStorage.removeItem('totalAmountPR');
	}
}, 1000);

setInterval (function clearBW(){
    let cartcheck = localStorage.getItem('PacksBW')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberBW');
        localStorage.removeItem('PacksBW');
        localStorage.removeItem('totalCostBW');
        localStorage.removeItem('totalAmountBW');
	}
}, 1000);

emptycartDP();
emptycartOC();
emptycartCC();
emptycartBW();
emptycartPR();
clearDP();
clearCC();
clearOC();
clearBW();
clearPR();
