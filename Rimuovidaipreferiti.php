<?php

require_once 'Autentication.php';
if (!$userid = controlAccesso()) exit;

rimuovi();


function rimuovi(){
    
    global $userid;
    $nomeserver="localhost";
    $username="root";
    $password="";
    $database="es1";
    $connessione= mysqli_connect($nomeserver,$username,$password,$database) or die(mysqli_error($connessione));

    $userid = mysqli_real_escape_string($connessione, $userid);
    
    $id=mysqli_real_escape_string($connessione, $_POST['id']);
    
    


    $query = "DELETE from saved where user = '$userid' AND id = '$id' ";
    error_log($query);
    

    if(mysqli_query($connessione, $query) or die(mysqli_error($connessione))) {
        echo json_encode(array('ok' => true));
        exit;
    }
    mysqli_close($connessione);
        echo json_encode(array('ok' => false));


    }