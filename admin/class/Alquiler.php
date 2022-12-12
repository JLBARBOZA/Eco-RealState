<?php
include "Conexion.php";

class Alquiler extends Conexion
{
    private $IDAlquiler;
    private $titulo;
    private $direccion;
    private $caracteristicas;
    private $contacto;
    private $precio;
    private $disponibilidad;


    public function __construct($IDAlquiler, $titulo, $direccion, $caracteristicas, $contacto, $precio, $disponibilidad)
    {
        $this->IDAlquiler = $IDAlquiler;
        $this->titulo = $titulo;
        $this->direccion = $direccion;
        $this->caracteristicas = $caracteristicas;
        $this->contacto = $contacto;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
    }

    // METODOS (CRUD => CREATE, READ, UPDATE, DELETE)

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO alquiler(titulo, direccion, caracteristicas, contacto, precio, disponibilidad)" .
                "VALUES(?, ?, ?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "ssssss",
            $this->titulo,
            $this->direccion,
            $this->caracteristicas,
            $this->contacto,
            $this->precio,
            $this->disponibilidad,
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

        $query = "SELECT * FROM alquiler";


        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $alquileres = [];

        foreach ($dataArray as $data) {
            $alquiler = new Alquiler($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);
            array_push($alquileres, $alquiler);
        }

        return $alquileres;
    }



    // METODOS GET Y SET

    public function getIDAlquiler(): int
    {
        return $this->IDAlquiler;
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

    public function getPrecio(): string
    {
        return $this->precio;
    }

    public function getDisponibilidad(): string
    {
        return $this->disponibilidad;
    }

}