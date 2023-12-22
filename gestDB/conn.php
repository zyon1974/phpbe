<?php
    ini_set('display_errors', 1); //This will display error if any you can remove this after
    $servername = "db-mysql-fra1-95165-do-user-15409099-0.c.db.ondigitalocean.com";
    $username = "doadmin";
    $password = "AVNS_0ANXXNxQFdCH8s3jKdC"; //The one you set in ALTER USER
    $dbname = "defaultdb";
    $port = "25060";

    $options = array(
                  PDO::ATTR_PERSISTENT    => true,
                  PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
              );
   
    $dsn = 'mysql:host=' . $servername . ';port=' . $port. ';dbname=' . $dbname;

    // Create a new PDO instanace
    try{
        $conn = new PDO($dsn, $username, $password, $options);            
        
        // Selezione del database 'defaultdb'
        $conn->exec("USE defaultdb");
        echo "\nConnected successfully";
    }
    // Catch any errors
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }    
?>