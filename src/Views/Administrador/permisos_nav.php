<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/dist/output.css" rel="stylesheet">
    <!-- Data table plugin-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">



    <title>Vista Nav</title>

</head>

<body>

    <ul>

        <main class="flex flex-col md:flex-row h-screen w-full ">
            <section class="flex flex-col w-full md:w-1/5 bg-[#353A40] text-[#B2B2B2]">
                <div class=" p-4 mb-4">
                    <div class="flex justify-center items-center border-b border-gray-600 pb-2">
                        <img src="/src/Views/img/circlelogo.png" alt="Logo" class="w-14 h-14 mr-4">
                        <h2 class="text-xl">Universidad</h2>
                    </div>
                </div>

                <div class="p-4 mb-4">
                    <div class="flex flex-col border-b border-gray-600 pb-2">
                        <h2 class="text-xl">Admin</h2>
                        <h2 class="text-xl">Administrador</h2>
                    </div>
                </div>

                <div class="p-4 mb-4 flex flex-col ">
                    <h2 class="text-lg">MENU ADMINISTRACIÓN</h2>

                    <div class="flex flex-row items-center border-b border-gray-600 pb-2 pt-3 cursor-pointer hover:bg-gray-100">
                        <span class="cursor-pointer"><i class="fa-solid fa-user-gear mr-2"></i></span>

                        <form action="" method="post" enctype="multipart/form-data">
                            <button type="submit" class="text-xl">Permisos</button>
                        </form>
                    </div>

                    <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                        <span class="cursor-pointer"><i class="fa-solid fa-chalkboard-user mr-2"></i></span>
                        <button class="text-xl">Maestros</button>
                    </div>

                    <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                        <span class="cursor-pointer"><i class="fa-solid fa-graduation-cap mr-2"></i></span>
                        <button class="text-xl">Alumnos</button>
                    </div>

                    <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                        <span class="cursor-pointer"><i class="fa-solid fa-laptop-code mr-2"></i></span>
                        <button class="text-xl">Clases</button>
                    </div>

                </div>
            </section>

            <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

                <div class="p-4 mb-4 bg-[#ffffff] w-full h-auto flex md:shadow-sm">
                    <div class="pb-2 flex-grow flex items-center">
                        <span class="mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
                        <a href="src\Views\Administrador\permisos_nav.php">Home</a>
                    </div>

                    <div class="pb-2 ml-auto">
                        <button class="text-lg cursor-pointer">Administrador v</button>
                    </div>
                </div>


                <div class="p-4 mb-4  w-full h-auto flex ">
                    <div class="pb-2 flex-grow flex items-center">

                        <button class="text-[#353A40] text-2xl cursor-pointer">Dashboard</button>

                    </div>

                    <div class="pb-2 ml-auto">
                    <a href="src\Views\Administrador\permisos_nav.php">Home</a>
                        <button>Dashboard</button>

                    </div>
                </div>

                <!-- TABLE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

                <div class="container">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email/Usuario</th>
                                    <th>Permiso</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/connection.php");
                                $db = new DB(); // Crear una instancia de la clase DB
                                $pdo = $db->pdo; // Obtener el objeto PDO

                                $sql = $pdo->query("SELECT * FROM usuarios_login INNER JOIN roles ON usuarios_login.id_ul = roles.id_rol INNER JOIN usuarios_datos ON usuarios_login.datos_id = usuarios_datos.id_ud");
                                while ($resultado = $sql->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $resultado['id_ud'] ?></th>
                                        <th scope="row"><?php echo $resultado['correo'] ?></th>
                                        <th scope="row">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs">
                                                <?php echo $resultado['nombre_rol'] ?>
                                            </button>
                                        </th>
                                        <th scope="row">
                                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded text-xs">
                                                Activo
                                            </button>
                                        </th>
                                        <th>
                                            <a href="Formularios/EditarForm.php?id_ud=<?php echo $resultado['id_ud']; ?>">
                                                <button class="bg-gray-200 hover:bg-gray-300 text-gray-600 font-bold py-1 px-2 rounded text-xs">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                            </a>
                                        </th>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>



            </section>
        </main>


    </ul>


</body>

</html>