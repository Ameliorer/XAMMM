let form = document.querySelector("form");

function loadJSON(callback) {   

    var xobj = new XMLHttpRequest();
        xobj.overrideMimeType("application/json");
    xobj.open('GET', '../data/panier.json', true); // Replace 'my_data' with the path to your file
    xobj.onreadystatechange = function () {
          if (xobj.readyState == 4 && xobj.status == "200") {
            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
            callback(xobj.responseText);
          }
    };
    xobj.send(null);  
}

form.addEventListener("submit", function(e){
    let newData = {
        poidsUser: form.reservationPoidsUser,
        tailleUser: form.reservationTailleUser,
        ageUser: form.reservationAgeUser,
        dateReservation: form.reservationDate
    };
    let finalData = {
        ...PHPdata,
        ...newData
    };
    
    e.preventDefault();
});

