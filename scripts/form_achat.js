let form = document.querySelector("form");

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
    axios.post("../lib/gestion_json-panier.php", finalData)
    .then(Response => {
        console.log(Response);
    });
    e.preventDefault();
});

