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

let listh2 = document.querySelectorAll('.div_actions h2');
console.log(listh2);

for (h2 of listh2) {
   h2.addEventListener('click', function (e) {
      for (let i = 0; i < listh2.length; i++) {
         if (e.target.innerText == listh2[i].innerText) {
            divs_actions[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Blog.length; i++) {
         if (e.target.innerText == h3Blog[i].innerText) {
            forms_blog[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Opinion.length; i++) {
         if (e.target.innerText == h3Opinion[i].innerText) {
            forms_opinion[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Code.length; i++) {
         if (e.target.innerText == h3Code[i].innerText) {
            forms_code[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Discount.length; i++) {
         if (e.target.innerText == h3Discount[i].innerText) {
            forms_discount[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Image.length; i++) {
         if (e.target.innerText == h3Image[i].innerText) {
            forms_image[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Product.length; i++) {
         if (e.target.innerText == h3Product[i].innerText) {
            forms_product[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3Reservation.length; i++) {
         if (e.target.innerText == h3Reservation[i].innerText) {
            forms_reservation[i].classList.toggle('active');
         }
      }
   });
}
for (div of divs_actions) {
   div.addEventListener('click', function (e) {
      for (let i = 0; i < h3User.length; i++) {
         if (e.target.innerText == h3User[i].innerText) {
            forms_user[i].classList.toggle('active');
         }
      }
   });
}

//Show images
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
   axios.get('../lib/read_imgs.php').then((response) => {
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
