<?php
$hostname = "db-mysql-fra1-95165-do-user-15409099-0.c.db.ondigitalocean.com";  // Nome host del database
$username = "doadmin";            // Nome utente del database
$password = "AVNS_0ANXXNxQFdCH8s3jKdC";                // Password del database
$dbname   = "defaultdb";           // Nome del database

// Connessione al database
$conn = new mysqli($hostname, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

echo "Connessione al database riuscita!";
// Puoi eseguire ulteriori operazioni sul database qui, se necessario

// Chiudi la connessione
$conn->close();
?>