let form = document.querySelector("form");

form.addEventListener("submit", function(e){
    e.preventDefault();
    let finalData = new FormData();
    finalData.append('poidsUser', form.reservationPoidsUser.value);
    finalData.append('tailleUser', form.reservationTailleUser.value);
    finalData.append('ageUser', form.reservationAgeUser.value);
    finalData.append('dateReservation', form.reservationDate.value);
    finalData.append('idUser', PHPdata.idUser);
    finalData.append('nameProduct', PHPdata.nameProduct);
    finalData.append('today', PHPdata.today);
    axios.post("../lib/gestion_json_panier.php", finalData)
    .then(Response => {
        console.log(Response);
    });
    //window.location.replace('/~XAMMM/pages/prestations.php');
});

