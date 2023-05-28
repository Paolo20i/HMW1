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


    if (!empty($_POST["email"]) && !empty($_POST["password"]) )
    {
       
        $connessione= mysqli_connect($nomeserver,$username,$password,$database) or die(mysqli_error($conn));
        

        $email = mysqli_real_escape_string($connessione, $_POST['email']);
        
        $query = "SELECT * FROM utenti WHERE email = '".$email."'"; 
        
       
        $res = mysqli_query($connessione, $query) or die(mysqli_error($connessione));;
        
        if (mysqli_num_rows($res) > 0) {
        
            $entry = mysqli_fetch_assoc($res);
            if (password_verify($_POST['password'], $entry['password'])) {

               
                $_SESSION["sess_email"] = $entry['email'];
                $_SESSION["sess_id"] = $entry['id'];
                
                
                header("Location: Homepage.php");
                mysqli_free_result($res);
                mysqli_close($connessione);
                exit;
            }
            
        }
        
        $error = "Email e/o password errati.";
    }
    else if (isset($_POST["email"]) || isset($_POST["password"])) {
     
        $error = "Inserisci email e password.";
    }

?>

<html>
    <head>
        <link rel='stylesheet' href='Login.css'>
    </head>
    <body>
       
        <h1>Benvenuto!</h1>
        <h2>Accedi al tuo account inserendo email e password</h2>
        
        <main>
        
        <form name='login' method='post'>
        <?php
                
                if (isset($error)) {
                    echo "<p class='error'>$error</p>";
                }
                
        ?>
                
                <div class="email">
                    <label for='email'>Email</label>
                    <input type='text' name='email' <?php if(isset($_POST["email"])){echo "value=".$_POST["email"];} ?>>
                </div>
                <div class="password">
                    <label for='password'>Password</label>
                    <input type='password' name='password' <?php if(isset($_POST["password"])){echo "value=".$_POST["password"];} ?>>
                </div>
                <div class="submit-container">
                    <div class="login-btn">
                        <input type='submit' value="ACCEDI">
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>