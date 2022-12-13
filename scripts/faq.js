//First let's retrieve HTML divisions
//All the questions and responses will be place there
let FAQContent = document.querySelector('#FAQContent');

//Now let's retrieve the DATAs
axios.get('../lib/read_data.php').then((response) => {
   let DATA = response.data;
   let lengthDATA = Object.keys(response.data).length;
   for (let i = 1; i < lengthDATA + 1; i++) {
      aff_question_response(DATA, i);
   }

   //Add listener to show the answer of the question when the mouse is on the question
   let questions = document.querySelectorAll(".question"); //All the questions
   //iterate for each questions
   for (let question of questions){
      question.addEventListener('click', e=>{
         question.classList.toggle("question")
         question.classList.toggle("questionOpen");
      } );
   }
});




function aff_question_response(DATA, id) {
   /* Create a html div with the question of the faq and the response linked
      inputs : DATA > JSON table 
             : id > INTEGER
      output : none */

   //Creation of a division to place the question and the response
   let div = document.createElement('div');
   //Add a class to practive CSS on the element
   div.classList.add('question');

   //Creation of the title, adding its text and append it to the question
   let title = document.createElement('h3');
   title.classList.add('title');
   title.innerText = recupTitle(DATA, id);
   div.appendChild(title);

   //Creation of the response, adding its text and append it to the question
   let response = document.createElement('p');
   response.classList.add('response');
   response.innerText = recupResponse(DATA, id);
   div.appendChild(response);

   //Append the question in the FAQ
   FAQContent.appendChild(div);
}

function recupTitle(DATA, id) {
   /* Return the title of a JSON table with the format question/response 
      inputs : DATA > JSON table
             id > INTERGER
      output : string
   */

   let title = DATA[id].title;

   return title;
}

function recupResponse(DATA, id) {
   /* Return the response of a JSON table with the format question/response  
      inputs : DATA > JSON table
             : id > INTEGER
      output : string
   */

   let response = DATA[id].response.text;

   return response;
}





