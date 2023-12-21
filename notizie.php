<?php
header("Access-Control-Allow-Origin: *");

// Verifica se la richiesta è di tipo GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    // Array di notizie di esempio
    $notizie_tecnologia = array(
        array(
            'titolo' => 'Titolo Notizia 1',
            'testo' => 'Testo della Notizia 1. Questa è una notizia di esempio.',
            'path_immagine' => 'immagine1.jpg'
        ),
        array(
            'titolo' => 'Titolo Notizia 2',
            'testo' => 'Testo della Notizia 2. Questa è un\'altra notizia di esempio.',
            'path_immagine' => 'immagine2.jpg'
        ),
        array(
            'titolo' => 'Titolo Notizia 3',
            'testo' => 'Testo della Notizia 3. Questa è un\'altra notizia di esempio.',
            'path_immagine' => 'immagine3.jpg'
        )
    );

    // Converte l'array in formato JSON
    $json_notizie = json_encode($notizie_tecnologia);

    // Imposta l'header della risposta come JSON
    header('Content-Type: application/json');

    // Restituisce l'array di notizie come JSON
    echo $json_notizie;

} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo 'Metodo richiesta è ' + $_SERVER['REQUEST_METHOD'];
    } else {
        // Se la richiesta non è di tipo GET, restituisci un errore
        header('HTTP/1.1 405 Method Not Allowed');
        echo 'Metodo non consentito';
    }
}

?>
