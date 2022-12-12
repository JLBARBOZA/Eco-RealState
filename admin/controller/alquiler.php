<?php
include "../class/Alquiler.php";

if(!isset($_POST["titulo"])){
    header("location: ../pages/alquileres.php");
    exit();
}

// Validar que los datos no esten vacios.


// Crear
$alquiler = new Alquiler(0, $_POST["titulo"], $_POST["direccion"],
 $_POST["caracteristicas"], $_POST["contacto"], $_POST["precio"], $_POST["disponibilidad"]);

 $respuesta = $alquiler->create();

 if ($respuesta == "OK") {
    header("location: ../pages/Alquileres.php?codigo=1");
    exit();
 }

 header("location: ../pages/Alquileres.php?codigo=4&error=" . $respuesta);