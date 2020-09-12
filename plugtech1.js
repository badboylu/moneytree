const carts1 = document.querySelectorAll('.cannacaps');

let products1 = [
{
        name: 'Cannacaps',
        id: 'cannacaps',
        price: 240,
        Incart: 0
}
];
    
carts1.forEach(cannacaps =>{
        cannacaps.addEventListener('click', () => {
     cartNumbers1(products1);
})
}
)

function onloadCartNumbers1 (){
        let productNumbers1 = localStorage.getItem('cartNumbers');  
        
        if(productNumbers1){
                document.querySelector('.basel-cart-number').textContent = productNumbers1;
        } 
}

function cartNumbers1(products1) {
        console.log('The product is,', products1)
        let productNumbers1 = localStorage.getItem('cartNumbers');

        productNumbers1 = parseInt(productNumbers1);

        if (productNumbers1) {
                localStorage.setItem('cartNumbers', productNumbers1 + 1);
                document.querySelector('.basel-cart-number').textContent = parseInt(productNumbers1) +1;
        }else{
                localStorage.setItem('cartNumbers', 1);
                document.querySelector('.basel-cart-number').textContent = 1;
        }

       
}

onloadCartNumbers1 ();