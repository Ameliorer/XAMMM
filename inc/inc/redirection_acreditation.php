<?php
    
    session_start();
    //check the role of the personne ...
    if ($_SESSION['acreditation'] == 0){
        // ... redirection to admin index
        header('Location: ../admin/index.php');
    }
    else{
        // ... redirection to index
        header('Location: ../index.php'); //+++++++
    }
?>