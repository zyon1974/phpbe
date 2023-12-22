<?php
    if ($_SERVER['REQUEST_METHOD'] === 'DEL') {

        $table = GET['tabella'];

        if($tabella) {
            include("conn.php");

            try {
                // Nome della tabella da eliminare
                $table_name = $table;

                // Query per eliminare la tabella
                $sql = "DROP TABLE $table_name";

                // Esecuzione della query
                $conn->exec($sql);

                echo "\nLa tabella '$table_name' è stata eliminata con successo.";

            } catch(PDOException $e) {
                echo "Errore: " . $e->getMessage();
            }

            // Chiusura della connessione
            $conn = null;
        } else {
            echo "\nSpecificare nome tabella da cancellare.";
            echo "\nSTabella non cancellata.";
        }
    }
?>