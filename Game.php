<?php 
    require_once 'Autentication.php';
    if (!$userid = controlAccesso()) {
        header("Location: Login.php");
        exit;
    }
?>



<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gameseddit</title>
   
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Gioco.css">
  </head>

  <body>
  <nav>
            <h1>Gameseddit</h1>
            
            
            <a href='Homepage.php' class='button'>HOME</a>
            <a href='Logout.php' class='button'>LOGOUT</a>
            
            
          </nav>
            
            
   
    <div class="Gioco">
          <?php 
        
        $nomeserver="localhost";
        $username="root";
        $password="";
        $database="es1";
        $connessione= mysqli_connect($nomeserver,$username,$password,$database) or die(mysqli_error($connessione));
        $userid = mysqli_real_escape_string($connessione, $userid);
        $query = "SELECT * FROM games order by tempo DESC LIMIT 1";
        $res_1 = mysqli_query($connessione, $query);

        while ($userinfo = mysqli_fetch_assoc($res_1)){

        $jsonData=json_decode($userinfo['content']);

        $titolo="Titolo: ";
        $titolo.=$jsonData->title;

        $descrizione="Descrizione: ";
        $descrizione.=$userinfo['descrizione'];

        $date="Data rilascio: ";
        $date.=$jsonData->date;

        $platform="Piattaforma: ";
        $platform.=$jsonData->platform;

        $publisher="Pubblicato da: ";
        $publisher.=$jsonData->publisher;

        echo '<h3>'. $titolo . '</h3>';
        $urlImmagine = $jsonData->image;
        echo '<img src="' . $urlImmagine . '">';
        echo '<p>' . $descrizione . '</p>';
        echo '<p>' . $date. '</p>';
        echo '<p>' . $platform . '</p>';
        echo '<p>' . $publisher . '</p>';
        }
      
      
    ?>

    </div>


    <section id="giochi">
    
        

    </section>
  </body>

</html>
