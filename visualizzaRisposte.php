<?php
    /* parametri di connessione al RDBMS */
    $servername = "";   // Indirizzo del server DBMS
    $username = "";     // Utente autorizzato all'accesso
    $password = "";     // Password dell'utente
    $dbname = "";       // Nome del Database
    
    /* Connessione al server DBMS */
    $conn = new mysqli($servername, $username, $password, $dbname);
    /* Controllo su errore di connessione */
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else
    {
        /* Predisposizione della query SQL */
        $sql = "SELECT * FROM Risposte;')";
        
        // Invio della query al server DBMS
        $esitoQuerySQL = $conn->query($sql);
        
       
    }
    $conn->close();
?>
