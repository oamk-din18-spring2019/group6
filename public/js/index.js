// Variables
 const products = document.querySelector('.items'),
       shoppingCartContent = document.querySelector('#insideCart'),
       buttonClearAll = document.querySelector('.clearButton');





//Listeners
loadEventListeners();

function loadEventListeners()
{
     //When a new product is bought,it means adding to cart
     products.addEventListener('click', buyProduct);   

     //Hwen the remove button is clicked
     shoppingCartContent.addEventListener('click',removeProduct);

     //Clear All Button
     buttonClearAll.addEventListener('click',clearCart);
}







// Funtions
function buyProduct(e)
{    e.preventDefault();
     //console.log(e.target);

     //go to button 'Add To Cart'
     if(e.target.classList.contains('cartButton'))
     {
          //read the values of the product you clicked
          const product = e.target.parentElement.parentElement;
          console.log(product);
          //read the values
          getProductInfo(product);
     }
}

//Read the HTML information of the clicked product
function getProductInfo(product)
{
     //Create an Object with product data
     const productInfo = 
     {
          image : product.querySelector('.image img').src,
          name : product.querySelector('.name').textContent,
          description : product.querySelector('.text').textContent,
          price : product.querySelector('.price').textContent,
          // id : product.querySelector('.button button').getAttribute('data-id')
     }
     console.log(productInfo);
     //Insert into the shopping cart
     addIntoCart(productInfo);
}

function addIntoCart(product)
{
     //create a <tr>
     const row = document.createElement('tr');

     //Build the template of the shopping cart icon
     row.innerHTML = 
     `
          <tr>
               <td style="padding-top: 8px;"><img src="${product.image}" width="100px"></td>
               <td>${product.name}</td>
               <td style="padding: 8px 8px;">${product.price}</td>

               <td style="padding: 8px 8px;">
                    <a href="#" class="remove" data-id="${product.id}">X</a>
               </td>
          </tr>
     `;
     //Add into the cart
     shoppingCartContent.appendChild(row);
}

//remove product
function removeProduct(e)
{    
     if(e.target.classList.contains('remove'))
     {
          e.target.parentElement.parentElement.remove();
     }
}

//Clear All button
function clearCart()
{
     //shoppingCartContent.innerHTML = ''; 

     while(shoppingCartContent.firstChild)
     {
          shoppingCartContent.removeChild(shoppingCartContent.firstChild);
     }
}