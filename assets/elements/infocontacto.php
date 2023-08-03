<?php
require_once '../BD/bd.php';
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$fecha= $_POST['fecha'];
$asunto= $_POST['asunto'];
$comentario= $_POST['comentario'];

$query = "INSERT INTO contacto (nombre, correo, fecha, asunto, comentario) 
          VALUES ('$nombre', '$correo', '$fecha', '$asunto', '$comentario')";

$resultado=$pdo->prepare($query);
$resultado->execute();

if ($resultado) {
    echo "<script>alert('Su comentario se ha realizado de manera exitosa');
    location.href='../../contacto.php';
    </script>";
}
else{
    echo "<script>alert('No se ha podido enviar su comentario :(');</script>";
}


?>