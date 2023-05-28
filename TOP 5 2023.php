<?php
 require_once 'Autentication.php';
 if (!$userid = controlAccesso()) {
     header("Location: Login.php");
     exit;
 }


?>





<!DOCTYPE html>




<html>
    <head>
        <title> Giochi attesi nel 2023 </title>
        <meta name="viewport"
        content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="TOP 5 2023.CSS" />
        <meta charset="utf-8">

    </head>

    <body>

        

        <nav>
        <h1>Gameseddit</h1>
        
        <a href='Homepage.php' class='button'>HOME</a>
            <a href='Logout.php' class='button'>LOGOUT</a>
          </nav>



        <header id="hstart">
            <h1 class="titolo" > 
                5 Giochi più attesi del 2023
            </h1>
            <div class="Overlay">

            </div>
            
        </header>

        <div class="Profilo">

            <img src="img2/Whatsapp.senza.immagine.2019.1400x840.jpg">
            
        
            <h1> Alfò Paolo</h1>
            <h2> Ultimo aggiornamento: oggi <h2>
        </div>
        

        <div class="spazio">
        
        </div>

        

        

<section>

    <div class="blocco" >

        <div class="Numero">
            <h1>
                1.
            </h1>
        </div>
        
        

        <div class="Paragrafo" >
            <h1> ZELDA TEARS OF THE KINGDOM <br/> </h1>
            <h2> Voto Hype:9</h2>
            <p> Dopo il grande capitolo uscito nel 2017 che si aggiudicò il premio per miglior gioco dell'anno(GOTY), la grande multinazionale Nintendo ha annunciato nel suo ultimo E3 il sequel di ZELDA BOTW, un nuovo capitolo della saga di Zelda che tutti i fan aspettano con grande clamore. Sarà difficile superare il successo del  predecessore, ma già dai 2 trailer usciti si preannuncia uno dei migliori giochi di questo 2023, ma anche uno dei più attesi dai fan della saga e non.
                
            </p>
            <div class="foto">
                <img src="img2/Zelda.jpg">
            </div>
        </div>

    </div>

    <div class="blocco" >

        <div class="Numero" >
            <h1>
                2.<br/>
            </h1>
        </div>
       
        <div class="Paragrafo" >
            <h1> HOGWARTS LEGACY <br/> </h1>
            <h2> Voto Hype: 8.5 </h2>
            <p> Il videogioco fantasy per eccellenza è tra i più attesi dai fan di Harry Potter. L'action RPG permette di esplorare le terre e la scuola di magia di Hogwarts alla ricerca di tesori, segreti e avventure, il tutto in un mondo fantastico e pieno di nemici da affrontare con la propria bacchetta magica. Il gioco è gia uscito su PC , ma gli utenti di console dovranno aspettare Maggio per l'uscita definita su tutte le console.
            </p>
            <div class="foto">
                <img src="img2/Hogwarts Legacy.jfif">
            </div>
        </div>
    </div>

    <div class="blocco" >

        <div class="Numero" >
            <h1>
                3.<br/>
            </h1>
        </div>

        <div class="Paragrafo">
            <h1> ASSASSIN'S CREED MIRAGE <br/> </h1>
            <h2> Voto Hype: 8 </h2>
            <p> Il nuovo capitolo della saga di Assassin's creed approda esattamente 3 anni dopo l'uscita dell'ultimo capitolo Assassin's creed Valhalla. Il titolo, ambientato nella vecchia Baghdad, promette un ritorno al vecchio stile della saga , vede l'introduzione per la prima volta dell'inespugnabile capitale degli assassini. Il videogioco è tra i più attesi del 2023.
            </p>
            <div class="foto">
                <img src="img2/AC.png">
            </div>
        </div>
    </div>

    <div class="blocco" >

        <div class="Numero" >
            <h1>
                4.<br/>
            </h1>
        </div>

        <div class="Paragrafo">
            <h1>
                MARVEL'S SPIDERMAN 2 <br/>
            </h1>
            <h2> Voto Hype:8 </h2>
            <p>
                Il nuovo capitolo di Spiderman realizzato da Imnsoniac è sicuramente il videogioco Marvel, ma in generale a tema supereroe, più apprezzato dai fan non solo nel comparto grafico, ma nella godibilità ed esplorabilità tra i vari palazzi della città. Il gioco è esclusiva per Playstation 5 e presenta un comparto grafico all'avanguardia, con una risoluzione, effetti d'ombra e dettagli mai visti coi predecessori. Il pre order è quasi obbligatorio!
            </p>
            <div class="foto">
                <img src="img2/Spiderman2.jpg">
            </div>
        </div>
    </div>

    <div class="blocco" >

        <div class="Numero" >
            <h1>
                5.<br/>
            </h1>
        </div>

       <div class=" Paragrafo"> 
            <h1> FINAL FANTASY XVI <br/> 
            </h1>
            <h2> Voto Hype: 7.5 </h2>
            <p>
                Final Fantasy XVI è un must buy per tutti gli amanti della saga. Una sintesi esplosiva tra il passato ed il futuro della saga, ambientato in un mondo fantasy con un innovativo sistema di combattimento, con una direzione artistica e colonna sonora eccellenti. Potrebbe pure essere un buon modo ,per chi non ha mai giocato ad un capitolo della saga , di avvicinarsi in questo fantastico universo targato Square Enix.
            </p>
            <div class="foto">
                <img src="img2/FinalFantasy16.jpeg">
            </div>

       </div>
    </div>
       


</section>
    


        <footer>
            <p class="fines" > 
                Creato da Alfò Paolo 1000030219 
            </p>
        </footer>
             
        
    </body>

</html>