<?php 
    session_start();
    $_SESSION['username'] == '';
    $_SESSION['username'] == null;
    $_SESSION['loggedin'] != true;
    $_SESSION['loggedin'] == false;
    session_unset();
    session_destroy();
    header("Location: https://localhost/travel/");

?>