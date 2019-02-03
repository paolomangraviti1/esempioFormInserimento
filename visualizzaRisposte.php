<html>
    <head>
            <title>Risposte ottenute</title>
    </head>
    <body>
        <h1>Risposte ottenute</h1>
        <ul>
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
        $sql = "SELECT * FROM Risposte";
        
        // Invio della query al server DBMS, ottiene il reultSet della query (righe)
        $esitoQuerySQL = $conn->query($sql);
        
            // Itera tutte le righe del resultSet, ogni riga e' un array i cui elementi sono i campi.
            // Il valore del campo è possibile ottenerlo:
            // o specificando la posizione dell'array riga
            // o specificando la posizione con il nome del campo (dell'array riga)
           while ($row = $esitoQuerySQL->fetch_assoc())
           {
               // echo "<li>" . $row["1"]. "</li>";
               // echo "<li>" . $row["risposta"]. "</li>";
           }
    }
    $conn->close();
?>
        </ul>
    </body>
</html>
