<?php

$nomeserver="localhost";
$username="root";
$password="";
$database="es1";

require_once 'Autentication.php';

if (controlAccesso()) {
    header("Location: Homepage.php");
    exit;
}   


if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["conferma_password"])){

   
    $error = array();
    $connessione= mysqli_connect($nomeserver,$username,$password,$database);

    $nome = mysqli_real_escape_string($connessione, $_POST['nome']);


    if (strlen($_POST["password"]) < 8) {
        $error[] = "La password contiene meno di 8 caratteri";
    } 
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error[] = "Tipo di email non valida";
    } 
  
    if (strcmp($_POST["password"], $_POST["conferma_password"]) != 0) {
        $error[] = "Le password non coincidono";
    }
    else {
    
        $email = mysqli_real_escape_string($connessione, strtolower($_POST['email']));
        $em = mysqli_query($connessione, "SELECT * FROM utenti WHERE email = '".$email."'");
        if (mysqli_num_rows($em) > 0) {
            $error[] = "Email già registrata nel sito";
        }
    }

    if (count($error) == 0) {


        $nome = mysqli_real_escape_string($connessione, $_POST['nome']);
        $password = mysqli_real_escape_string($connessione, $_POST['password']);
        $password = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO utenti(nome, password,email) VALUES('$nome', '$password','$email')";

        
        if (mysqli_query($connessione, $query)) {
            $_SESSION["sess_email"] = $_POST["email"];
            $_SESSION["sess_id"] = mysqli_insert_id($connessione);
            mysqli_close($connessione);
            header("Location: Homepage.php");
            exit;
        } else {
            $error[] = "Errore di connessione al Database";
        }
    }
    mysqli_close($connessione);

}
else if (isset($_POST["nome"])) {
    $error = array("Riempi tutti i campi");
}

?>

<html>
    <head>
        <link rel='stylesheet' href='Subscription.css'>
    </head>
    <body>
        
        <h1>Benvenuto nuovo utente!</h1>
        <h2>Iscriviti gratuitamente al nostro sito compilando il form sottostante</h2>
        <main>
        <form name='signup' method='post' enctype='multipart/form-data' autocomplete='off'>
                    <?php
                        if(isset($error)){
                        foreach($error as $error){
                        echo '<span class="error">'.$error.'</span>';
                            };
                        };
                    ?>
                    <input type='text' name='nome' placeholder="Nome" required>
                    <input type='email' name='email' placeholder="Email" required>
                    <input type='password' name='password' placeholder="Password" required>
                    <input type='password' name='conferma_password' placeholder="Conferma la password" required>
                    <input type='submit' class='submit' name='submit' value='Registrati'>
                    <div class="login">Hai già un account? <a href="Login.php">Accedi</a></div>
                </form>
        </main>
    </body>
</html>