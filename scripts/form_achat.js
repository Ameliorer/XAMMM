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
    finalData.append('action', "addToCart");
    axios.post("../lib/gestion_panier.php", finalData);
    window.location.replace('/~XAMMM/pages/prestations.php');
});

