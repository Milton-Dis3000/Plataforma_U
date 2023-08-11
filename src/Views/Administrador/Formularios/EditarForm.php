<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Permisos</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-1/2 p-4 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl mb-4">Editar Permiso</h1>

        <form method="post" action="src/Controllers/Administrador/procesar_editar.php" class="p-4">
            <?php
            require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");

            $db = new DB();
            $pdo = $db->pdo;

            $id_ud = $_REQUEST["id_ud"];

            $sql = "SELECT * FROM usuarios_login WHERE id_ul = :id_ud";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id_ud", $id_ud, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>

            <div class="mb-3 p-2">
                <label for="exampleInputEmail1" class="form-label">Email del Usuario</label>
                <input type="email" class="form-control p-2" name="Email" value="<?php echo $row["correo"]; ?>">
            </div>

            <select class="form-select mb-3 p-2" aria-label="Default select example" name="rol">
                <option selected disabled>Seleccionar Rol</option>
                <?php
                $sql_roles = "SELECT * FROM roles";
                $stmt_roles = $pdo->prepare($sql_roles);
                $stmt_roles->execute();

                while ($row_roles = $stmt_roles->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row_roles["id_rol"] . "'>" . $row_roles["nombre_rol"] . "</option>";
                }
                ?>
            </select>

            <input type="hidden" name="id_ud" value="<?php echo $id_ud; ?>">

            <button type="submit" class="btn btn-primary p-2">GUARDAR CAMBIOS</button>
        </form>

        <a href="javascript:history.back()" class="text-red-600 text-xs mt-2 block text-right"><i class="fas fa-times mr-1"></i>Regresar</a>
    </div>
</body>

</html>