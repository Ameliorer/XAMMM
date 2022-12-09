let main = document.querySelector("main");
let avis = document.querySelector(".carousel");

function create(tagName, container, text=null, class_=null, id=null) {
    let element = document.createElement(tagName);
    container.appendChild(element);
    if (text){
        element.appendChild(document.createTextNode(text));
    }
    if (class_){
        element.classList.add(class_);
    }
    if (id){
        element.id = id;
    }
    return element
}

axios.get("lib/opinion.php?opinionAction=select_5star").then(Response => {
    Response.data.forEach(post => {
        let div = create("div", avis, null, "carousel-item");
        let grade = create("span", div, null, "grade");

axios.get("lib/getName.php?iduser="+post.iduser).then(Response => {
    Response.data.forEach(post1 => {
        let user = create("span", div, null, "user");
        let user1 = create("h4", user, "- "+ post1.firstname + ", " + post1.age + " ans");
    });
});
        let content = create("span", div, null, "textAvis");
        let textAvis = create("p", content, post.text.slice(0,200));
        if (post.text.length > 200){
            textAvis.innerText += " [...]";
        }
        if (post.grade == 5 ) {
            grade.innerText = "⭐⭐⭐⭐⭐";
        }
        else if (post.grade == 4 ) {
            grade.innerText = "⭐⭐⭐⭐";
        }
        else if (post.grade == 3 ) {
            grade.innerText = "⭐⭐⭐";
        }
        else if (post.grade == 2 ) {
            grade.innerText = "⭐⭐";
        }
        else {grade.innerText = "⭐";}
    });
});

window.onload = function(){
    var slides = document.getElementsByClassName('carousel-item'),
        addActive = function(slide) {slide.classList.add('active')},
        addUnactive = function(slide) {slide.classList.add('unactive')},
        removeActive = function(slide) {slide.classList.remove('active')},
        removeUnactive = function(slide) {slide.classList.remove('unactive')};
    addActive(slides[0]);

    setInterval(function (){
        for (var i = 0; i < slides.length; i++){
            if (i == 0) {
                removeUnactive(slides[slides.length-1]);
            }
            else{
                removeUnactive(slides[i - 1]);
            }

            if (i + 1 == slides.length) {
                addActive(slides[0]);
                slides[0].style.zIndex = 100;
                setTimeout(removeActive, 10, slides[i]); //Doesn't be worked in IE-9
                setTimeout(addUnactive, 10, slides[i]);
                break;
            }
            if (slides[i].classList.contains('active')) {
                slides[i].removeAttribute('style');
                setTimeout(removeActive, 10, slides[i]); //Doesn't be worked in IE-9
                setTimeout(addUnactive, 10, slides[i]); //Doesn't be worked in IE-9
                addActive(slides[i + 1]);
                break;
            }

        }
    }, 7000);
}

