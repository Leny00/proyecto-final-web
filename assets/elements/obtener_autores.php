<?php
require_once("assets/BD/bd.php");

$query = "SELECT CONCAT(nombre,' ',apellido) as nombre_com, pais, estado, ciudad, telefono FROM autores";

$resultado=$pdo->prepare($query);
$resultado->execute();

$a=$resultado->fetchAll(PDO::FETCH_ASSOC);
foreach ($a as $filas) {
    echo"<div class='elemento'>";
    echo"<div class='card' style='width: 24rem;'>";
    echo"<div class='autores-top'>";
    echo"<div class='autor-img'>";
    echo"<img src='assets/img/default-logo.jpg' alt=''>";;
    echo"</div>";
    echo"<div class='autor-info'>";
    echo"<h5 class='nombre'>".$filas['nombre_com']."</h5>";
    echo"<p class='info'>".$filas['telefono']."</p>";
    echo"</div>";
    echo"</div>";
    echo"<p class='ubi'> <i class='fa-solid fa-map-pin'></i>".$filas['estado'].", ".$filas['ciudad'].", ".$filas['pais']."</p>";
    echo"</div>";
    echo"</div>";
}
?>

        
      
      
        
      
    