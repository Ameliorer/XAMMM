

<?php
    // Connection form for admin and user
    //Ask to connect by asking mail and password
    session_start(); //Start or retrieve the session already started
    include('../db/db_connect.php');
    include('../crud/crud_users.php');
    $_SESSION = array();
    header('Location: /~XAMMM/index.php');
?>