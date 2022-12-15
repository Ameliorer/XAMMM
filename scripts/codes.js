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

//The variable where we'll show all the codes
let main = document.querySelector('#main_codes');
console.log(main);

axios.get('../lib/codes.php').then((response) => {
   console.log(response.data);

   //Creation of HTML balise to show a codes
   response.data.forEach((code) => {
      let div = create('div', main, null, 'code');
      let codeName = create('h3', div, code.code);

      let spanIdProduct = create('span', div, 'Le code est pour le produit : ');
      let codeIdProduct = create('li', div, code.productId);

      let spanDateStart = create('span', div, 'Le code démarre le : ');
      let codeDateStart = create('li', div, code.dateStart);

      let spanDateEnd = create('span', div, 'Le code finit le : ');
      let codeDateEnd = create('li', div, code.dateEnd);
   });
});
