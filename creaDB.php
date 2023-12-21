<?php
// Credenziali di accesso al database
$servername = "nome_del_tuo_server_mysql";
$username = "tuo_nome_utente";
$password = "tua_password";

// Connessione al server MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Creazione del database
$sql_create_database = "CREATE DATABASE IF NOT EXISTS test";
if ($conn->query($sql_create_database) === TRUE) {
    echo "Database 'test' creato con successo<br>";
} else {
    echo "Errore durante la creazione del database: " . $conn->error;
}

// Selezione del database 'test'
$conn->select_db("test");

// Creazione della tabella 'user'
$sql_create_table = "CREATE TABLE IF NOT EXISTS user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabella 'user' creata con successo";
} else {
    echo "Errore durante la creazione della tabella: " . $conn->error;
}

// Chiusura della connessione
$conn->close();
?>