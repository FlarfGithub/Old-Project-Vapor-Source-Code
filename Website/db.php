<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'YOURUSERNAME');
define('DB_PASSWORD', 'YOURPASSWORD');
define('DB_NAME', 'YOURDBNAME');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>