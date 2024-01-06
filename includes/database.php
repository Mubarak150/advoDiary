<?php



try {
    $dsn = "mysql:host=localhost;dbname=diary";
    $dbpassword = "";
    $dbusername = "root";

    $pdo = new PDO($dsn, $dbusername, $dbpassword); 

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    

} catch (PDOException $e) {
    echo "Error Caught " .$e->getMessage();
}
