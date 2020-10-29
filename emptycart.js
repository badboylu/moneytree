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

setInterval (function emptycartNL(){
    let cartcheck = localStorage.getItem('cartNumberNL')
        if (cartcheck === null){
		document.getElementById("NLempty").style.display = "none";
	}else{
        document.getElementById("NLempty").style.display = "block";
    }
}, 1000);

setInterval (function emptycartPE(){
    let cartcheck = localStorage.getItem('cartNumberPE')
        if (cartcheck === null){
		document.getElementById("PEempty").style.display = "none";
	}else{
        document.getElementById("PEempty").style.display = "block";
    }
}, 1000);

setInterval (function emptycartCCES(){
    let cartcheck = localStorage.getItem('cartNumberCCES')
        if (cartcheck === null){
		document.getElementById("CCESempty").style.display = "none";
	}else{
        document.getElementById("CCESempty").style.display = "block";
    }
}, 1000);

setInterval (function emptycartMain(){
    let cart = localStorage.getItem('totalAmountNumber');
        if (cart === null){
		document.getElementById("Cartempty").style.display = "none";
                document.getElementById("Cartemptyimg").style.display = "block";
	}else{
                document.getElementById("Cartemptyimg").style.display = "none";
                document.getElementById("Cartempty").style.display = "block";
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

setInterval (function clearNL(){
    let cartcheck = localStorage.getItem('GramsNL')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberNL');
        localStorage.removeItem('GramsNL');
        localStorage.removeItem('totalCostNL');
        localStorage.removeItem('totalAmountNL');
	}
}, 1000);

setInterval (function clearPE(){
    let cartcheck = localStorage.getItem('GramsPE')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberPE');
        localStorage.removeItem('GramsPE');
        localStorage.removeItem('totalCostPE');
        localStorage.removeItem('totalAmountPE');
	}
}, 1000);

setInterval (function clearCCES(){
    let cartcheck = localStorage.getItem('BatchCCES')
        if (cartcheck = 0){
        localStorage.removeItem('cartNumberCCES');
        localStorage.removeItem('GramsCCES');
        localStorage.removeItem('totalCostCCES');
        localStorage.removeItem('totalAmountCCES');
	}
}, 1000);

emptycartDP();
emptycartOC();
emptycartCC();
emptycartBW();
emptycartPR();
emptycartNL();
emptycartPE();
emptycartCCES();
emptycartMain();
clearDP();
clearCC();
clearOC();
clearBW();
clearPR();
clearNL();
clearPE();
clearCCES();
