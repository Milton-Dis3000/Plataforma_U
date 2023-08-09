<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Controllers/LoginController.php");

$loginController = new LoginController();

$action = $_GET["action"]; 

switch ($action){
    case "index":
        $loginController->index();
        break;

    case "login":
        $loginController->loggeo();
        break;

    default:
        echo "No existe la ruta";
        break;
}