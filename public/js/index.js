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

     //print values from LocalStorage
     document.addEventListener('DOMContentLoaded',getFromStorage);
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
          //go to tag <div> has className is show_0
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
          id : product.querySelector('.cartButton').getAttribute('data-id')
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
                    <a class="remove" data-id="${product.id}">X</a>
               </td>
          </tr>
     `;
     //Add into the cart
     shoppingCartContent.appendChild(row);

     // Add course into LocalStorage
     saveIntoStorage(product);
}

//Add product into shopping cart
function saveIntoStorage(product)
{
     let products = getProductsFromStorage();
     //add products into array
     products.push(product);

     //since storage only save string=> convert JSON into a string
     localStorage.setItem('products',JSON.stringify(products));
}

function getProductsFromStorage()
{
     //get the contents from LocalStorage
     let products;
     //if something exist on the LocalStorage, then we get the value or empty
     if(localStorage.getItem('products') === null)
     {
          products = [];
     }
     else
     {
          products = JSON.parse(localStorage.getItem('products'));
     }
     return products;
}
//remove product
function removeProduct(e)
{    
     let product,productID;
     //remove from DOM
     if(e.target.classList.contains('remove'))
     {
          e.target.parentElement.parentElement.remove();
          product = e.target.parentElement.parentElement;
          productID = product.querySelector('a').getAttribute('data-id');
     }
     //remove from localStorage
     console.log(productID);
     removeProductFromLocal(productID);
}

//Remove from LocalStorage
function removeProductFromLocal(id)
{
     let productsLS = getProductsFromStorage();

     //loop to find the index for removing
     productsLS.forEach(function(productLS,index)
     {    
          if(productLS.id === id)
          {
               productsLS.splice(index,1);
          }
     });

     //Add the rest of the array
     localStorage.setItem('products',JSON.stringify(productsLS));
}

//Clear All button
function clearCart()
{
     //shoppingCartContent.innerHTML = ''; 

     while(shoppingCartContent.firstChild)
     {
          shoppingCartContent.removeChild(shoppingCartContent.firstChild);
     }

     //Clear from LocalStorage
     clearLocalStorage();
}
//Clears the whole local storage
function clearLocalStorage()
{
     localStorage.clear();
} 

//print value from LocalStorage
function getFromStorage()
{
     let productsLS = getProductsFromStorage();

     //product's loop to print into cart
     productsLS.forEach(function(product)
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
                         <a class="remove" data-id="${product.id}">X</a>
                    </td>
               </tr>
          `;
          //Add into the cart
          shoppingCartContent.appendChild(row);
     });
}