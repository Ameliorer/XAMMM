//Javascript folder to do actions on index_user.php

//Table who contains all the HTML elements of user's informations
let sessionUser = session;
let formModif = document.querySelector('.modifInformations');
let userInfos = Array();
let divInfos = document.querySelector('#user_infos');
let divReservations = document.querySelector('#user_reservations');

axios
   .get('../lib/read_data_user.php?id=' + sessionUser['id'] + '&select=' + true)
   .then((response) => {
      //Traitement of the informations of the user
      let userPassword = response.data[0]['password'];
      showInfosUser(response.data[0]);
      if (mdp == userPassword) {
         formModif.classList.add('active');
      }

      //Traitement of the reservations of the user
      showReservationsUser(response.data[1]);
   });

//Function to build a HTML response who contain the informations of the user
//data > JSON object
function showInfosUser(DATA) {
   let ul = document.createElement('ul');
   ul.className = 'infosList';

   let nom = document.createElement('li');
   nom.innerHTML = 'Votre nom : ' + '<span>' + DATA['lastName'] + '</span>';
   ul.appendChild(nom);
   userInfos.push(nom);

   let prenom = document.createElement('li');
   prenom.innerHTML = 'Votre prénom : ' + '<span>' + DATA['firstname'] + '</span>';
   ul.appendChild(prenom);
   userInfos.push(prenom);

   let mail = document.createElement('li');
   mail.innerHTML = 'Votre mail : ' + '<span>' + DATA['mail'] + '</span>';
   ul.appendChild(mail);
   userInfos.push(mail);

   let numTel = document.createElement('li');
   numTel.innerHTML =
      'Votre numéro de téléphone : ' + '<span>' + DATA['phoneNum'] + '</span>';
   ul.appendChild(numTel);
   userInfos.push(numTel);

   let height = document.createElement('li');
   height.innerHTML = 'Votre taille : ' + '<span>' + DATA['height'] + ' cm</span>';
   ul.appendChild(height);
   userInfos.push(height);

   let weight = document.createElement('li');
   weight.innerHTML = 'Votre poids : ' + '<span>' + DATA['weight'] + ' kg</span>';
   ul.appendChild(weight);
   userInfos.push(weight);

   let age = document.createElement('li');
   age.innerHTML = 'Votre age : ' + '<span>' + DATA['age'] + ' ans</span>';
   ul.appendChild(age);
   userInfos.push(age);

   divInfos.appendChild(ul);
}

function showReservationsUser(DATA) {
   let ul = document.createElement('ul');
   ul.className = 'reservationsList';

   for (reservation of DATA) {
      let info = document.createElement('p');
      console.log(products);
      console.log(reservation['productId'] - 1);
      let id = reservation['productId'];
      for (let i = 0; i < products.length; i++) {
         if (products[i]['id'] == id) {
            info.innerHTML =
               'Votre réservation pour le  <b>' +
               reservation['date'] +
               '</b>  associée au produit <b>' +
               products[i]['name'] +
               '</b> :';
            ul.appendChild(info);
            let tableReservation = document.createElement('table');
            tableReservation.className = 'reservation';

            //We create the first line to know what's what in the table
            let infoLine = document.createElement('tr');
            infoLine.className = 'infoLine';

            let price = document.createElement('td');
            price.innerText = 'Prix';
            infoLine.appendChild(price);

            let age = document.createElement('td');
            age.innerText = ' Age renseigné';
            infoLine.appendChild(age);

            let height = document.createElement('td');
            height.innerText = ' Taille renseignée';
            infoLine.appendChild(height);

            let weight = document.createElement('td');
            weight.innerText = ' Poids renseigné';
            infoLine.appendChild(weight);

            tableReservation.appendChild(infoLine);

            //We create the line who contain the information of the reservations
            let infoReservation = document.createElement('tr');
            infoReservation.className = 'infoReservation';

            let infoPrice = document.createElement('td');
            infoPrice.innerText = products[i]['price'] + ' €';
            infoReservation.appendChild(infoPrice);

            let infoAge = document.createElement('td');
            infoAge.innerText = reservation['userAge'] + ' an';
            infoReservation.appendChild(infoAge);

            let infoHeight = document.createElement('td');
            infoHeight.innerText = reservation['userHeight'] + ' cm';
            infoReservation.appendChild(infoHeight);

            let infoWeight = document.createElement('td');
            infoWeight.innerText = reservation['userWeight'] + ' kg';
            infoReservation.appendChild(infoWeight);

            tableReservation.appendChild(infoReservation);
            ul.appendChild(tableReservation);

            //Associate a button to delete the reservation
            let button = document.createElement('button');
            button.id = reservation['id'];
            button.innerText = 'Supprimer la réservation (IRREVERSIBLE)';
            button.addEventListener('click', (e) => {
               console.log('click');
               axios
                  .get('../lib/delete_reservation.php?id=' + e.target.id)
                  .then((reservation) => {
                     console.log(reservation.data);
                  });
            });
            ul.appendChild(button);
         }
      }
   }

   divReservations.appendChild(ul);
}
