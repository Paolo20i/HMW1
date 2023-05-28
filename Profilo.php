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
    <link rel="stylesheet" href="Profilo.css">
    <script src="Profilo.js" defer></script>
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  </head>

  <body>
  <nav>
            <h1>Gameseddit</h1>
            <img class="gaming" src="img/Gaming.png"> 
            
            <a href='Homepage.php' class='button'>HOME</a>
            <a href='Logout.php' class='button'>LOGOUT</a>
            <script src="Profilo.js" defer></script>
            
            
          </nav>
            
            
         
          <h2>Lista dei giochi salvati</h2>

    <div class="Salvati">
          <?php 
        
        $nomeserver="localhost";
        $username="root";
        $password="";
        $database="es1";
        $connessione= mysqli_connect($nomeserver,$username,$password,$database) or die(mysqli_error($connessione));
        $userid = mysqli_real_escape_string($connessione, $userid);
        $query = "SELECT * FROM saved WHERE user = $userid";
        $res_1 = mysqli_query($connessione, $query);

        $querynome="SELECT nome FROM utenti WHERE id = $userid";
        $nomeutente=mysqli_query($connessione,$querynome);

        $Presentazione="Benvenuto ";
          $name=mysqli_fetch_assoc($nomeutente);
          $Presentazione.=$name['nome'];

          echo '<h2>' . $Presentazione . '</h2>';
        

        while ($userinfo = mysqli_fetch_assoc($res_1)){

      

        $jsonData=json_decode($userinfo['content']);

        echo '<h3>' . $jsonData->title . '</h3>';
        $urlImmagine = $jsonData->image;
        echo '<img src="' . $urlImmagine . '">';
        echo '<p>' .$userinfo['descrizione']. '</p>';
          
      }
      
      
    ?>

    </div>


    <section id="giochi">
    
        

    </section>
  </body>

</html>
