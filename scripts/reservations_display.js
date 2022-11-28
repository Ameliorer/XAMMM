let main = document.querySelector("main");
let reserva = document.querySelector("#reserv");
let form = document.querySelector("#reservationForm");
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

console.log(form);
form.addEventListener("submit", function(e){
    e.preventDefault();
    axios.get("../lib/reservations.php?reservationsAction=select_date&date="+form.date.value).then(Response => {
        console.log(Response);
        reserva.innerText = "";
        console.log(form.date.value);
        Response.data.forEach(reserv => {
            let div = create("div", reserva);
            let date = create("p", div, "date : " +reserv.date);
            let userAge = create("h3", div, "Age : " +reserv.userAge);
            let productId = create("p", div, "Id Produit : " +reserv.productId);
        });
    });
    form.reset();
});
