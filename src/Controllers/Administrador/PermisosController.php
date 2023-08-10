<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

class PermisosController
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DB;
    }

    public function obtenerResultadosInnerJoin()
    {
        session_start();

        $query = "SELECT * FROM usuarios_login
                  INNER JOIN roles ON usuarios_login.id_ul = roles.id_rol
                  INNER JOIN usuarios_datos ON usuarios_login.datos_id = usuarios_datos.id_ud
                  WHERE usuarios_login.id_ul = :usuario_id";
        $stmt = $this->connection->pdo->prepare($query);
        $stmt->bindParam(':usuario_id', $_SESSION["rolIdUsuario"], PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$permisosController = new PermisosController();
$resultadosInnerJoin = $permisosController->obtenerResultadosInnerJoin();

include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/Administrador/VistaPermisos.php";
