let main = document.querySelector("main");
let avis = document.getElementById("avis");

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
    console.log(Response); // just for testing
    // create a div for each with all infos in it
    Response.data.forEach(post => {
        let div = create("div", avis);
        let user = create("h2", div, "Utilisateur : " + post.iduser)
        let grade = create("span", div, "Note : " + post.grade);
        let content = create("p", div, "Avis : " + post.text);
    });
});