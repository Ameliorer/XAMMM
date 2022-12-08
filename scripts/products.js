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
      let productPrice = create('span', div, product.price + ' euros');
      let achatSpan = create('span', div);
      let achatLink = create('a', achatSpan, "ajouter au panier");
      achatLink.setAttribute("href", "form_achat.php?name="+product.name);
      let ul = create('ul', div, null, 'product_info');

      let spanDateStart = create('span', ul, 'Commence le : ');
      let productDateStart = create(
         'li',
         ul,
         spanDateStart.innerText + product.dateStart,
      );

      let spanDateEnd = create('span', ul, 'Finit le : ');
      let productDateEnd = create('li', ul, product.dateEnd);

      let spanMinAge = create('span', ul, 'Age minimum : ');
      let productMinAge = create('li', ul, product.minAge + ' ans');

      let spanMaxAge = create('span', ul, 'Age maximum : ');
      let productMaxAge = create('li', ul, product.maxAge + ' ans');

      let spanMinWeight = create('span', ul, 'Poids minimum : ');
      let productMinWeight = create('li', ul, product.minWeight + ' kg');

      let spanMaxWeight = create('span', ul, 'Poids maximum : ');
      let productMaxWeight = create('li', ul, product.maxWeight + ' kg');

      let spanMinHeight = create('span', ul, 'Taille minimal : ');
      let productMinHeight = create('li', ul, product.minHeight + ' cm');

      let spanMaxHeight = create('span', ul, 'Taille maximal : ');
      let productMaxHeight = create('li', ul, product.maxHeight + ' cm');
   });
});
