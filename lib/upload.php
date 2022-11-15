<?php

/************************************************************
 * Script inspired
 * http://www.apprendre-php.com
 *************************************************************/

/************************************************************
 * const / data array and variables
 *************************************************************/

// Const
define('TARGET', '../img/');    // Repertoire cible
define('MAX_SIZE', 100000);    // Taille max en octets du fichier
define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels

// Data Array 
$extArray = array('jpg','gif','png','jpeg', 'JPG');    // Extensions autorisees
$imageInfos = array();

// Variables
$extension = '';
$message = '';
$imageName = '';

/************************************************************
 * Creation du repertoire cible si inexistant
 *************************************************************/
 if( !is_dir(TARGET) ) {
   if( !mkdir(TARGET, 0755) ) {
   exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
  }
 }

/************************************************************
 * Script d'upload
 *************************************************************/
if(!empty($_POST))
{
  // We check if the field is filled
  if( !empty($_FILES['fichier']['name']) )
  {
    // File extension recovery
    $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

    // Check the file extension
    if(in_array(strtolower($extension),$extArray))
    {
      //Get the dimensions of the file
      $imageInfos = getimagesize($_FILES['fichier']['tmp_name']);

      //We check the type of the image
      if($imageInfos[2] >= 1 && $imageInfos[2] <= 14)
      {
        // We check the dimensions and size of the image
        if(($imageInfos[0] <= WIDTH_MAX) && ($imageInfos[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE))
        {
          // Go thru the error array
          if(isset($_FILES['fichier']['error'])
            && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
          {
            // Rename the file
            $imageName = md5(uniqid()) .'.'. $extension;

            // If it's OK, we test the upload
            if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$imageName))
            {
              $message = 'Upload réussi !';
            }
            else
            {
              // Otherwise, a system error is displayed.
              $message = 'Problème lors de l\'upload !';
            }
          }
          else
          {
            $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
          }
        }
        else
        {
          // Otherwise error on the dimensions and size of the image
          $message = 'Erreur dans les dimensions de l\'image !';
        }
      }
      else
      {
        // Otherwise error on the type of the image
        $message = 'Le fichier à uploader n\'est pas une image !';
      }
    }
    else
    {
      // Otherwise an error is displayed for the extension
      $message = 'L\'extension du fichier est incorrecte !';
    }
  }
  else
  {
    // Otherwise on displays an error for the empty field
    $message = 'Veuillez remplir le formulaire svp !';
  }
}
?>
