let avisfooter = document.querySelector(".carousel");


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

