<?php 
    session_start();
    if($_SESSION['loggedin'] != true || $_SESSION['username'] == '' || $_SESSION['username'] == null){
        header("Location: https://localhost/travel/");
    }
?>