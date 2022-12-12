<?php
include "Conexion.php";

class Compra extends Conexion
{
    private $IDCompra;
    private $titulo;
    private $direccion;
    private $caracteristicas;
    private $contacto;


    public function __construct($IDCompra, $titulo, $direccion, $caracteristicas, $contacto)
    {
        $this->IDCompra = $IDCompra;
        $this->titulo = $titulo;
        $this->direccion = $direccion;
        $this->caracteristicas = $caracteristicas;
        $this->contacto = $contacto;

    }

    // METODOS (CRUD => CREATE, READ, UPDATE, DELETE)

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO compras(titulo, direccion, caracteristicas, contacto)" .
                "VALUES(?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "ssss",
            $this->titulo,
            $this->direccion,
            $this->caracteristicas,
            $this->contacto,
        );

        if ($prepare->execute()) {
            $this->cerrar();
            return "OK";
        }else{
            $this->cerrar();
            return "Error: " . $prepare->error;
        }
        
    }

    // METODOS READ [STATIC]

    public static function getAll()
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM compras";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $compras = [];

        foreach ($dataArray as $data) {
            $compra = new Compra($data[0], $data[1], $data[2], $data[3], $data[4]);
            array_push($compras, $compra);
        }

        return $compras;
    }



    // METODOS GET Y SET

    public function getIDCompra(): int
    {
        return $this->IDCompra;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function getCaracteristicas(): string
    {
        return $this->caracteristicas;
    }

    public function getContacto(): string
    {
        return $this->contacto;
    }

}