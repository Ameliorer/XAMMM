
<?php
    
    session_start();
    //check the role of the personne ...
    if ($_SESSION['admin'] == 1){
        // ... redirection to admin index
        header('Location: ../admin/index.php');
    }
    else if ($_SESSION['admin'] == 0){
        // ... redirection to index
        header('Location: ../user/index.php'); //+++++++
    }
?>