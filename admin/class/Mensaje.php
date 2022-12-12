<?php
include "Conexion.php";

class Mensaje extends Conexion
{
    private $IDMensaje;
    private $nombre;
    private $telefono;
    private $correo;
    private $mensaje;


    public function __construct($IDMensaje, $nombre, $telefono, $correo, $mensaje)
    {
        $this->IDMensaje = $IDMensaje;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->mensaje = $mensaje;

    }

    // METODOS (CRUD => CREATE, READ, UPDATE, DELETE)

    public function create()
    {
        $this->conectar();

        $query = "INSERT INTO mensajes(nombre, telefono, correo, mensaje)" .
                "VALUES(?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "ssss",
            $this->nombre,
            $this->telefono,
            $this->correo,
            $this->mensaje,
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

        $query = "SELECT * FROM mensajes";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $mensajes = [];

        foreach ($dataArray as $data) {
            $mensaje = new Mensaje($data[0], $data[1], $data[2], $data[3], $data[4]);
            array_push($mensajes, $mensaje);
        }

        return $mensajes;
    }



    // METODOS GET Y SET

    public function getIDMensaje(): int
    {
        return $this->IDMensaje;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function getCorreo(): string
    {
        return $this->correo;
    }

    public function getMensaje(): string
    {
        return $this->mensaje;
    }

}