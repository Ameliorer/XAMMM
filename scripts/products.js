//Fonction de creation bien utile
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
//Recuperation la balise ou seront les produits :

let main = document.querySelector('#aff_products');
console.log(main);

axios.get('../lib/products.php').then((response) => {
   console.log(response.data);

   //Creation of HTML balise to show a product to the client
   response.data.forEach((product) => {
      let div = create('div', main);
      let productName = create('h3', div, product.name);
      let productPrice = create('span', div, product.price + ' euros');
      let ul = create('ul', div, null, 'product_info');

      let spanDateStart = create('span', ul);
      let productDateStart = create('li', ul, 'Commence le : ' + product.dateStart);

      let spanDateEnd = create('span', ul);
      let productDateEnd = create('li', ul, 'Finit le : ' + product.dateEnd);

      let spanMinAge = create('span', ul);
      let productMinAge = create('li', ul, 'Age minimum : ' + product.minAge + ' ans');

      let spanMaxAge = create('span', ul);
      let productMaxAge = create('li', ul, 'Age maximum : ' + product.maxAge + ' ans');

      let spanMinWeight = create('span', ul);
      let productMinWeight = create(
         'li',
         ul,
         'Poids minimum : ' + product.minWeight + ' kg',
      );

      let spanMaxWeight = create('span', ul);
      let productMaxWeight = create(
         'li',
         ul,
         'Poids maximum : ' + product.maxWeight + ' kg',
      );

      let spanMinHeight = create('span', ul);
      let productMinHeight = create(
         'li',
         ul,
         'Taille minimal : ' + product.minHeight + ' cm',
      );

      let spanMaxHeight = create('span', ul);
      let productMaxHeight = create(
         'li',
         ul,
         'Taille maximal : ' + product.maxHeight + ' cm',
      );
   });
});
