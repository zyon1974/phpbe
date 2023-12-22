<?php
    include("conn.php");

    try {
        // Dati da inserire nel database
        $username = "utente123";
        $pwd = password_hash("password123", PASSWORD_DEFAULT); // Cripta la password
        $nome = "Mario";
        $cognome = "Rossi";
        $data_inserimento = date("Y-m-d H:i:s"); // Ottiene la data corrente

        // Query SQL per l'inserimento dei dati nella tabella
        $sql = "INSERT INTO user3 (username, pwd, nome, cognome, data_inserimento)
                VALUES (:username, :pwd, :nome, :cognome, :data_inserimento)";

        // Preparazione della query
        $stmt = $conn->prepare($sql);

        // Associazione dei parametri
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $password);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cognome', $cognome);
        $stmt->bindParam(':data_inserimento', $data_inserimento);

        // Esecuzione della query
        $stmt->execute();

        echo "\nRecord inserito con successo.";

    } catch(PDOException $e) {
        echo "\nErrore: " . $e->getMessage();
    }

    // Chiusura della connessione
    $conn = null;
?>
