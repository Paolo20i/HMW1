<?php
    $nomeserver="localhost";
$username="root";
$password="";
$database="es1";

    session_start();

    function controlAccesso() {
       
        if(isset($_SESSION['sess_id'])) {
            return $_SESSION['sess_id'];
        } else 
            return 0;
    }
?>