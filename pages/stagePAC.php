


<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("head.php");

?>

<div id=#title>
<h1> Le stage PAC</h1>

</div>
    
<div id="imagesIntro">
<a href="#presentation">
    <img class="picture"
        src="/~XAMMM/images/presentation.png"
        alt="ici une image ">
    <p> Presentation </p>
</a>

<a href="#formation">
    <img class="picture"
        src="/~XAMMM/images/formation.png"
        alt="ici une image ">
    <p> Formation </p>
</a>

<a href="#equipement">
    <img class="picture"
        src="/~XAMMM/images/equipement.png"
        alt="ici une image ">
    <p> Equipement </p>
</a>

<a href="#premiersaut">
    <img class="picture"
        src="/~XAMMM/images/premiersaut.png"
        alt="ici une image ">
    <p> Premier saut </p>
</a>

<a href="#atterrissage">
    <img class="picture "
        src="/~XAMMM/images/atterrissage.png"
        alt="ici une image ">
    <p> Atterrissage </p>
</a>
<a href="#sautsuivant">
    <img class="picture"
    src="/~XAMMM/images/sautsuivant.png"
        alt="ici une image ">
    <p> Sauts suivants </p>
 </a>
<a href="#fin">
    <img class="picture"
        src="/~XAMMM/images/fin.png"
        alt="ici une image ">
    <p> Aprés </p>
</a>

</div>





<a id="presentation"></a>
<div class="division">
<h2>Presentation </h2>
<div class="division_contenu">
<img class="picture"
     src="/~XAMMM/images/presentation.png"
     alt="ici une image ">
<p>La PAC est un moyen moderne et rapide de permettre la pratique du parachutisme, d'explorer la chute libre et la maîtrise de soi dans la chute et le sous voile.
Pierre et ses moniteurs sont tous des professionnels diplômés d'Etat ayant au minimum 5 000 sauts à leur actif.
L'entraînement se fait généralement sur une semaine car le meilleur moyen de progresser est d'enchaîner les sauts.
Vous n'avez pas de semaine complête, contactez nous pour étaler votre stage sur plusieurs week-ends .
Attention vous serez dépendant de la météo, il est bien évident que pour des questions de sécurité personne ne saute quand il pleut ou que le vent est trop fort.
</p>
</div>
</div>


<a id="formation"></a>
<div class="division">
<h2>La formation</h2>

<div class="division_contenu">

<img class="picture"
     src="/~XAMMM/images/formation.png"
     alt="ici une image ">

<p>Une formation d'une demi-journée au cours de laquelle on vous expliquera : les différents éléments d'un parachute, les règles de sécurité, la methode de conduite sous voile, la position en chute libre et les conseils pour une pratique éthique.
</p>
</div>
</div>


<a id="equipement"></a>
<div class="division ">
<h2>L'equipement</h2>

<div class="division_contenu ">

<img class="picture"
     src="/~XAMMM/images/equipement.png"
     alt="ici une image ">
<p>Vous revêtirez une combinaison de saut, et vous vous équiperez d'un casque, de lunettes, d'un altimètre et bien entendu d'un parachute adapté à votre morphologie. Après une ultime vérification, vous serez prêt pour l'embarquement.</p>
</div>
</div>



<a id="premiersaut"></a>
<div class="division">
<h2>Le premier saut </h2>

<div class="division_contenu">

<img class="picture"
     src="/~XAMMM/images/premiersaut.png"
     alt="ici une image ">
<p>Le premier saut se déroule depuis une hauteur de 4000 m avec deux moniteurs qui vous suivront durant toute chute libre.
Un moniteur sera devant vous pour communiquer au moyen de signes appris durant la formation.
Un autre reste sur le coté en vous tenant afin de maintenir votre stabilité.
</p>
</div>
</div>

<a id="atterrissage"></a>
<div class="division">
<h2>L'atterrissage</h2>

<div class="division_contenu">

<img class="picture"
     src="/~XAMMM/images/atterrissage.png"
     alt="ici une image ">
<p>Sous voile, pas de panique vous n'êtes pas livrés à vous même, vous serez guidé par radio.
Après l'atterrissage, un débrief vidéo est fait  pour vous préparer au prochain saut.
!</p>
</div>
</div>

<a id="sautsuivant"></a>
<div class="division">
<h2>Les saut suivants </h2>
<div class="division_contenu">

<img class="picture "
     src="/~XAMMM/images/sautsuivant.png"
     alt="ici une image ">

<p>2500 mètres de chute libre à 200 kilomètres heure ça fait environ  50 secondes de chute libre ! N’oubliez pas de respirer l’air pur des hautes alpes, ouvrez grand les yeux profitez de ce sentiment de flotter dans les airs ! A cette vitesse le vent relatif est un fluide ! Souriez ! Regardez le superbe paysage ! Réalisez que vous êtes en train de faire un saut en parachute depuis 4000 mètres ! Kiffez ! Profitez de la minute de votre vie !</p>
</div>
</div>


<a id="fin"></a>
<div class="division">
<h2>Et aprés ? </h2>

<div class="division_contenu">

<img class="picture"
     src="/~XAMMM/images/fin.png"
     alt="ici une image ">
<p>A la fin de la PAC, vous pourrez sauter en autonomie sur toutes les Drop Zones de France en présentant  votre carnet de saut ou votre carte de licence.
Plus tard avec au moins 15 sauts,  le brevet A puis le brevet B vous tendrons les bras et donneront plus d'autonomie.
</p>
</div>
</div>



</main>



<script src="/~XAMMM/scripts/histoire.js"></script>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.html");

?>