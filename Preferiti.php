<?php

require_once 'Autentication.php';
if (!$userid = controlAccesso()) exit;

$_SESSION['preferiti'] = true;

pref();

function pref(){
    
    global $userid;
    $nomeserver="localhost";
    $username="root";
    $password="";
    $database="es1";
    $connessione= mysqli_connect($nomeserver,$username,$password,$database) or die(mysqli_error($connessione));


    $userid = mysqli_real_escape_string($connessione, $userid);
    
    $id=mysqli_real_escape_string($connessione, $_POST['id']);
    $title = mysqli_real_escape_string($connessione, $_POST['title']);
    $image = mysqli_real_escape_string($connessione, $_POST['image']);
    $descrizione=mysqli_real_escape_string($connessione, $_POST['short_description']);
    

    $query = "SELECT * FROM saved WHERE user = '$userid' AND id = '$id' ";
    $res = mysqli_query($connessione, $query) or die(mysqli_error($connessione));

    if(mysqli_num_rows($res) > 0) {
            echo json_encode(array('ok' => true));
            exit;
        }
   
    $query = "INSERT INTO saved(user, content,id,descrizione) VALUES('$userid', JSON_OBJECT('title', '$title', 'image', '$image'),'$id','$descrizione')";
    error_log($query);

    if(mysqli_query($connessione, $query) or die(mysqli_error($connessione))) {
        echo json_encode(array('ok' => true));
        exit;
    }
    mysqli_close($connessione);
        echo json_encode(array('ok' => false));


    }






