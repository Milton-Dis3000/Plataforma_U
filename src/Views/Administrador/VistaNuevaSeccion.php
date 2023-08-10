<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Sección</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();

    $correoUsuario = isset($_SESSION["correoUsuario"]) ? $_SESSION["correoUsuario"] : "";
    $nombreRol = isset($_SESSION["nombreRol"]) ? $_SESSION["nombreRol"] : "Rol Desconocido";

    include $_SERVER["DOCUMENT_ROOT"] . "/src/Views/Administrador/permisos_nav.php";
    ?>

    <div>
        <h1>Nueva Sección</h1>
        <p>Correo: <?= $correoUsuario ?></p>
        <p>Rol: <?= $nombreRol ?></p>
        <!-- Resto del contenido de la nueva sección -->
    </div>
</body>

</html>