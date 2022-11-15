<?php
//Form to test the upload of an image 

//Include
include("head.php");
include("../lib/upload.php"); //important this is the fonction used 

//Form
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    <legend>Formulaire</legend>
            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
            <input type="submit" name="submit" value="Uploader" />
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés .</p>
</form>

<?php
include("footer.php");

?>