<?php
    $nomeserver="localhost";
    $username="root";
    $password="";
    $database="es1";

    session_start();
    session_destroy();

    header('Location: index.php');
?>