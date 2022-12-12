<?php

class Conexion
{
    public $link;

    public function conectar() {
        $this->link = mysqli_connect("localhost", "root", "", "ecorealstate", 3307);
    }

    public function cerrar() {
        $this->link->close();
    }

}