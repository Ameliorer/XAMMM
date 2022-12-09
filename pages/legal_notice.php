<?php 
//Premiere balise PHP pour includes les principaux fichiers (Head,db_connect...) ainsi que pour s'occuper des sessions (visiteur,admin)
//–––––––––––––––

//Include du head
include("head.php");

?>

<?php 
//Deuxieme balise PHP : La page
//–––––––––––––––


$html_acceuil = "<div><a href='../index.php'>ACCEUIL</a></div>";
echo($html_acceuil);
?>

<header id="headerLegalNotice">
    <h1>Mentions légales</h1>
</header>
<main>
    <ul>
        <li><span>Dénomination sociale : DESMET Pierre   DIAGONALE</span></li>
        <li><span>Adresse du siège sociale : St Laurent 05130 Sigoyer </span></li>
        <li><span>Téléphone : 04 92 54 17 94 </span></li>
        <li><span>Mobile : 06 60 83 12 94 </span></li>
        <li><span>A.P.E. : 926C</span></li>
        <li><span>SIRET : 423 769 991 00070</span></li>
        <li><span>TVA : FR 49 423 769 991</span></li>
        <li><span>Directeur de publication : DESMET Pierre </span></li>
        <li><span>Hébergeur du site : </span></li>
        <li><span>Adresse de l'hébergeur :  </span></li>
        <li><span>Téléphone de l'hébergeur : </span></li>
    </ul>
    <h2>LE SITE DIAGONALE-CHUTE-LIBRE.COM EST ÉDITÉ PAR: </h2>
    <ul>
        <li>DESMET PIERRE-DIAGONALE, Siret n° 423 769 991 00070</li>
        <li>Siège social : Hameau St Laurent 05130 Sigoyer</li>
        <li>Téléphone : 04 92 54 17 94</li>
        <li>Contact e-mail : diagonalechutelibre@gmail.com</li>
        <li>Directeur de publication : DESMET Pierre</li>
    </ul>
    <h2>Le site diagonale-chute-libre.com est hébergé par: </h2>
        <p>
            
        </p>
    <h2>Conditions d’utilisation du site</h2>
        <p>
            L’utilisation du site diagonale-chute-libre.com est soumise au respect des conditions générales décrites ci-après. En accédant au site diagonale-chute-libre.com, vous déclarez avoir pris connaissance et avoir accepté, sans la moindre réserve, ces conditions générales d’utilisation.
        </p>
    <h2>Accès au site</h2>
        <p>
            L'accès au site diagonale-chute-libre.com est possible 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure ou d'un événement hors du contrôle de DESMET PIERRE-DIAGONALE et sous réserve des éventuelles pannes et interventions de maintenance nécessaires au bon fonctionnement du site diagonale-chute-libre.com et des matériels afférents.
        </p>
    <h2>Contenu du site</h2>
        <p>
            La société DESMET PIERRE-DIAGONALE met à disposition des utilisateurs du site diagonale-chute-libre.com des informations disponibles et vérifiées, mais elle ne saurait être tenue pour responsable de l'indisponibilité de certaines informations.<br>
            De plus, aucune garantie n'est donnée quant à l'exactitude, la précision ou l'exhaustivité des informations mises à disposition sur le site diagonale-chute-libre.com<br>
            DESMET PIERRE-DIAGONALE se réserve le droit de modifier et/ou de supprimer sans préavis tout ou partie de son site diagonale-chute-libre.com.
        </p>
    <h2>Propriété</h2>
        <p>
            Tous les éléments (textes, logos, images, éléments sonores, logiciels, icônes, mise en page, base de données,...) contenus dans le site diagonale-chute-libre.com sont protégés par le droit national et international de la propriété intellectuelle. Ces éléments restent la propriété exclusive de DESMET PIERRE  DIAGONALE.<br>
            A ce titre, sauf autorisation préalable et écrite de la société DESMET PIERRE  DIAGONALE, vous ne pouvez procéder à une quelconque reproduction, représentation, adaptation, traduction et/ou transformation partielle ou intégrale, ou un transfert sur un autre site web de tout élément composant le site diagonale-chute-libre.com.<br>
            Conformément aux dispositions du Code de la propriété Intellectuelle, seule est autorisée l'utilisation des éléments composant le site diagonale-chute-libre.com à des fins strictement personnelles. 
        </p>
    <h2>Marques</h2>
        <p>
            Les marques et logos reproduits sur le site diagonale-chute-libre.com sont déposés par les sociétés qui en sont propriétaires. <br>
            Toute reproduction, réédition ou redistribution des noms ou logos, par quelque moyen que ce soit, sans autorisation préalable et écrite de leur titulaire concerné est interdite par la loi. 
        </p>
    <h2>Liens hypertextes</h2>
        <p>
            Les liens hypertextes mis en place dans le cadre du présent site web : diagonale-chute-libre.com en direction d'autres ressources présentes sur le réseau internet, ne sauraient engager la responsabilité de la société DESMET PIERRE-DIAGONALE.<br>
            DESMET PIERRE-DIAGONALE décline également toute responsabilité en ce qui concerne le contenu et la pertinence des informations données des sites édités par des tiers et accessibles depuis le site diagonale-chute-libre.com par des liens hypertextes.
        </p>
    <h2>LOI DU 6 JANVIER 1978 RELATIVE À L'INFORMATIQUE ET AUX LIBERTÉS</h2>
        <p>
            Conformément à la Loi, le site diagonale-chute-libre.com a fait l'objet d'une déclaration de traitement automatisé d'informations nominatives auprès de la CNIL n° 1102865.<br>
            Vous disposez d'un droit d'accès, de rectification et de suppression des informations personnelles vous concernant que vous pouvez exercer à tout moment en écrivant aux adresses suivantes : 
            diagonalechutelibre@gmail.com<br><br>

            ou <br>
            DESMET PIERRE   DIAGONALE, <br>
            HameauSt Laurent <br>
            05130 Sigoyer<br>
        </p>
</main>

<?php 
//Troisieme balise PHP pour include le(s) fichier(s) du footer
//–––––––––––––––

//Include du footer
include("footer.php");

?>