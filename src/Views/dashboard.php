<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/dist/output.css" rel="stylesheet">


</head>

<body>

    <?php
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

    include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/components/nav.php";
    ?>

    

</body>

</html>








</body>

</html>