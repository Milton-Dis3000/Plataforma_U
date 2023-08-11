<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_ud = $_POST["id_ud"];  

    $rol = $_POST["rol"];  
    $email = $_POST["Email"];  
  

    $sql = "UPDATE usuarios_login SET correo = :correo, id_rol = :id_rol WHERE id_ul = :id_ud";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":correo", $email);
    $stmt->bindParam(":id_rol", $rol);
    $stmt->bindParam(":id_ud", $id_ud);
    $stmt->execute();

  
    header("Location: /src/Views/Administrador/Formularios/EditarForm.php?id_ud=" . $id_ud);
    exit();
}
