<?php
$dsn="mysql:host=localhost;dbname=libreria";
$user="root";
$pass="";
try {
    $pdo=new PDO($dsn,$user,$pass);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>