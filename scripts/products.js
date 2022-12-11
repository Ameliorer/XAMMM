//Useful fonction to create element
function create(tagName, container, text = null, class_ = null, id = null) {
   let element = document.createElement(tagName);
   container.appendChild(element);
   if (text) {
      element.appendChild(document.createTextNode(text));
   }
   if (class_) {
      element.classList.add(class_);
   }
   if (id) {
      element.id = id;
   }
   return element;
}

//--------------- INFO POUR LE CSS ---------------
// Les spans sont fait pour apporter un leger style plus tard.
//------------------------------------------------
//Retrieve of the balise for where we'll show the products

let main = document.querySelector('#aff_products');
console.log(main);

axios.get('../lib/products.php').then((response) => {
   console.log(response.data);

   //Creation of HTML balise to show a product to the client
   response.data.forEach((product) => {
      let div = create('div', main, null, 'product');

      let productName = create('h3', div, product.name);
      let productPrice = create('span', div, product.price + ' euros', "price");
      ;

      let titreul = create('span', div, "Conditions : ");
      ;
      let ul = create('ul', div, null, 'product_info');

      let spanDateStart = create('span', ul);
      let productDateStart = create(
         'li',
         ul,
         'Commence le : ' + product.dateStart,
      );

      let productDateEnd = create('li', ul, 'Finit le : ' + product.dateEnd);

      let productMinAge = create('li', ul, 'Age minimum : ' + product.minAge + ' ans');

      let productMaxAge = create('li', ul, 'Age maximum : ' + product.maxAge + ' ans');

      let productMinWeight = create('li', ul, 'Poids minimum : ' + product.minWeight + ' kg');

      let productMaxWeight = create('li', ul, 'Poids maximum : ' + product.maxWeight + ' kg');

      let productMinHeight = create('li', ul, 'Taille minimal : ' + product.minHeight + ' cm');

      let productMaxHeight = create('li', ul, 'Taille maximal : '+ product.maxHeight + ' cm');

      let achatSpan = create('span', div, null, "add_to_the_cart");
      let achatLink = create('a', achatSpan, "ajouter au panier");
      achatLink.setAttribute("href", "form_achat.php?name="+product.name)
   });
});
