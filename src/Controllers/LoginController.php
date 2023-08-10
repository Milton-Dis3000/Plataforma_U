<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

class LoginController
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DB;
    }

    public function index()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/login.php";
    }

    public function loggeo()
    {
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];

        $query = "SELECT * FROM usuarios_login WHERE correo = '$correo'";
        $stmt = $this->connection->pdo->query($query);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($resultado) {
            session_start();
            $_SESSION["usuario"] = $resultado;

            $_SESSION["correoUsuario"] = $resultado["correo"];
            $_SESSION["rolIdUsuario"] = $resultado["rol_id"];

            include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/dashboard.php";
        } else {
            echo "No existe";
        }
    }
}
