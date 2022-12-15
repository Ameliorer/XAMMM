<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("pages/head.php");

?>
<script src='/~XAMMM/scripts/index.js' defer></script>
<link rel='stylesheet' href='/~XAMMM/styles/index.css' />
<img id='imgbg' src='/~XAMMM/images/bg2.png'></img>
<main>
   


    
   
<div class="division">
    <div class="division_contenu">
    <img class="picture"
        src="/~XAMMM/images/logo.png"
        alt="ici une image ">
    <p>Fondée en 1999, l’école professionnelle de parachutisme Diagonale s’est installée sur la plateforme de Gap Tallard pour bénéficier d’une météo exceptionnelle (Pas de mistral et 300 jours de soleil par an), d’un superbe panorama montagnard et d’un espace aérien dédié au parachutisme (pas de ligne commerciale).</p>
    </div>
</div>

    <div class="division">
    <div class="division_contenu">
        <p>Pierre est moniteur de parachutisme (titulaire du Brevet d'Etat Educateur Sportif 1° degré) depuis 1997. Avec bientôt 20 ans d'activité, il totalise aujourd'hui 21.000 sauts dont près de 16.000 sauts d'enseignement. Plus de 5000 sauts en tandem et plus de  1000 élèves  en stage PAC.</p>
        <img class="picture"
        src="/~XAMMM/images/pierre.jpg"
        alt="ici une image  ">
    </div>
</div>

    <div class="division">
    <div class="division_contenu">
    <img class="picture"
        src="/~XAMMM/images/soulflyers.png"
        alt="ici une image  ">
        <p>Pierre a fait partie de l'équipe des Souls Flyers et participe avec la Fédération Française de Parachutisme à la formation des moniteurs depuis 2002. Vous pouvez sauter avec lui en toute confiance !!!</p>
    </div>
</div>



    <div class="division">
    <div class="division_contenu">
    
        <p>Il totalise aujourd'hui plus de 20.000 sauts et a exploré toutes les facettes du parachutisme : progression, loisir, enseignement, compétition (sky-surf et free-fly), prise de vue professionnelle, sauts de démonstration (Soul flyers), formation au monitorat (avec la fédération Française de Parachutisme), soufflerie (Tunnelinstructor A, A+, B).
    Avec son experience de 20 ans d'enseignement, il peut vous faire progresser quelque soit votre niveau et la discipline souhaitée (Progression Brevet A, B, B2 (vol relatif), Bi4 (free-fly tête en haut), B4 (free-fly tête en bas), formation au monitorat et soufflerie).</p>
    <img class="picture"
        src="/~XAMMM/images/pierre2.png"
        alt="ici une image  ">

    </div>
    </div>
</div>


    <h2> Nos actualitées </h2>
    <div id="blogWrapperWrapper"></div>
</main>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("pages/footer.php");

?>