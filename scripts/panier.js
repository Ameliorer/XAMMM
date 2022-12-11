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

function createInput(parent, type, value, name = null, label = null){
    let Label = create("label", parent, label);
    Label.setAttribute("for", name);
    let input = create("input", parent);
    input.setAttribute("type", type);
    input.setAttribute("value", value);
    input.setAttribute("name", name);

}

function Fdelete(data){
    let post = new FormData();
    post.append("action", "retirer");
    post.append("id", data[0].id);
    axios.post("../lib/gestion_panier.php", post);
}

function Fmodif(formData, idC, idUser){
    console.log(formData);
    let post = new FormData();
    post.append("age", formData.ageInput.value);
    post.append("height", formData.heightInput.value);
    post.append("weight", formData.weightInput.value);
    post.append("date", formData.dateInput.value);
    post.append("action", "modifier");
    post.append("idC", idC);
    post.append("idUser", idUser);
    axios.post("../lib/gestion_panier.php", post);
}

let main = document.querySelector('#aff_panier');

axios.get('../lib/panier.php?id='+ PHPdata.idUser).then(Response => {
    console.log(Response);
    Response.data.forEach(cartReserv => {
        let div = create("div", main, null, "cartReserv");
        let NomProduct = create("h2", div, cartReserv[1].name);
        let PriceProduct = create("h4", div, "Prix : "+ cartReserv[1].price +"\€");
        let datereserv = create("p", div, "Date : "+ cartReserv[0].dateReservation);
        let divButton = create("div", div, null, "divButton");
        let remove = create("button", divButton, "retirer", "button");
        remove.addEventListener("click", function(){ Fdelete(cartReserv); div.style.display = "none";}, false); 
        let modifier = create("button", divButton, "modifier", "button");
        let form = create("form", div, null, "formModif");
        form.style.display = "none";
        modifier.addEventListener("click", function(){ 
            if(form.style.display == "block"){
                form.style.display = "none"
                modifier.innerHTML = "modifier"
            }else{
                form.style.display = "block"
                modifier.innerHTML = "annuler"
            };}, false)
        let ageInput = createInput(form, "number", cartReserv[2].age, "ageInput", "Veuillez confirmer votre age : ");
        let tailleInput = createInput(form, "number", cartReserv[2].height, "heightInput", "Veuillez confirmer votre taille : ");
        let poidsInput = createInput(form, "number", cartReserv[2].weight, "weightInput", "Veuillez confirmer votre poids : ");
        let dateInput = createInput(form, "date", cartReserv[0].dateReservation, "dateInput", "Veuillez confirmer la date : ");
        let submitInput = createInput(form, "submit", "confirmer");
        form.addEventListener("submit", function(e){ 
            e.preventDefault(); 
            Fmodif(form, cartReserv[0].id, cartReserv[0].idUser); 
            form.style.display = "none";
            datereserv.innerHTML = "Date : "+ form.dateInput.value;
        });
    });
});