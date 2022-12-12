<?php
include "../class/Compra.php";

if(!isset($_POST["titulo"])){
    header("location: ../pages/compras.php");
    exit();
}

// Validar que los datos no esten vacios.


// Crear
$compra = new Compra(0, $_POST["titulo"], $_POST["direccion"],
 $_POST["caracteristicas"], $_POST["contacto"]);

 $respuesta = $compra->create();

 if ($respuesta == "OK") {
    header("location: ../pages/compras.php?codigo=1");
    exit();
 }

 header("location: ../pages/compras.php?codigo=4&error=" . $respuesta);