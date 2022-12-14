<?php
/*

Cette page est le page de profile d'utilisateur où il peut consulter / modifier ses donnée et supprimmer ses reservations

inclue :
 - /~XAMMM/crud/crud_users.php
 - /~XAMMM/crud/crud_products.php
 - /~XAMMM/db/db_connect.php
 - /~XAMMM/pages/head.php
 - /~XAMMM/scripts/axios.min.js
 - /~XAMMM/scripts/user.js
 - /~XAMMM/user/verif_user.php

*/

include("../db/db_connect.php");
include("verif_user.php");
include("../pages/head.php");
include("../crud/crud_users.php");
include("../crud/crud_products.php");


?>

<?php 
//PHP functions for the user page
if(isset($_POST["checkPassword"])){
	$userPassword = $_POST["checkPassword"];
}

$products = SelectAllProduit($conn);


?>
<header id="user_header">
	<h1>Bienvenue sur votre page <?php echo($_SESSION["firstname"])?></h1>
	<p>Vous pouvez ici :</p>
	<ul id="menu_page">
		<li><a href='#user_infos'>Voir vos informations</a></li>
		<li><a href='#user_reservations'>Gérer vos réservations</a></li>
	</ul>
</header>

<main>
	<div id='user_infos'>
		<h2>Vos informations</h2>
	</div>
	<div id="checkPassword">
		<h2>Voulez-vous modifier vos informations ?</h2>
		<form method='post' action=''>
				<label for="checkPassword">Entrer votre mot de passe : </label>
				<input type="password" name="checkPassword" required="required" autocomplete="off">
				<input type="submit" name="submit">
		</form>
		<form method='post' action='' class="modifInformations">
			<label for="lastname">Nouveau nom : </label>
			<input type="text" name="lastname" required="required" value="<?php echo($_SESSION['lastName']); ?>">

			<label for="firstname">Nouveau prenom : </label>
			<input type="text" name="firstname" required="required" value="<?php echo($_SESSION['firstname']); ?>">

			<label for="mail">Nouveau mail : </label>
			<input type="email" name="email" required="required=" value="<?php echo($_SESSION['mail']); ?>">

			<label for="phoneNum">Nouveau numéro de téléphone : </label>
			<input type="text" name="phoneNum" required="required" value="<?php echo($_SESSION['phoneNum']); ?>">

			<label for="height">Nouvelle taille (en cm) : </label>
			<input type="int" name="height" required="required" value="<?php echo($_SESSION['height']); ?>">

			<label for="weight">Nouveau poids (en kg) : </label>
			<input type="int" name="weight" required="required" value="<?php echo($_SESSION['weight']); ?>">

			<label for="age">Nouvel age (en an) : </label>
			<input type="int" name="age" required="required" value="<?php echo($_SESSION['age']); ?>">

			<label for="submit">Modifier vos informations : </label>
			<input type="submit" name="modifInfos">
		</form>
	</div>
	<div id='user_reservations'>
		<h2>Vos réservations</h2>
	</div>
</main>

<a href='../index.php'>Retour accueil</a>
<script>
	let session = <?php echo(json_encode($_SESSION)); ?>;
	let mdp = <?php echo(json_encode(md5($userPassword))); ?>;
	let products = <?php echo(json_encode($products)); ?>;
</script>
<script src="../scripts/axios.min.js"></script>
<script src="../scripts/user.js" defer ></script>
</body>

<?php 

if(isset($_POST["lastname"]) && isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_POST["phoneNum"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["age"]) ){

	$idUser = $_SESSION['id'];
	$utilisateurNom = $_POST["lastname"];
	$utilisateurPrenom = $_POST["firstname"];
	$utilisateurMail = $_POST["email"];
	$utilisateurNumTel = $_POST["phoneNum"];
	$utilisateurTaille = $_POST["height"];
	$utilisateurPoids = $_POST["weight"];
	$utilisateurAge = $_POST["age"];
	$utilisateurAdmin = $_SESSION["admin"];

	
	$query = "SELECT `password` FROM `users` WHERE `id`='$idUser'";
	if($response=mysqli_query($conn, $query)){
        $return = mysqli_fetch_assoc($response);
		$userPasswordBase = $return['password'];

		if(UpdateUser($conn,$idUser,$utilisateurNom,$utilisateurPrenom,$utilisateurMail,$userPasswordBase,$utilisateurNumTel,$utilisateurTaille,$utilisateurPoids,$utilisateurAge,$utilisateurAdmin)){

			$_SESSION["lastName"] = $utilisateurNom;
			$_SESSION["firstName"] = $utilisateurPrenom;
			$_SESSION["mail"] = $utilisateurMail;
			$_SESSION["phoneNum"] = $utilisateurNumTel;
			$_SESSION["height"] = $utilisateurTaille;
			$_SESSION["weight"] = $utilisateurPoids;
			$_SESSION["age"] = $utilisateurAge;
		}
	}	
}
include("../pages/footer.html");
?>