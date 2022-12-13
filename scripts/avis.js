let main = document.querySelector("main");
let avis = document.getElementById("avis")

//typical create function 
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

// Get the content of the bd opinion and put them in the page opinion.php
axios.get("../lib/opinion.php?opinionAction=select_all").then(Response => {
    // create a div for each with all infos in it 
    Response.data.forEach(post => {
        createAOpinion(post);
    });
});


let button5star = document.getElementById("button5stars")
button5star.addEventListener('click', e => { 
    avis.innerText=""
    let titre = create("h1", avis, "Les avis 5 étoiles");
    // Get the content of the bd opinion and put them in the page opinion.php
    axios.get("../lib/opinion.php?opinionAction=5").then(Response => {
        // create a div for each with all infos in it 
        Response.data.forEach(post => {
            createAOpinion(post);
        });
});
});

let button4star = document.getElementById("button4stars")
button4star.addEventListener('click', e => { 
    avis.innerText=""
    let titre = create("h1", avis, "Les avis 4 étoiles");
    // Get the content of the bd opinion and put them in the page opinion.php
    axios.get("../lib/opinion.php?opinionAction=4").then(Response => {
        // create a div for each with all infos in it 
        Response.data.forEach(post => {
            createAOpinion(post);
        });
});
});

let button3star = document.getElementById("button3stars")
button3star.addEventListener('click', e => { 
    avis.innerText=""
    let titre = create("h1", avis, "Les avis 3 étoiles");
    // Get the content of the bd opinion and put them in the page opinion.php
    axios.get("../lib/opinion.php?opinionAction=3").then(Response => {
        // create a div for each with all infos in it 
        Response.data.forEach(post => {
            createAOpinion(post);
        });
});
});

let buttonAllstar = document.getElementById("all")
buttonAllstar.addEventListener('click', e => { 
    avis.innerText=""
    let titre = create("h1", avis, "Tous les avis");
    // Get the content of the bd opinion and put them in the page opinion.php
    axios.get("../lib/opinion.php?opinionAction=select_all").then(Response => {
        // create a div for each with all infos in it 
        Response.data.forEach(post => {
            createAOpinion(post);
        });
});
});

let button2star = document.getElementById("button2stars")
button2star.addEventListener('click', e => { 
    avis.innerText=""
    let titre = create("h1", avis, "Les avis 2 étoiles");
    // Get the content of the bd opinion and put them in the page opinion.php
    axios.get("../lib/opinion.php?opinionAction=2").then(Response => {
        // create a div for each with all infos in it 
        Response.data.forEach(post => {
            createAOpinion(post);
        });
});
});

let button1star = document.getElementById("button1stars")
button1star.addEventListener('click', e => { 
    avis.innerText=""
    let titre = create("h1", avis, "Les avis 1 étoiles");
    // Get the content of the bd opinion and put them in the page opinion.php
    axios.get("../lib/opinion.php?opinionAction=1").then(Response => {
        // create a div for each with all infos in it 
        Response.data.forEach(post => {
            createAOpinion(post);
        });
});
});

function createAOpinion(post){
    let div = create("div", avis);
    let user = create("h2", div, "Utilisateur : " + post.iduser)
    let gradetxt ="";

    if (post.grade == 5 ) {
         gradetxt = "⭐⭐⭐⭐⭐";
    }
    else if (post.grade == 4 ) {
         gradetxt = "⭐⭐⭐⭐";
    }
    else if (post.grade == 3 ) {
         gradetxt = "⭐⭐⭐";
    }
    else if (post.grade == 2 ) {
         gradetxt = "⭐⭐";
    }
    else { gradetxt = "⭐";}

    let grade = create("span", div,"Note : " + gradetxt);

    let content = create("p", div,"Avis : " + post.text);
}