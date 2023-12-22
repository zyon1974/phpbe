<?php
    include("conn.php");

    try {
        // Query per ottenere la lista di tutte le tabelle nel database
        $tables_query = "SHOW TABLES";
        $tables_result = $conn->query($tables_query);
        $tables = $tables_result->fetchAll(PDO::FETCH_COLUMN);

        // Ciclo attraverso le tabelle
        if(!$tables) {
            echo("\nNon ci sono tabelle");
        } else {
            foreach ($tables as $table) {
                echo "\nTabella: $table";

                // Query per ottenere la lista dei campi della tabella
                $columns_query = "SHOW COLUMNS FROM $table";
                $columns_result = $conn->query($columns_query);
                $columns = $columns_result->fetchAll(PDO::FETCH_COLUMN);

                // Stampa la lista dei campi
                echo "\nCampi: " . implode(", ", $columns) . "";
                echo "\n----------------------";
            }
        }

    } catch(PDOException $e) {
        echo "Errore: " . $e->getMessage();
    }

    // Chiusura della connessione
    $conn = null;
?>