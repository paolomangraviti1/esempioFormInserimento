<?php

    /* parametri di connessione al RDBMS */
    $servername = "";   // Indirizzo del server DBMS
    $username = "";     // Utente autorizzato all'accesso
    $password = "";     // Password dell'utente
    $dbname = "";       // Nome del Database
    
    /* Inizializzazione delle variabili */
    /* L'array $_GET viene creato e inizializzato dall'interprete PHP del server
    $datoOpinione = $_GET["r"];

    /* Connessione al server DBMS */
    $conn = new mysqli($servername, $username, $password, $dbname);

    /* Controllo su errore di connessione */
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else
    {
        /* Predisposizione della query SQL */
        $sql = "INSERT INTO Risposte (id, risposta) VALUES (null, '".$datoOpinione".')";
        
        // Invio della query al server DBMS
        $esitoQuerySQL = $conn->query($sql);
        
        if ($esitoQuerySQL === TRUE) 
        {
            echo "La sua opinione e\' stata memorizzata, grazie.";
        }
        else 
        {
            echo "Errore: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>
