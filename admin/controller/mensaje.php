<?php
include "../class/Mensaje.php";

if(!isset($_POST["nombre"])){
    header("location: ../../contacto.php");
    exit();
}

// Validar que los datos no esten vacios.


// Crear
$mensaje = new Mensaje(0, $_POST["nombre"], $_POST["telefono"],
 $_POST["correo"], $_POST["mensaje"]);

 $respuesta = $mensaje->create();

 if ($respuesta == "OK") {
    header("location: ../../contacto.php?codigo=1");
    exit();
 }

 header("location: ../../contacto.php?codigo=4&error=" . $respuesta);
