<?php 
//Page admin où ce(s) dernier(s) pourront réaliser toutes les actions sur la BDD
//CSS UNIQUEMENT POUR POUVOIR CONSTRUIRE LA PAGE PLUS FACILEMENT !
/*

inclue : 
 - /~XAMM/crud/crud_blog.php
 - /~XAMM/crud/crud_codes.php
 - /~XAMM/crud/crud_discounts.php
 - /~XAMM/crud/crud_imags.php
 - /~XAMM/crud/crud_opinion.php
 - /~XAMM/crud/crud_products.php
 - /~XAMM/crud/crud_reservations.php
 - /~XAMM/crud/crud_users.php
 - /~XAMMM/db/db_connect.php
 - /~XAMMM/db/db_disconnect.php
 - /~XAMMM/lib/showElements_admin.php
 - /~XAMMM/pages/head.php
 - /~XAMMM/pages/footer.php
 - /~XAMMM/scripts/admin.js
 - /~XAMMM/scripst.axios.min.js

est utilisé :
 - /~XAMMM/admin.index_admin.php

*/

//Include of each cruds
include("../db/db_connect.php");
include("../pages/head.php");
include("../crud/crud_blog.php");
include("../crud/crud_codes.php");
include("../crud/crud_discounts.php");
include("../crud/crud_images.php");
include("../crud/crud_opinion.php");
include("../crud/crud_products.php");
include("../crud/crud_reservations.php");
include("../crud/crud_users.php");

//Fonctions of LIB
include("../lib/showElements_admin.php");

?>



<header>
    <h1>Bienvenue sur la page admin</h1>
    <img src='../images/58ae6fac8c68e99e929771f8f2cb6c42.jpeg' id="imgAdmin" alt="imgAdmin">
    <div class="menu_page">
        <p>Soyez libre de réaliser les actions suivantes : </p>
        <ul>
            <li>Ajouter</li>
            <li>Modifier</li>
            <li>Supprimer</li>
            <li>Tout sélectionner</li>
            <li>Selectionner selon un critère</li>
        </ul>
        <p><u>N'importe quel élèment des catégories suivantes :</u></p>
    </div>
</header>

<main>
    <div id="blog_actions" class="div_actions">
        <h2>Les posts <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-blog_actions" class="content">
            <h3>Ajouter un post</h3>
            <div class="add_action">
                <form action="" method="post" name="blogForm" class="form">
                    <label for="blogTitle">Titre du post :</label>
                    <input type="text" placeholder="titre" name="blogTitle"/>

                    <label for="blogContent">Contenu du Post :</label>
                    <textarea name="blogContent" rows="10" cols="120" >Descriver le blog dans ce bloc</textarea>

                    <label for="blogDate">Date du post :</label>
                    <input type="date" placeholder="date" name="blogDate"/>

                    <label for="blogSubmit">Ajouter le blog :</label>
                    <input type="submit" name="blogSubmit1" >
                </form>
            </div>
            <h3>Modifier un post</h3>
            <div class="update_action">
                <form action="" method="post" name="blogForm" class="form">
                    <label for="blogId">Numéro d'identification du blog : </label>
                    <input type="int" placeholder="id" name="blogId"/>

                    <label for="blogTitle">Nouveau titre du Post : </label>
                    <input type="text" placeholder="Titre" name="blogTitle"/>

                    <label for="blogContent">Nouveau contenu du post : </label>
                    <textarea name="blogContent" rows="10" cols="120">Decriver les changements du post</textarea>

                    <label for="blogDate">Nouvelle date du Post : </label>
                    <input type="date" placeholder="date" name="blogDate"/>

                    <label for="blogSubmit">Valider le(s) changement(s) : </label>
                    <input type="submit" name="blogSubmit2">
                </form>
            </div>
            <h3>Supprimer un post</h3>
            <div class="delete_action">
                <form action="" method="post" name="blogForm" class="form">
                    <label for="blogId">Numéro d'identification du blog : </label>
                    <input type="int" placeholder="id" name="blogId"/>

                    <label for="blogSubmit">Supprimer le blog ? (Irréverssible) : </label>
                    <input type="submit" name="blogSubmit3">
                </form>
            </div>
            <h3>Selectionner un post en particulier</h3>
            <div class="select_action">
                <form action="" method="post" name="blogForm" class="form">
                    <label for="blogId">Numéro d'identification du blog : </label>
                    <input type="int" placeholder="id" name="blogId"/>

                    <label for="blogSubmit4">Afficher le post</label>
                    <input type="submit" name="blogSubmit4">
                </form>
            </div>
            <h3>Afficher tous les posts</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="blogForm" class="form">
                    <label for="blogSubmit">Afficher tout les posts</label>
                    <input type="submit" name="blogSubmit5">
                </form>
            </div> 
        </div>
    </div>
    <div id="opinion_actions" class="div_actions">
        <h2>Les opinions <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-opinion_actions" class="content">
            <h3>Ajouter une opinion</h3>
            <div class="add_action">
                <form action="" method="post" name="opinionForm" class="form">
                    <label for="iduser">Id de l'utilisateur :</label>
                    <input type="number" placeholder="id user" name="iduser" />
                    
                    <label for="text">Texte de l'opinion :</label>
                    <input type="text" placeholder="texte" name="text"/>

                    <label for="grade">Nombre d'étoiles :</label>
                    <input type="number" placeholder="entre 1 et 5" name="grade"/>

                    <label for="opinionSubmit">Ajouter l'opinon :</label>
                    <input type="submit" name="opinionSubmit1">
                </form>
            </div>
            <h3>Modifier une opinion</h3>
            <div class="update_action">
                <form action="" method="post" name="opinionForm" class="form">
                    <label for="id">Numéro d'identification de l'opinion:</label>
                    <input type="number" placeholder="id" name="id" />

                    <label for="iduser">Nouvel numéro d'identification de l'utilisateur : (L'utilisateur ayant publié sera modifié)</label>
                    <input type="number" placeholder="id user" name="iduser" />
                    
                    <label for="text">Nouveau texte de l'opinion :</label>
                    <input type="text" placeholder="texte" name="text"/>

                    <label for="grade">Nouveau nombre d'étoiles :</label>
                    <input type="number" placeholder="entre 1 et 5" name="grade" />

                    <label for="opinionSubmit">Modifier l'opinon :</label>
                    <input type="submit" name="opinionSubmit2" >
                </form>
            </div>
            <h3>Supprimer une opinion</h3>
            <div class="delete_action">
                <form action="" method="post" name="opinionForm" class="form">
                    <label for="iduser">Id de l'utilisateur :</label>
                    <input type="number" placeholder="id user" name="iduser"/>

                    <label for="opinionSubmit">Supprimer l'opinon :</label>
                    <input type="submit" name="opinionSubmit3">
                </form>
            </div>
            <h3>Selectionner une opinion en particulier</h3>
            <div class="select_action">
                <form action="" method="post" name="opinionForm" class="form">
                    <label for="iduser">Id de l'utilisateur :</label>
                    <input type="number" placeholder="id user" name="iduser" />

                    <label for="opinionSubmit">Afficher l'opinon ciblé :</label>
                    <input type="submit" name="opinionSubmit4">
                </form>
            </div>
            <h3>Selectionner toutes les opinions</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="opinionForm" class="form">
                    <label for="opinionSubmit">Afficher tous les opinions :</label>
                    <input type="submit" name="opinionSubmit5">
                </form>
            </div>

        </div>
    </div>
    <div id="code_actions" class="div_actions">
        <h2>Les codes promos <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-codes_actions" class="content">
            <h3>Ajouter un code promo</h3>
            <div class="add_action">
                <form action="" method="post" name="codesForm" class="form">
                    <label for="codesCodes">Code du code promo :</label>
                    <input type="text" placeholder="code" name="codesCodes"/>

                    <label for="codesIdType">Numéro d'identification du type de produit du code promo :</label>
                    <input type="number" placeholder="id type" name="codesIdType"/>

                    <label for="codesDateD">Date de début du code promo :</label>
                    <input type="date" placeholder="date debut" name="codesDateD"/>

                    <label for="codesDateF">Date de fin du code promo :</label>
                    <input type="date" placeholder="date fin" name="codesDateF"/>

                    <label for="codesSubmit">Ajouter le code promo :</label>
                    <input type="submit" name="codesSubmit1">
                </form>
            </div>
            <h3>Modifier un code promo</h3>
            <div class="update_action">
                <form action="" method="post" name="codesForm" class="form">
                    <label for="codesCodes">Nouveau code du code promo :</label>
                    <input type="text" placeholder="code" name="codesCodes"/>

                    <label for="codesIdType">Nouveau numéro d'identification du type de produit du code promo : (Cela changera le produit lié au code)</label>
                    <input type="number" placeholder="id type" name="codesIdType"/>

                    <label for="codesDateD">Nouvelle date de début du code promo :</label>
                    <input type="date" placeholder="date debut" name="codesDateD"/>

                    <label for="codesDateF">Nouvelle date de fin du code promo :</label>
                    <input type="date" placeholder="date fin" name="codesDateF"/>

                    <label for="codesSubmit">Modifier le code promo :</label>
                    <input type="submit" name="codesSubmit2">
                </form>
            </div>
            <h3>Supprimer un code promo</h3>
            <div class="delete_action">
                <form action="" method="post" name="codesForm" class="form">
                    <label for="codesCodes">Code du code promo :</label>
                    <input type="text" placeholder="code" name="codesCodes"/>

                    <label for="codesSubmit">Supprimer le code promo :</label>
                    <input type="submit" name="codesSubmit3">
                </form>
            </div>
            <h3>Selectionner un code promo en particulier</h3>
            <div class="select_action">
                <form action="" method="post" name="codesForm" class="form">
                    <label for="codesIdType">Numéro d'identification du type de produit du code promo :</label>
                    <input type="number" placeholder="id type" name="codesIdType"/>

                    <label for="codesSubmit">Afficher le code promo :</label>
                    <input type="submit" name="codesSubmit4">
                </form>
            </div>
            <h3>Afficher tous les codes promo</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="codesForm" class="form">
                    <label for="codesSubmit">Afficher tous les codes promos :</label>
                    <input type="submit" name="codesSubmit5">
                </form>
            </div> 
        </div>
    </div>
    <div id="discount_actions" class="div_actions">
        <h2>Les promotions <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-discounts_actions" class="content">
            <h3>Ajouter une promotion lié à un produit</h3>
            <div class="add_action">
                <form action="" method="post" name="promosForm" class="form">
                    <label for="productId">Id du produit lié :</label>
                    <input type="int" placeholder="Id" name="productId"/>

                    <label for="promosNom">Nom de la promotion :</label>
                    <input type="text" placeholder="nom" name="promosNom"/>

                    <label for="percentage">Pourcentage :</label>
                    <input type="int" placeholder="%" name="percentage"/>

                    <label for="promosDateD">Date de début de la promotion :</label>
                    <input type="date" placeholder="date debut" name="promosDateD"/>

                    <label for="promosDateF">Date de fin de la promotion :</label>
                    <input type="date" placeholder="date fin" name="promosDateF"/>

                    <label for="promosDescription">Description de la promotion :</label>
                    <textarea name="promosDescription" rows="10" cols="120">Description</textarea>

                    <label for="promosSubmit">Ajouter la promotion</label>
                    <input type="submit" name="promosSubmit1">
                </form>
            </div>
            <h3>Modifier une promotion lié à un produit</h3>
            <div class="update_action">
                <form action="" method="post" name="promosForm" class="form">
                    <label for="Id">Numéro d'identification de la promotion</label>
                    <input type="int" placeholder="" name="Id"/>

                    <label for="productId">Nouvel id du produit lié :</label>
                    <input type="int" placeholder="" name="productId"/>

                    <label for="promosNom">Nouveau nom de la promotion :</label>
                    <input type="text" placeholder="nom" name="promosNom"/>

                    <label for="percentage">Nouveau pourcentage :</label>
                    <input type="int" placeholder="" name="percentage"/>

                    <label for="promosDateD">Nouvelle date de début de la promotion :</label>
                    <input type="date" placeholder="date debut" name="promosDateD"/>

                    <label for="promosDateF">Nouvelle date de fin de la promotion :</label>
                    <input type="date" placeholder="date fin" name="promosDateF"/>

                    <label for="promosDescription">Nouvelle description de la promotion :</label>
                    <textarea name="promosDescription" rows="10" cols="120">Description</textarea>

                    <label for="promosSubmit">Modifier la promotion</label>
                    <input type="submit" name="promosSubmit2">
                </form>
            </div>
            <h3>Supprimer une promo lié à un produit</h3>
            <div class="delete_action">
                <form action="" method="post" name="promosForm" class="form">
                    <label for="Id">Numéro d'identification de la promotion</label>
                    <input type="int" placeholder="" name="Id"/>

                    <label for="promosSubmit">Supprimer la promotion</label>
                    <input type="submit" name="promosSubmit3">
                </form>
            </div>
            <h3>Selectionner une promo particulière lié à un produit</h3>
            <div class="select_action">
                <form action="" method="post" name="promosForm" class="form">
                    <label for="Id">Numéro d'identification de la promotion</label>
                    <input type="int" placeholder="" name="Id"/>

                    <label for="promosSubmit">Afficher la promotion </label>
                    <input type="submit" name="promosSubmit4">
                </form>
            </div>
            <h3>Selectionner toutes les promos lié à un produit</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="promosForm" class="form">
                    <label for="promosSubmit">Afficher toutes les promotions </label>
                    <input type="submit" name="promosSubmit5">
                </form>
            </div> 
        </div>
    </div>
    <div id="image_actions" class="div_actions">
        <h2>Les images <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-images_actions" class="content">
            <h3>Ajouter une image</h3>
            <div class="add_action">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" name="imagesForm" class="form">
                    <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
                    <input name="fichier" type="file" id="fichier_a_uploader" />
                    <p>Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés .</p>

                    <label for="imagesIdBlog">Id du Blog de l'image :</label>
                    <input type="number" placeholder="id blog" name="imagesIdBlog"/>

                    <label for="imagesSubmit">Ajouter l'image :</label>
                    <input type="submit" name="imagesSubmit1" />
                    
                </form>
            </div>
            <h3>Modifier une image</h3>
            <div class="update_action">
                <form action="" method="post" name="imagesForm" class="form">
                <label for="imagesNom">Nom de l'image:</label>
                    <input type="text" placeholder="nom image" name="imagesNom"/>
                    
                    <label for="imagesIdBlog">Nouvel id du Blog de l'image :</label>
                    <input type="number" placeholder="id blog" name="imagesIdBlog"/>

                    <label for="imagesSubmit">Modifier le blog lié à l'image :</label>
                    <input type="submit" name="imagesSubmit2">
                </form>
            </div>
            <h3>Selectionner une image en particulier</h3>
            <div class="select_action">
                <div class="form">
                    <label for="imagesNom">Numéro d'identification du blog </label>
                    <input type="text" placeholder="id blog" name="idBlog" id="idBlog"/>

                    <label for="imagesSubmit">Afficher le nom de l'image :</label>
                    <button id="imagesSubmit4">Afficher</button>
                </div>
            </div>
            <h3>Selectionner toutes les images</h3>
            <div class="selectAll_action">
                <div class="form">
                    <span for="imagesSubmit">Afficher tous les noms des images :</span>
                    <button id="imagesSubmit5">Afficher</button>
                </div>
            </div> 
        </div>
    </div>
    <div id="product_actions" class="div_actions">
        <h2>Les produits <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-products_actions" class="content">
            <h3>Ajouter un produit</h3>
            <div class="add_action">
                <form action="" method="post" name="produitForm" class="form">
                    <label for="produitNom">Nom du produit :</label>
                    <input type="text" placeholder="nom" name="produitNom"/>

                    <label for="produitPrix">Prix du produit :</label>
                    <input type="number" placeholder="prix" name="produitPrix"/>

                    <label for="produitDateD">Date de début du produit :</label>
                    <input type="date" placeholder="date debut" name="produitDateD"/>

                    <label for="produitDateF">Date de fin du produit :</label>
                    <input type="date" placeholder="date fin" name="produitDateF"/>

                    <label for="produitAgeMin">Age minimum (an) pour le produit :</label>
                    <input type="number" placeholder="age min" name="produitAgeMin"/>

                    <label for="produitAgeMax">Age maximum (an) pour le produit :</label>
                    <input type="number" placeholder="age max" name="produitAgeMax"/>

                    <label for="produitPoidsMin">Poids minimum (kg) pour le produit :</label>
                    <input type="number" placeholder="poids min" name="produitPoidsMin"/>

                    <label for="produitPoidsMax">Poids maximum (kg) pour le produit :</label>
                    <input type="number" placeholder="poids max" name="produitPoidsMax"/>

                    <label for="produitTailleMin">Taille minimum (cm) pour le produit :</label>
                    <input type="number" placeholder="taille min" name="produitTailleMin"/>

                    <label for="produitTailleMax">Taille maximum (cm) pour le produit :</label>
                    <input type="number" placeholder="taille max" name="produitTailleMax"/>

                    <label for="produitSubmit">Créer le produit</label>
                    <input type="submit" name="produitSubmit1">
                </form>
            </div>
            <h3>Modifier un produit</h3>
            <div class="update_action">
                <form action="" method="post" name="produitForm" class="form">
                    <label for="produitNom">Nouveau nom du produit :</label>
                    <input type="text" placeholder="nom" name="produitNom"/>

                    <label for="produitPrix">Nouveau prix du produit :</label>
                    <input type="number" placeholder="prix" name="produitPrix"/>

                    <label for="produitDateD">Nouvelle date de début du produit :</label>
                    <input type="date" placeholder="date debut" name="produitDateD"/>

                    <label for="produitDateF">Nouvelle date de fin du produit :</label>
                    <input type="date" placeholder="date fin" name="produitDateF"/>

                    <label for="produitAgeMin">Nouvel age minimum (an) pour le produit :</label>
                    <input type="number" placeholder="age min" name="produitAgeMin"/>

                    <label for="produitAgeMax">Nouvel age maximum (an) pour le produit :</label>
                    <input type="number" placeholder="age max" name="produitAgeMax"/>

                    <label for="produitPoidsMin">Nouveau poids minimum (kg) pour le produit :</label>
                    <input type="number" placeholder="poids min" name="produitPoidsMin"/>

                    <label for="produitPoidsMax">Nouveau poids maximum (kg) pour le produit :</label>
                    <input type="number" placeholder="poids max" name="produitPoidsMax"/>

                    <label for="produitTailleMin">Nouvelle taille minimum (cm) pour le produit :</label>
                    <input type="number" placeholder="taille min" name="produitTailleMin"/>

                    <label for="produitTailleMax">Nouvelle taille maximum (cm) pour le produit :</label>
                    <input type="number" placeholder="taille max" name="produitTailleMax"/>

                    <label for="produitSubmit">Modifier le produit</label>
                    <input type="submit" name="produitSubmit2">
                </form>
            </div>
            <h3>Supprimer un produit</h3>
            <div class="delete_action">
                <form action="" method="post" name="produitForm" class="form">
                    <label for="produitNom">Nom du produit :</label>
                    <input type="text" placeholder="nom" name="produitNom"/>

                    <label for="produitSubmit">Supprimer le produit</label>
                    <input type="submit" name="produitSubmit3">
                </form>
            </div>
            <h3>Selectionner un produit en particulier</h3>
            <div class="select_action">
                <form action="" method="post" name="produitForm" class="form">
                    <label for="produitNom">Nom du produit :</label>
                    <input type="text" placeholder="nom" name="produitNom"/>

                    <label for="produitSubmit">Afficher le produit</label>
                    <input type="submit" name="produitSubmit4">
                </form>
            </div>
            <h3>Selectionner tous les produits</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="produitForm" class="form">
                    <label for="produitSubmit">Afficher tout les produits</label>
                    <input type="submit" name="produitSubmit5">
                </form>
            </div> 
        </div>
    </div>
    <div id="reservation_actions" class="div_actions">
        <h2>Les reservations <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-reservations_actions" class="content">
            <h3>Ajouter une reservation</h3>
            <div class="add_action">
                <form action="" method="post" name="reservationForm" id="reservationForm" class="form">
                    <label for="reservationIdUser">Id de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="id user" name="reservationIdUser" id="reservationIdUser"/>

                    <label for="reservationTailleUser">Taille de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="taille user" name="reservationTailleUser" id="reservationTailleUser"/>

                    <label for="reservationPoidsUser">Poids de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="poids user" name="reservationPoidsUser" id="reservationPoidsUser"/>

                    <label for="reservationAgeUser">Age de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="age user" name="reservationAgeUser" id="reservationAgeUser"/>

                    <label for="reservationIdPruduit">Id du produit réservé :</label>
                    <input type="number" placeholder="id produit" name="reservationIdProduit" id="reservationIdProduit"/>

                    <label for="reservationDate">Date de la réservation :</label>
                    <input type="date" placeholder="date" name="reservationDate" id="reservationDate"/>

                    <label for="reservationSubmit">Creer la réservation :</label>
                    <input type="submit" name="reservationSubmit1">
                </form>
            </div>
            <h3>Modifier une reservation</h3>
            <div class="update_action">
                <form action="" method="post" name="reservationForm" class="form">
                    <label for="reservationIdUser">Modifier le numéro d'identifcation de l'utilisateur ayant fait la reservation</label>
                    <input type="number" placeholder="id user" name="reservationIdUser"/>

                    <label for="reservationTailleUser">Nouvelle taille de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="taille user" name="reservationTailleUser" />

                    <label for="reservationPoidsUser">Nouveau poids de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="poids user" name="reservationPoidsUser"/>

                    <label for="reservationAgeUser">Nouvel age de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="age user" name="reservationAgeUser"/>

                    <label for="reservationIdPruduit">Nouveau numéro d'identification du produit réservé (Modifiera le produit lié à la réservation) :</label>
                    <input type="number" placeholder="id produit" name="reservationIdProduit"/>

                    <label for="reservationDate">Nouvelle date de la réservation :</label>
                    <input type="date" placeholder="date" name="reservationDate"/>

                    <label for="reservationSubmit">Modifier la réservation :</label>
                    <input type="submit" name="reservationSubmit2">
                </form>
            </div>
            <h3>Supprimer une reservation</h3>
            <div class="delete_action">
                <form action="" method="post" name="reservationForm" class="form">
                    <label for="reservationIdUser">Id de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="id user" name="reservationIdUser"/>

                    <label for="reservationSubmit">Supprimer la réservation :</label>
                    <input type="submit" name="reservationSubmit3">
                </form>
            </div>
            <h3>Selectioner une reservation en particulier</h3>
            <div class="select_action">
                <form action="" method="post" name="reservationForm" class="form">
                    <label for="reservationIdUser">Id de l'utilisateur ayant fait la réservation :</label>
                    <input type="number" placeholder="id user" name="reservationIdUser"/>

                    <label for="reservationSubmit">Afficher la réservation :</label>
                    <input type="submit" name="reservationSubmit4">
                </form>
            </div>
            <h3>Selectionner toutes les reservations</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="reservationForm" class="form">
                    <label for="reservationSubmit">Afficher toutes les réservations :</label>
                    <input type="submit" name="reservationSubmit5">
                </form>
            </div> 
        </div>
    </div>
    <div id="user_actions" class="div_actions">
        <h2>Les utilisateurs <img src="/~XAMMM/images/8aa56e7c51aee2e5ec008205de8f63de.png" class="arrow" ></h2>
        <div id="content-user_actions" class="content">
            <h3>Ajouter un utilisateur :</h3>
            <div class="add_action">
                <form action="" method="post" name="utilisateurForm" class="form">
                    <label for="utilisateurNom">Nom de l'utilisateur :</label>
                    <input type="text" placeholder="nom" name="utilisateurNom"/>

                    <label for="utilisateurPrenom">Prenom de l'utilisateur :</label>
                    <input type="text" placeholder="prenom" name="utilisateurPrenom"/>

                    <label for="utilisateurMail">Mail de l'utilisateur :</label>
                    <input type="mail" placeholder="mail" name="utilisateurMail"/>

                    <label for="utilisateurPassword">Mot de passe de l'utilisateur :</label>
                    <input type="password" placeholder="mot de passe" autocomplete="off" name="utilisateurPassword"/>

                    <label for="utilisateurNumTel">Numero de telephone de l'utilisateur :</label>
                    <input type="tel" placeholder="numero telephone" name="utilisateurNumTel"/>

                    <label for="utilisateurTaille">Taille de l'utilisateur :</label>
                    <input type="int" placeholder="taille" name="utilisateurTaille"/>

                    <label for="utilisateurPoids">Poids de l'utilisateur :</label>
                    <input type="int" placeholder="poids" name="utilisateurPoids"/>

                    <label for="utilisateurAge">Age de l'utilisateur :</label>
                    <input type="int" placeholder="age" name="utilisateurAge"/>

                    <label for="utilisateurAdmin">Droit administrateur de l'utilisateur :</label>
                    <select name="utilisateurAdmin">
                        <option value=0>faux</option>
                        <option value=1>vrai</option>
                    </select>

                    <label for="utilisateurSubmit">Ajouter l'utilisateur</label>
                    <input type="submit" name="utilisateurSubmit1">
                </form>
            </div>
            <h3>Modifier un utilisateur :</h3>
            <div class="update_action">
                <form action="" method="post" name="utilisateurForm" class="form">
                    <label for="idUser">Numéro d'identification de l'utilisateur :</label>
                    <input type="int" placeholder="" name="idUser" />

                    <label for="utilisateurNom">Nouveau nom de l'utilisateur :</label>
                    <input type="text" placeholder="nom" name="utilisateurNom" />

                    <label for="utilisateurPrenom">Nouveau prenom de l'utilisateur :</label>
                    <input type="text" placeholder="prenom" name="utilisateurPrenom"/>

                    <label for="utilisateurMail">Nouveau mail de l'utilisateur :</label>
                    <input type="mail" placeholder="mail" name="utilisateurMail"/>

                    <label for="utilisateurPassword">Nouveau mot de passe de l'utilisateur :</label>
                    <input type="password" placeholder="mot de passe" autocomplete="off" name="utilisateurPassword"/>

                    <label for="utilisateurNumTel">Nouveau numero de telephone de l'utilisateur :</label>
                    <input type="tel" placeholder="numero telephone" name="utilisateurNumTel"/>

                    <label for="utilisateurTaille">Nouvelle taille de l'utilisateur :</label>
                    <input type="int" placeholder="taille" name="utilisateurTaille"/>

                    <label for="utilisateurPoids">Nouveau poids de l'utilisateur :</label>
                    <input type="int" placeholder="poids" name="utilisateurPoids"/>

                    <label for="utilisateurAge">Nouvel age de l'utilisateur :</label>
                    <input type="int" placeholder="age" name="utilisateurAge"/>

                    <label for="utilisateurAdmin">Est-t-il toujours administrateur (ou non) ?</label>
                    <select name="utilisateurAdmin">
                        <option value=0>faux</option>
                        <option value=1>vrai</option>
                    </select>

                    <label for="utilisateurSubmit">Modifier l'utilisateur</label>
                    <input type="submit" name="utilisateurSubmit2">
                </form>
            </div>
            <h3>Supprimer un utilisateur :</h3>
            <div class="delete_action">
                <form action="" method="post" name="utilisateurForm" class="form">
                    <label for="idUser">Numéro d'identification de l'utilisateur :</label>
                    <input type="int" placeholder="" name="idUser"/>

                    <label for="utilisateurSubmit">Supprimer l'utilisateur</label>
                    <input type="submit" name="utilisateurSubmit3">
                </form>
            </div>
            <h3>Selectionner un utilisateur en particulier :</h3>
            <div class="select_action">
                <form action="" method="post" name="utilisateurForm" class="form">
                    <label for="idUser">Numéro d'identification de l'utilisateur :</label>
                    <input type="int" placeholder="" name="idUser"/>

                    <label for="utilisateurSubmit">Afficher les infos de l'utilisateur</label>
                    <input type="submit" name="utilisateurSubmit4">
                </form>
            </div>
            <h3>Selectionner tous les utilisateurs :</h3>
            <div class="selectAll_action">
                <form action="" method="post" name="utilisateurForm" class="form">
                    <label for="utilisateurSubmit">Afficher tous les utilisateurs</label>
                    <input type="submit" name="utilisateurSubmit5">
                </form>
            </div>
        </div>
    </div>
</main>
<div class="aff_image"></div>
<div class="aff_imageBlog"></div>

<script src="../scripts/axios.min.js"></script>
<script src="../scripts/admin.js" defer></script>

<?php
//----- BLOG -----
if(isset($_POST["blogSubmit1"])){
    if(isset($_POST["blogTitle"]) && isset($_POST["blogContent"]) && isset($_POST["blogDate"])){
        $blogTitle = $_POST["blogTitle"];
        $blogContent = $_POST["blogContent"];
        $blogDate = $_POST["blogDate"];
        if(CreateBlog($conn, $blogTitle, $blogContent, $blogDate)){
            echo("Blog is created and stocked in the DB");
        }
        else{
            echo("Creation of the Blog FAILED");
        }
    }
}
if(isset($_POST["blogSubmit2"])){
    if(isset($_POST["blogId"]) && isset($_POST["blogTitle"]) && isset($_POST["blogContent"]) && isset($_POST["blogDate"])){
        $blogId = $_POST["blogId"];
        $blogTitle = $_POST["blogTitle"];
        $blogContent = $_POST["blogContent"];
        $blogDate = $_POST["blogDate"];
        if(UpdateBlog($conn,$blogId, $blogTitle, $blogContent, $blogDate)){
            echo("Blog is update and stocked in the DB");
        }
        else{
            echo("Update of the Blog FAILED");
        }
    }
}
if (isset($_POST["blogSubmit3"])){
    if(isset($_POST["blogId"])){
        $blogId = $_POST["blogId"];
        if(DeleteBlog($conn, $blogId)){
            echo("Blog is deleted from the DB");
        }
        else{
            echo("Delete of the Blog FAILED");
        }
    }
}
if (isset($_POST["blogSubmit4"])){
    if(isset($_POST["blogId"])){
        $blogId = $_POST["blogId"];
        if($blog = SelectBlog($conn, $blogId)){
            $fieldsOfBlog = ["Numéro d'identification","Titre","Contenue","Date du post"];
            showTable($blog,false,$fieldsOfBlog);
        }
        else{
            echo("Selection of the blog FAILED");
        }
    }
}
if (isset($_POST["blogSubmit5"])){
    if($blog = SelectAllBlog($conn)){
        $fieldsOfBlog = ["Numéro d'identification","Titre","Contenue","Date du post"];
        showTable($blog,true,$fieldsOfBlog);
    }
    else{
        echo("Selection of all Blog FAILED");
    }
}



//----- CODES -----
if(isset($_POST["codesSubmit1"])){
    if(isset($_POST["codesCodes"]) and isset($_POST["codesIdType"]) and isset($_POST["codesDateD"]) and isset($_POST["codesDateF"])){
        $codesCodes = $_POST["codesCodes"];
        $codesIdType = $_POST["codesIdType"];
        $codesDateD = $_POST["codesDateD"];
        $codesDateF = $_POST["codesDateF"];
        if(CreateCodes($conn, $codesCodes, $codesIdType, $codesDateD, $codesDateF)){
            echo "Code is created and stored in the DB";
        }else{
            echo "Creation of the code FAILED";
        }
    }
}
if(isset($_POST["codesSubmit2"])){
    if(isset($_POST["codesCodes"]) and isset($_POST["codesIdType"]) and isset($_POST["codesDateD"]) and isset($_POST["codesDateF"])){
        $codesCodes = $_POST["codesCodes"];
        $codesIdType = $_POST["codesIdType"];
        $codesDateD = $_POST["codesDateD"];
        $codesDateF = $_POST["codesDateF"];
        if(UpdateCodes($conn, $codesCodes, $codesIdType, $codesDateD, $codesDateF)){
            echo "Code is UPDATE in the db";
        }else{
            echo "Code update FAILED";
        }
    }
}
if(isset($_POST["codesSubmit3"])){
    if(isset($_POST["codesCodes"])){
        $codesCodes = $_POST["codesCodes"];
        if(DeleteCodes($conn, $codesCodes)){
            echo("<p>delete codes success</p>");
        }else{
            echo("<p>delete codes failure</p>");
        }
    }
}
if(isset($_POST["codesSubmit4"])){
    if(isset($_POST["codesIdType"])){
        $codesIdType = $_POST["codesIdType"];
        if($ret_codesType = SelectCodes_type($conn, $codesIdType)){
            $fieldsOfCode = ["Code promo","Numéro du produit lié","Date de début","Date de fin"];
            showTable($ret_codesType,false,$fieldsOfCode);
        }else{
            echo "Select code FAILED";
        }
    }
}
if(isset($_POST["codesSubmit5"])){
    if($ret_codesType = SelectAllCodes($conn)){
        $fieldsOfCode = ["Code promo","Numéro du produit lié","Date de début","Date de fin"];
        showTable($ret_codesType,true,$fieldsOfCode);
    }else{
        echo "Selection of all the codes FAILED";
    }
}



//----- IMAGES -----
if(isset($_POST["imagesSubmit1"])){
    if(isset($_POST["imagesIdBlog"])){
        $imagesIdBlog = $_POST["imagesIdBlog"];
        include("../lib/upload.php");
        if($imageName == ''){
            echo("<br>IMAGE NON CREE DANS LA BASE");
        }
        else{ 
            if (CreateImage($conn, $imageName, $imagesIdBlog)){
                echo("<br>IMAGE CREE");
            }
            else{
            echo("<br>IMAGE NON CREE DANS LA BASE");
        
            }
        }
    }
}
if(isset($_POST["imagesSubmit2"])){
    if(isset($_POST["imagesNom"]) && isset($_POST["imagesIdBlog"])){
        $imagesNom = $_POST["imagesNom"];
        $imagesIdBlog = $_POST["imagesIdBlog"];
        if(UpdateImage($conn,$imagesNom, $imagesIdBlog)){
            echo("Image is update and stocked in the DB");
        }
        else{
            echo("Update of the Image FAILED");
        }
    }
}




//----- OPINION -----
if(isset($_POST["opinionSubmit1"])){
    if(isset($_POST["iduser"]) && isset($_POST["text"]) && isset($_POST["grade"])){
        $iduser = $_POST["iduser"];
        $text = $_POST["text"];
        $grade = $_POST["grade"];
        if(CreateOpinion($conn, $iduser, $text, $grade)){
            echo("Opinion is created and stocked in the DB");
        }
        else{
            echo("Creation of the opinion FAILED");
        }
    }
}
if(isset($_POST["opinionSubmit2"])){
    if(isset($_POST["id"]) && isset($_POST["iduser"]) && isset($_POST["text"]) && isset($_POST["grade"])){
        $id = $_POST["id"];
        $iduser = $_POST["iduser"];
        $text = $_POST["text"];
        $grade = $_POST["grade"];
        if(UpdateOpinion($conn, $id, $iduser, $text, $grade)){
            echo("Opinion is update and stocked in the DB");
        }
        else{
            echo("Update of the opinion FAILED");
        }
    } 
}
if(isset($_POST["opinionSubmit3"])){
    if(isset($_POST["iduser"])){
        $iduser = $_POST["iduser"];
        if(DeleteOpinion($conn, $iduser)){
            echo("Opinion is deleted from the DB");
        }
        else{
            echo("Delete of the opinion FAILED");
        }
    }  
}
if(isset($_POST["opinionSubmit4"])){
    if(isset($_POST["iduser"])){
        $iduser = $_POST["iduser"];
        if($opinion = SelectOpinion($conn, $iduser)){
            $fieldsOfOpinion = ["Numéro d'identification","Numéro d'identification d'utilisateur","Opinion","Nombre d'étoiles"];
            showTable($opinion,false,$fieldsOfOpinion);
        }
        else{
            echo("Selection of the opinion FAILED");
        }
    }   
}
if(isset($_POST["opinionSubmit5"])){
    if($opinion = SelectAllOpinion($conn)){
        $fieldsOfOpinion = ["Numéro d'identification","Numéro d'identification d'utilisateur","Opinion","Nombre d'étoiles"];
        showTable($opinion,true,$fieldsOfOpinion);
    }
    else{
        echo("Selection of the opinion FAILED");
    }
}



//----- PRODUCTS -----
if(isset($_POST["produitSubmit1"])){
    if(isset($_POST["produitNom"]) && isset($_POST["produitPrix"]) && isset($_POST["produitDateD"]) && isset($_POST["produitDateF"]) && isset($_POST["produitAgeMin"]) && isset($_POST["produitAgeMax"]) && isset($_POST["produitPoidsMin"]) && isset($_POST["produitPoidsMax"]) && isset($_POST["produitTailleMin"]) && isset($_POST["produitTailleMax"])){
        $produitNom = $_POST["produitNom"];
        $produitPrix = $_POST["produitPrix"];
        $produitDateD = $_POST["produitDateD"];
        $produitDateF = $_POST["produitDateF"];
        $produitAgeMin = $_POST["produitAgeMin"];
        $produitAgeMax = $_POST["produitAgeMax"];
        $produitPoidsMin = $_POST["produitPoidsMin"];
        $produitPoidsMax = $_POST["produitPoidsMax"];
        $produitTailleMin = $_POST["produitTailleMin"];
        $produitTailleMax = $_POST["produitTailleMax"];
        if(CreateProduit($conn,$produitNom,$produitPrix,$produitDateD,$produitDateF,$produitAgeMin,$produitAgeMax,$produitPoidsMin,$produitPoidsMax,$produitTailleMin,$produitTailleMax)){
            echo("Product is created and stocked in the DB");
        }
        else{
            echo("Creation of the product FAILED");
        }
    }
}
if(isset($_POST["produitSubmit2"])){
    if(isset($_POST["produitNom"]) && isset($_POST["produitPrix"]) && isset($_POST["produitDateD"]) && isset($_POST["produitDateF"]) && isset($_POST["produitAgeMin"]) && isset($_POST["produitAgeMax"]) && isset($_POST["produitPoidsMin"]) && isset($_POST["produitPoidsMax"]) && isset($_POST["produitTailleMin"]) && isset($_POST["produitTailleMax"])){
        $produitNom = $_POST["produitNom"];
        $produitPrix = $_POST["produitPrix"];
        $produitDateD = $_POST["produitDateD"];
        $produitDateF = $_POST["produitDateF"];
        $produitAgeMin = $_POST["produitAgeMin"];
        $produitAgeMax = $_POST["produitAgeMax"];
        $produitPoidsMin = $_POST["produitPoidsMin"];
        $produitPoidsMax = $_POST["produitPoidsMax"];
        $produitTailleMin = $_POST["produitTailleMin"];
        $produitTailleMax = $_POST["produitTailleMax"];
        if(UpdateProduit($conn,$produitNom,$produitPrix,$produitDateD,$produitDateF,$produitAgeMin,$produitAgeMax,$produitPoidsMin,$produitPoidsMax,$produitTailleMin,$produitTailleMax)){
            echo("Product named : '$produitNom' is updated in the DB");
        }
        else{
            echo("Update of the product FAILED : Is the product in the DB?");
        }
    }
}
if(isset($_POST["produitSubmit3"])){
    if(isset($_POST["produitNom"])){
        $produitName = $_POST["produitNom"];
        if(DeleteProduit($conn,$produitNom)){
            echo("Product named : '$produitNom' is deleted from the DB");
        }
        else{
            echo("Delete of the product FAILED | Is the product named : '$produitNom' in the DB?");
        }
    }
}
if(isset($_POST["produitSubmit4"])){
    if(isset($_POST["produitNom"])){
        $produitNom = $_POST["produitNom"];
        if($produit = SelectProduit($conn,$produitNom)){
            $fieldsOfProduct = ["Numéro du produit", "Nom","Prix","Date de début","Date de fin","Age minimum","Age maximum","Poids minimum","Poids maximum","Taille minimum","Taille maximum"];
            showTable($produit,false,$fieldsOfProduct);
        }
        else{
            echo("Selection FAILED| Is the product named : '$produitNom' in the DB?");
        }
    } 
}
if(isset($_POST["produitSubmit5"])){
    if($produit = SelectAllProduit($conn)){
        $fieldsOfProduct = ["Numéro du produit", "Nom","Prix","Date de début","Date de fin","Age minimum","Age maximum","Poids minimum","Poids maximum","Taille minimum","Taille maximum"];
        showTable($produit,true,$fieldsOfProduct);
    }
    else{
        echo("Selection FAILED");
    }
}



//----- PROMOS -----
if(isset($_POST["promosSubmit1"])){
    if(isset($_POST["productId"]) && isset($_POST["promosNom"]) && isset($_POST["percentage"]) && isset($_POST["promosDateD"]) && isset($_POST["promosDateF"]) && isset($_POST["promosDescription"])){
        $idProduct = $_POST["productId"];
        $promosNom = $_POST["promosNom"];
        $percentage = $_POST["percentage"];
        $promosDateD = $_POST["promosDateD"];
        $promosDateF = $_POST["promosDateF"];
        $promosDescription = $_POST["promosDescription"];
        if(CreateDiscount($conn, $idProduct, $promosNom, $percentage, $promosDateD, $promosDateF, $promosDescription)){
            echo("Discount is created and stocked in the DB");
        }
        else{
            echo("Creation of the Discount FAILED");
        }
    }
}
if(isset($_POST["promosSubmit2"])){
    if(isset($_POST["Id"]) && isset($_POST["productId"]) && isset($_POST["promosNom"]) && isset($_POST["percentage"]) && isset($_POST["promosDateD"]) && isset($_POST["promosDateF"]) && isset($_POST["promosDescription"])){
        $id = $_POST["Id"];
        $idProduct = $_POST["productId"];
        $promosNom = $_POST["promosNom"];
        $percentage = $_POST["percentage"];
        $promosDateD = $_POST["promosDateD"];
        $promosDateF = $_POST["promosDateF"];
        $promosDescription = $_POST["promosDescription"];
        if(UpdateDiscount($conn,$id, $idProduct, $promosNom, $percentage, $promosDateD, $promosDateF, $promosDescription)){
            echo("Discount is update and stocked in the DB");
        }
        else{
            echo("Update of the Discount FAILED");
        }
    }
}
if(isset($_POST["promosSubmit3"])){
    if(isset($_POST["Id"])){
        $id = $_POST["Id"];
        if(DeleteDiscount($conn, $id)){
            echo("Discount is deleted from the DB");
        }
        else{
            echo("Delete of the Discount FAILED");
        }
    }
}
if(isset($_POST["promosSubmit4"])){
    if(isset($_POST["Id"])){
        $id = $_POST["Id"];
        if($discount = SelectDiscount($conn, $id)){
            $fieldsOfDiscount = ["Numéro de la promo","Numéro du produit lié","Nom de la promo","Pourcentage","Date de début","Date de fin","Description"];
            showTable($discount,false,$fieldsOfDiscount);
        }
        else{
            echo("Selection FAILED");
        }
    }
}
if(isset($_POST["promosSubmit5"])){
    if($discount = SelectAllDiscount($conn)){
        $fieldsOfDiscount = ["Numéro de la promo","Numéro du produit lié","Nom de la promo","Pourcentage","Date de début","Date de fin","Description"];
        showTable($discount,true,$fieldsOfDiscount);
    }
    else{
        echo("Selection FAILED");
    }
}



//----- RESERVATIONS -----
if(isset($_POST["reservationSubmit1"])){
    if(isset($_POST["reservationIdUser"]) && isset($_POST["reservationPoidsUser"]) && isset($_POST["reservationTailleUser"]) && isset($_POST["reservationAgeUser"]) && isset($_POST["reservationIdProduit"]) && isset($_POST["reservationDate"])){
        $reservationIdUser = $_POST["reservationIdUser"];
        $reservationPoidsUser = $_POST["reservationPoidsUser"];
        $reservationTailleUser = $_POST["reservationTailleUser"];
        $reservationAgeUser = $_POST["reservationAgeUser"];
        $reservationIdProduit = $_POST["reservationIdProduit"];
        $reservationDate = $_POST["reservationDate"];
        if(CreateReservation($conn,$reservationIdUser,$reservationPoidsUser,$reservationTailleUser,$reservationAgeUser,$reservationIdProduit,$reservationDate)){
            echo("Reservation is created and stocked in the DB");
        }
        else{
            echo("Creation of the Reservation FAILED");
        }
    }
}
if(isset($_POST["reservationSubmit2"])){
    if(isset($_POST["reservationIdUser"]) && isset($_POST["reservationPoidsUser"]) && isset($_POST["reservationTailleUser"]) && isset($_POST["reservationAgeUser"]) && isset($_POST["reservationIdProduit"]) && isset($_POST["reservationDate"])){
        $reservationIdUser = $_POST["reservationIdUser"];
        $reservationPoidsUser = $_POST["reservationPoidsUser"];
        $reservationTailleUser = $_POST["reservationTailleUser"];
        $reservationAgeUser = $_POST["reservationAgeUser"];
        $reservationIdProduit = $_POST["reservationIdProduit"];
        $reservationDate = $_POST["reservationDate"];
        if(UpdateReservation($conn,$reservationIdUser,$reservationPoidsUser,$reservationTailleUser,$reservationAgeUser,$reservationIdProduit,$reservationDate)){
            echo("Reservation named : '$reservationIdUser' is updated in the DB");
        }
        else{
            echo("Update of the Reservation FAILED");
        }
    
    }
}
if(isset($_POST["reservationSubmit3"])){
    if(isset($_POST["reservationIdUser"])){
        $reservationIdUser = $_POST["reservationIdUser"];
        if(DeleteReservation($conn,$reservationIdUser)){
            echo("Reservation named : '$reservationIdUser' is deleted from the DB");
        }
        else{
            echo("Delete of the Reservation FAILED");
        }
    
    }
}
if(isset($_POST["reservationSubmit4"])){
    if(isset($_POST["reservationIdUser"])){
        $reservationIdUser = $_POST["reservationIdUser"];
        if($reservation = SelectReservation($conn,$reservationIdUser)){
            $fieldsOfReservation = ["Numéro de la réservation","Ididentifiant utilisateur lié","Poids de l'utilisateur","Taille de l'utilisateur","Age de l'utilisateur'","Produit lié","Date de réservation"];
            showTable($reservation,false,$fieldsOfReservation);
        }
        else{
            echo("Selection FAILED");
        }
    }
}
if(isset($_POST["reservationSubmit5"])){
    if($reservation = SelectAllReservation($conn)){
        $fieldsOfReservation = ["Numéro de la réservation","Ididentifiant utilisateur lié","Poids de l'utilisateur","Taille de l'utilisateur","Age de l'utilisateur'","Produit lié","Date de réservation"];
        showTable($reservation,true,$fieldsOfReservation);
    }
    else{
        echo("Selection FAILED");
    }
}



//----- USERS -----
if(isset($_POST["utilisateurSubmit1"])){
    if(isset($_POST["utilisateurNom"]) && isset($_POST["utilisateurPrenom"]) && isset($_POST["utilisateurMail"]) && isset($_POST["utilisateurPassword"]) && isset($_POST["utilisateurNumTel"]) && isset($_POST["utilisateurTaille"]) && isset($_POST["utilisateurPoids"]) && isset($_POST["utilisateurAge"]) && isset($_POST["utilisateurAdmin"])){
        $utilisateurNom = $_POST["utilisateurNom"];
        $utilisateurPrenom = $_POST["utilisateurPrenom"];
        $utilisateurMail = $_POST["utilisateurMail"];
        $utilisateurPassword = $_POST["utilisateurPassword"];
        $utilisateurNumTel = $_POST["utilisateurNumTel"];
        $utilisateurTaille = $_POST["utilisateurTaille"];
        $utilisateurPoids = $_POST["utilisateurPoids"];
        $utilisateurAge = $_POST["utilisateurAge"];
        $utilisateurAdmin = $_POST["utilisateurAdmin"];

        if(CreateUser($conn,$utilisateurNom,$utilisateurPrenom,$utilisateurMail,$utilisateurPassword,$utilisateurNumTel,$utilisateurTaille,$utilisateurPoids,$utilisateurAge,$utilisateurAdmin)){
            echo("User is created and stocked in the DB");
        }
        else{
            echo("Creation of the User FAILED");
        }
    }
}
if(isset($_POST["utilisateurSubmit2"])){
    if(isset($_POST["utilisateurNom"]) && isset($_POST["utilisateurPrenom"]) && isset($_POST["utilisateurMail"]) && isset($_POST["utilisateurPassword"]) && isset($_POST["utilisateurNumTel"]) && isset($_POST["utilisateurTaille"]) && isset($_POST["utilisateurPoids"]) && isset($_POST["utilisateurAge"]) && isset($_POST["utilisateurAdmin"])){
        $idUser = $_POST["idUser"];
        $utilisateurNom = $_POST["utilisateurNom"];
        $utilisateurPrenom = $_POST["utilisateurPrenom"];
        $utilisateurMail = $_POST["utilisateurMail"];
        $utilisateurPassword = $_POST["utilisateurPassword"];
        $utilisateurNumTel = $_POST["utilisateurNumTel"];
        $utilisateurTaille = $_POST["utilisateurTaille"];
        $utilisateurPoids = $_POST["utilisateurPoids"];
        $utilisateurAge = $_POST["utilisateurAge"];
        $utilisateurAdmin = $_POST["utilisateurAdmin"];
        if(UpdateUser($conn,$idUser,$utilisateurNom,$utilisateurPrenom,$utilisateurMail,$utilisateurPassword,$utilisateurNumTel,$utilisateurTaille,$utilisateurPoids,$utilisateurAge,$utilisateurAdmin)){
            echo("User is updated in the DB");
        }
        else{
            echo("Update of the User FAILED ");
        }
    }
}
if(isset($_POST["utilisateurSubmit3"])){
    if(isset($_POST["idUser"])){
        $idUser = $_POST["idUser"];
        if(DeleteUser($conn,$idUser)){
            echo("User is deleted from the DB");
        }
        else{
            echo("Delete of the User FAILED");
        }
    }
}
if(isset($_POST["utilisateurSubmit4"])){
    if(isset($_POST["idUser"])){
        $idUser = $_POST["idUser"];
        if($user = SelectUser($conn,$idUser)){
            $fieldsOfUser = ["Identifiant de l'utilisateur","Nom","Prénom","Mail","Mot de passe","Numéro de téléphone","Taille","Poids","Age","Est-il administrateur ?"];
        showTable($user,false,$fieldsOfUser);
        }
        else{
            echo("Selection of user FAILED ");
        }
    }
}
if(isset($_POST["utilisateurSubmit5"])){
    if($user = SelectAllUser($conn)){
        $fieldsOfUser = ["Identifiant de l'utilisateur","Nom","Prénom","Mail","Mot de passe","Numéro de téléphone","Taille","Poids","Age","Est-il administrateur ?"];
        showTable($user,true,$fieldsOfUser);
    }
    else{
        echo("Selection of user FAILED ");
    }
}



?>

<?php 

include("../pages/footer.php");
include("../db/db_disconnect.php");

?>