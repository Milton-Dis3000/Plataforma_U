<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

class NuevaSeccionController
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DB;
    }

    public function mostrarNuevaSeccion()
    {
        session_start();
        $correoUsuario = isset($_SESSION["correoUsuario"]) ? $_SESSION["correoUsuario"] : "";
        $nombreRol = isset($_SESSION["nombreRol"]) ? $_SESSION["nombreRol"] : "Rol Desconocido";

        include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/Administrador/VistaNuevaSeccion.php";
    }
}
?>