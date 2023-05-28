<?php 

  
    require_once 'Autentication.php';
    if (!$userid = controlAccesso()) {
        header("Location: Login.php");
        
        exit;
    }
?>





<html>

<?php 
$nomeserver="localhost";
$username="root";
$password="";
$database="es1";


    $connessione= mysqli_connect($nomeserver,$username,$password,$database);
    $userid = mysqli_real_escape_string($connessione, $userid);

    $query = "SELECT * FROM utenti WHERE id = $userid";
    $res_1 = mysqli_query($connessione, $query);
    $userinfo = mysqli_fetch_assoc($res_1);   
  ?>




  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gameseddit</title>
    <link rel="stylesheet" href="Homepage.css">
    <script src="Homepage.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    
  
  </head>

  <body>

    <nav>
            <h1>Gameseddit</h1>
            <img class="gaming" src="img/Gaming.png"> 
            <a id="botton1">Shooter</a>
            <a id="botton2">PVP</a>
            <a id="botton3">Fantasy</a>
            <a id="botton4">Anime</a>
            <a id="botton5">Strategy</a>
            <select id=myDropdown>
              <option value="">Menù</option>
              <optgroup label="Navigazione">
                <option value="Profilo"><a href="Profilo.php">Profilo</a></option>
                <option value="TOP 5 2023"><a href="TOP 5 2023.html">Top 5 2023 redazione</option>
                <option value="Logout"><a href="Logout.php">Logout</a></option>
              </optgroup>
          
          </select>
            
            
            
          </nav>

         
          
          </div>
            
          <h1 class="titolo" >Benvenuto su Gameseddit!</h1>
          <h2>Qui troverai un sacco di giochi gratuiti in base alla categoria scelta</h2>
          <h3>Fai click sul tasto "aggiungi ai preferiti" per salvarli sul tuo profilo</h3>
          <h4>Doppio click sul cuore per il like!</h4>
          

          <a id="botton">Inizia!</a>
          <p class="boh">oppure...</p>
          <form>
          
          <input type='text' placeholder="Cerca piattaforma" id='ricerca'>
          <input type='submit' id='submit' value='Cerca'>
      
           </form>

          

          


    <section id="giochi">
    
        

    </section>
  </body>

</html>

