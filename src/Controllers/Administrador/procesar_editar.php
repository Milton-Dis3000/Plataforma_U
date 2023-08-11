<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_ud = $_POST["id_ud"];  // Obtener el valor del parámetro id_ud

    $rol = $_POST["rol"];  // Obtener el valor del campo de selección de rol
    $email = $_POST["Email"];  // Obtener el valor del campo de email
    // Aquí debes realizar las validaciones y saneamiento de datos necesarios

    $sql = "UPDATE usuarios_login SET correo = :correo, id_rol = :id_rol WHERE id_ul = :id_ud";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":correo", $email);
    $stmt->bindParam(":id_rol", $rol);
    $stmt->bindParam(":id_ud", $id_ud);
    $stmt->execute();

    // Puedes redirigir al usuario a otra página después de la actualización
    header("Location: /src/Views/Administrador/Formularios/EditarForm.php?id_ud=" . $id_ud . "&success=1");
    exit();
}
