<?php


require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

class PermisosController
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DB;
    }

    public function mostrarPermisos()
    {
        session_start();
        $correoUsuario = isset($_SESSION["correoUsuario"]) ? $_SESSION["correoUsuario"] : "";
        $rolIdUsuario = isset($_SESSION["rolIdUsuario"]) ? $_SESSION["rolIdUsuario"] : "";

        // Conexión a la base de datos para obtener el nombre del rol
        $connection = new DB();
        $query = "SELECT nombre_rol FROM roles WHERE id_rol = :rol_id";
        $stmt = $connection->pdo->prepare($query);
        $stmt->bindParam(':rol_id', $rolIdUsuario, PDO::PARAM_INT);
        $stmt->execute();
        $resultadoRol = $stmt->fetch(PDO::FETCH_ASSOC);

        $nombreRol = isset($resultadoRol["nombre_rol"]) ? $resultadoRol["nombre_rol"] : "Rol Desconocido";

        // Pasar las variables de sesión a la vista
        $_SESSION["correoUsuario"] = $correoUsuario;
        $_SESSION["nombreRol"] = $nombreRol;

        include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/Administrador/VistaPermisos.php";
    }
}