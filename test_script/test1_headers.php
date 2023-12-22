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

// Recupera la richiesta HTTP
$method = $_SERVER['REQUEST_METHOD'];

// Manipola la richiesta in base al metodo HTTP
switch ($method) {
  case 'GET':
    get();
    break;
  case 'POST':
    post();
    break;
  case 'PUT':
    put();
    break;
  case 'DELETE':
    delete();
    break;
  default:
    notFound();
    break;
}

// Funzioni per manipolare la richiesta

function get() {
    // $prova = $_GET['pippo'];
    // echo "Risposta alla richiesta GET $prova\n ";
    
    // $qry = $_SERVER['QUERY_STRING'];

    // echo "$qry\n";

    // $info = curl_getinfo($ch);
    // if ($info != "") {
    //     echo "header arrivato\n";
    // } else {
    //     echo "header perso\n";
    // };

    header( "CUSTOM_HEADER: zio canide" );

    $data = array(
        'name' => 'FRED',
        'email' => 'john@example.com',
    );
    
    header('Content-Type: application/json');
    
    echo json_encode($data);
}

function post() {
  echo 'Risposta alla richiesta POST';
}

function put() {
  echo 'Risposta alla richiesta PUT';
}

function delete() {
  echo 'Risposta alla richiesta DELETE';
}

function notFound() {
  echo 'Metodo non supportato';
}
