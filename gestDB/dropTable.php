<?php
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }

    header('Access-Control-Allow-Origin: http://localhost:3000');
    header('Content-Type: application/json');

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'DELETE') {

        $tabella = isset($_GET['tabella']) ? $_GET['tabella'] : null;

        if($tabella) {
            include("conn.php");

            try {
                // Nome della tabella da eliminare
                $table_name = $tabella;

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
    } else  {
        echo "\n method non DELETE";
    }
?>