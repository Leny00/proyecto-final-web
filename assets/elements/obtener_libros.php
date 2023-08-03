<?php
require_once("assets/BD/bd.php");


$query= "SELECT titulo, tipo, precio, notas, fecha_pub FROM titulos";
$resultado=$pdo->prepare($query);
$resultado->execute();

$a=$resultado->fetchAll(PDO::FETCH_ASSOC);
foreach ($a as $filas) {
        echo "<div class='elemento'>";
        echo "<div class='card' style='width: 24rem;'>";
        echo "<div class='card-img'>";
        echo "<img src='assets/img/default2.jpg' class='card-img-top libro' alt='...'>";
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<div class='card-top'>";
        echo "<p class='card-title'>".$filas['titulo']."</p>";
        echo "<p class='card-type'>Genero: ".$filas['tipo']."</p>";
        echo "</div>";
        echo "<div class='description'>";
        echo "<p>".$filas['notas']."</p>";
        echo "</div>";
        echo "<div class='card-footer'>";
        echo "<p class='card-date'>publicado el: ".$filas['fecha_pub']."</p>";
        if ($filas['precio']!=null) {
            echo "<p class='card-price'><span>us</span><b>".$filas['precio']."</b></p>";
        }
        else{
           echo "<p class='card-price' style='font-size: 16px;'>No disponible</p>";
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
}
?>
