<?php
$hostname = 'localhost'; 
$database = 'blog'; 
$username = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>
