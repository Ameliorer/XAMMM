let divs_actions = document.querySelectorAll('.content');

//Retrieve all the form of the page, each variable for each division
let forms_blog = document.querySelectorAll('#content-blog_actions .form');
let forms_opinion = document.querySelectorAll('#content-opinion_actions .form');
let forms_code = document.querySelectorAll('#content-codes_actions .form');
let forms_discount = document.querySelectorAll('#content-discounts_actions .form');
let forms_image = document.querySelectorAll('#content-images_actions .form');
let forms_product = document.querySelectorAll('#content-products_actions .form');
let forms_reservation = document.querySelectorAll('#content-reservations_actions .form');
let forms_user = document.querySelectorAll('#content-user_actions .form');

//Retrieve all the h3 of the division
let h3Blog = document.querySelectorAll('#content-blog_actions h3');
let h3Opinion = document.querySelectorAll('#content-opinion_actions h3');
let h3Code = document.querySelectorAll('#content-codes_actions h3');
let h3Discount = document.querySelectorAll('#content-discounts_actions h3');
let h3Image = document.querySelectorAll('#content-images_actions h3');
let h3Product = document.querySelectorAll('#content-products_actions h3');
let h3Reservation = document.querySelectorAll('#content-reservations_actions h3');
let h3User = document.querySelectorAll('#content-user_actions h3');

let tabForms = [
   forms_blog,
   forms_opinion,
   forms_code,
   forms_discount,
   forms_image,
   forms_product,
   forms_reservation,
   forms_user,
];
let tabH3 = [
   h3Blog,
   h3Opinion,
   h3Code,
   h3Discount,
   h3Image,
   h3Product,
   h3Reservation,
   h3User,
];

let listh2 = document.querySelectorAll('.div_actions h2');

for (h2 of listh2) {
   h2.addEventListener('click', function (e) {
      for (let i = 0; i < listh2.length; i++) {
         if (e.target.innerText == listh2[i].innerText) {
            divs_actions[i].classList.toggle('active');
            form_list = tabForms[i];
            linkedH3_list = tabH3[i];
            browseDiv(divs_actions[i], form_list, linkedH3_list);
         }
      }
   });
}

function browseDiv(div, form_list, linkedH3_list) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < linkedH3_list.length; i++) {
         if (e.target.innerText === linkedH3_list[i].innerText) {
            form_list[i].classList.toggle('active');
         }
      }
   });
}

//---------- Show all images ----------
let divImages = document.querySelector('.aff_image');
let btnShowAllImages = document.querySelector('#imagesSubmit5');

btnShowAllImages.onclick = function () {
   if (btnShowAllImages.innerText == 'Afficher') {
      divImages.classList.toggle('active');
      btnShowAllImages.innerText = 'Cacher';
      aff_imgs();
   } else {
      btnShowAllImages.innerText = 'Afficher';
      divImages.innerHTML = '';
      divImages.classList.toggle('active');
   }
};

//Function to retrieve all the images from the database.
//Images will be show in a table.
function aff_imgs() {
   //Retrieve the image
   axios.get('../lib/read_imgs.php?itsForBlog=0').then((response) => {
      let DATA = response.data;

      //We create the table
      let tr = document.createElement('tr');
      //For each image of the database...
      for (image of DATA) {
         //... we add a line to place a image in
         let td = document.createElement('td');
         td.className = 'image';
         tr.appendChild(td);

         let img = document.createElement('img');
         img.src = '../images/' + image['name'];
         td.appendChild(img);

         let span = document.createElement('span');
         span.innerText = 'Blog associé : ' + image['idblog'];
         td.appendChild(span);
      }

      divImages.appendChild(tr);
   });
}

//---------- Show images of a blog ----------
let divImagesBlog = document.querySelector('.aff_imageBlog');
let btnShowImagesBlog = document.querySelector('#imagesSubmit4');

btnShowImagesBlog.onclick = function () {
   if (btnShowImagesBlog.innerText == 'Afficher') {
      divImagesBlog.classList.toggle('active');
      btnShowImagesBlog.innerText = 'Cacher';
      let idBlogInput = document.querySelector('#idBlog');
      let idBlog = idBlogInput.value;
      if (idBlog != '') {
         aff_imgs_blog(idBlog);
      } else {
         alert("Aucun blog n'a été indiqué !");
      }
   } else {
      btnShowImagesBlog.innerText = 'Afficher';
      divImagesBlog.innerHTML = '';
      divImagesBlog.classList.toggle('active');
   }
};

//Function to retrieve all the images of a blog from the database
function aff_imgs_blog(idBlog) {
   //Retrieve the images link with the blog
   axios.get('../lib/read_imgs.php?itsForBlog=1&idBlog=' + idBlog).then((response) => {
      let DATA = response.data;

      let images = DATA;
      let cpt = 1;
      tabImages = {};

      //We create the table
      let tr = document.createElement('tr');
      //For each image of the database...
      for (image of DATA) {
         //... we add a line to place a image in
         let td = document.createElement('td');
         td.className = 'image';
         tr.appendChild(td);

         let img = document.createElement('img');
         img.src = '../images/' + image['name'];
         td.appendChild(img);

         let span = document.createElement('span');
         span.innerText = 'Blog associé : ' + image['idblog'];
         td.appendChild(span);

         let btnSupp = document.createElement('button');
         btnSupp.innerText = "Supprimer l'image ? (IRREVERSIBLE) " + cpt;
         btnSupp.addEventListener('click', function (e) {
            for (let i = 1; i < cpt + 1; i++) {
               if (btnSupp.innerText.includes(i.toString())) {
                  let imageName = tabImages[i];
                  axios
                     .get('../lib/delete_imgs.php?imageName=' + imageName)
                     .then(function (response) {
                        alert('Image supprimée');
                     });
               }
            }
         });
         td.appendChild(btnSupp);

         tabImages[cpt] = image['name'];
         cpt++;
      }

      divImagesBlog.appendChild(tr);
   });
}
