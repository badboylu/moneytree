const carts = document.querySelectorAll('.DurbanPoison');
var price = 70;
const productName = 'Durban Poison (Indoor)';

carts.forEach(DurbanPoison =>{
        DurbanPoison.addEventListener('click', () => {
                cartNumbers();
                totalCost(price);
                gramsAdded(incart);
})
}
)


function onloadCartNumbers (){
        let productNumbers = localStorage.getItem('cartNumbers');
        if(productNumbers){
                document.querySelector('.basel-cart-number').textContent = productNumbers;
        };  
}
function cartNumbers() {
        
        let productNumbers = localStorage.getItem('cartNumbers'); 
               productNumbers = parseInt(productNumbers);
               if(productNumbers) {
                localStorage.setItem('cartNumbers', productNumbers + 1);
                document.querySelector('.basel-cart-number').textContent = parseInt(productNumbers) +1;
               }else{
                localStorage.setItem('cartNumbers', 1);
                document.querySelector('.basel-cart-number').textContent = 1;
               }
                
}

function totalCost(price) {
        console.log('The product price is', price);
        localStorage.setItem('totalCost', price);
        var cartCost= localStorage.getItem('totalCost', price);
        console.log('My cost is',cartCost);
        cartCost = parseInt(cartCost);
        console.log(typeof cartCost);
        if(cartCost) {
                localStorage.setItem('totalCost', cartCost);
        }else{
                localStorage.setItem('totalCost', parseInt(cartCost));
        }
        
       
}



onloadCartNumbers ();