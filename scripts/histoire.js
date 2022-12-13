// Gather all the divisions 
let divisions = document.querySelectorAll(".division"); 

let i = 0; 
//iterate for each divisions

for (let division of divisions){
  let titre = division.querySelector("h2");
  titre.classList.add("reveal-1");

  let image = division.querySelector("img");
  let contenu = division.querySelector(".division_contenu");
  
  contenu.classList.add("reveal-3");

  contenu.querySelector("p").classList.add("reveal-6");


  if (i%2 == 0){
      image.style.order= 1;
  }
  i=i+1;
 
}


const ratio= .3; //ratio of the visible part of the element 
const options = {
  root: null, //detect if the element is visible on the screen
  rootMargin: '0px', //tell if it need a marge to be visible
  threshold: ratio //How much of the element should be visible to detect the intersection
}

const handleIntersect = function (entries, observer) {
  entries.forEach( function (entry) {
    if (entry.intersectionRatio > ratio){ // we check if we see enought the element 
      entry.target.classList.add('reveal-visible');
      observer.unobserve(entry.target); //we stop observing when we had it once 
    }
  })
}


const observer = new IntersectionObserver(handleIntersect, options);

let target = document.querySelector('.reveal');

document.querySelectorAll('[class*="reveal-"]').forEach(function(r){
  observer.observe(r);
})