<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="/dist/output.css" rel="stylesheet">
  <title>Vista Nav</title>

</head>

<body>

  <ul>
    <?php
    if ($_SESSION["usuario"]["rol_id"] === 1) {
    ?>
      <main class="flex flex-col md:flex-row h-screen w-full ">
        <section class="flex flex-col w-full md:w-1/5 bg-[#353A40] text-[#B2B2B2]">
          <div class=" p-4 mb-4">
            <div class="flex justify-center items-center border-b border-gray-600 pb-2">
              <img src="/src/Views/img/circlelogo.png" alt="Logo" class="w-14 h-14 mr-4">
              <h2 class="text-xl">Universidad</h2>
            </div>
          </div>

          <div>
          <li><a href="#">Cerrar sesión (<?= $correoUsuario ?> - <?= $nombreRol ?>)</a></li> <!-- Mostrar el correo y el nombre del rol del usuario -->


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

              <form action="src\Views\Administrador\permisos_nav.php" method="post" enctype="multipart/form-data">
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
              <button class="text-xl cursor-pointer">Home</button>
            </div>

            <div class="pb-2 ml-auto">
              <button class="text-xl cursor-pointer">Administrador v</button>
            </div>
          </div>


          <div class="p-4 mb-4  w-full h-auto flex ">
            <div class="pb-2 flex-grow flex items-center">

              <button class="text-[#353A40] text-2xl cursor-pointer">Dashboard</button>

            </div>

            <div class="pb-2 ml-auto">
              <button>Home /</button>
              <button>Dashboard</button>

            </div>
          </div>

          <div class="bg-[#ffffff] p-4 mb-4 w-1/2 h-auto rounded-lg">
            <h2>Bienvenido/a</h2>
            <h3>Selecciona la acción que quieras realizar en las pestañas del menú de la izquierda</h3>
          </div>

        </section>
      </main>


    <?php

    }
    ?>

<!-- //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx// -->

    <?php
    if ($_SESSION["usuario"]["rol_id"] === 2) {
    ?>
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
              <h2 class="text-xl">Maestro</h2>
              <h2 class="text-xl">maestro maestro</h2>
            </div>
          </div>

          <div class="p-4 mb-4 flex flex-col ">
            <h2 class="text-lg">MENU MAESTRO</h2>

            <div class="flex flex-row items-center border-b border-gray-600 pb-2 pt-3 cursor-pointer hover:bg-gray-100">
              <span class="cursor-pointer"><i class="fa-solid fa-user-gear mr-2"></i></span>

          
            <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
              <span class="cursor-pointer"><i class="fa-solid fa-graduation-cap mr-2"></i></span>
              <button class="text-xl">Alumnos</button>
            </div>


          </div>
        </section>

        <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

          <div class="p-4 mb-4 bg-[#ffffff] w-full h-auto flex md:shadow-sm">
            <div class="pb-2 flex-grow flex items-center">
              <span class="mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
              <button class="text-xl cursor-pointer">Home</button>
            </div>

            <div class="pb-2 ml-auto">
              <button class="text-xl cursor-pointer">maestro maestro v</button>
            </div>
          </div>


          <div class="p-4 mb-4  w-full h-auto flex ">
            <div class="pb-2 flex-grow flex items-center">

              <button class="text-[#353A40] text-2xl cursor-pointer">Dashboard</button>

            </div>

            <div class="pb-2 ml-auto">
              <button>Home /</button>
              <button>Dashboard</button>

            </div>
          </div>

          <div class="bg-[#ffffff] p-4 mb-4 w-1/2 h-auto rounded-lg">
            <h2>Bienvenido/a</h2>
            <h3>Selecciona la acción que quieras realizar en las pestañas del menú de la izquierda</h3>
          </div>

        </section>
      </main>

    <?php
    }
    ?>
<!-- //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx// -->
    <?php
    if ($_SESSION["usuario"]["rol_id"] === 3) {
    ?>
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
              <h2 class="text-xl">Alumno</h2>
              <h2 class="text-xl">Sauderson Brecons</h2>
            </div>
          </div>

          <div class="p-4 mb-4 flex flex-col ">
            <h2 class="text-lg">MENU ALUMNOS</h2>

         

            <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
              <span class="cursor-pointer"><i class="fa-solid fa-graduation-cap mr-2"></i></span>
              <button class="text-xl">Ver Calificaciones</button>
            </div>

            <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
              <span class="cursor-pointer"><i class="fa-solid fa-laptop-code mr-2"></i></span>
              <button class="text-xl">Administra tus clases</button>
            </div>

          </div>
        </section>

        <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

          <div class="p-4 mb-4 bg-[#ffffff] w-full h-auto flex md:shadow-sm">
            <div class="pb-2 flex-grow flex items-center">
              <span class="mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
              <button class="text-xl cursor-pointer">Home</button>
            </div>

            <div class="pb-2 ml-auto">
              <button class="text-xl cursor-pointer">Sauderson Brecons v</button>
            </div>
          </div>


          <div class="p-4 mb-4  w-full h-auto flex ">
            <div class="pb-2 flex-grow flex items-center">

              <button class="text-[#353A40] text-2xl cursor-pointer">Dashboard</button>

            </div>

            <div class="pb-2 ml-auto">
              <button>Home /</button>
              <button>Dashboard</button>

            </div>
          </div>

          <div class="bg-[#ffffff] p-4 mb-4 w-1/2 h-auto rounded-lg">
            <h2>Bienvenido/a</h2>
            <h3>Selecciona la acción que quieras realizar en las pestañas del menú de la izquierda</h3>
          </div>

        </section>
      </main>
      >
    <?php
    }
    ?>

  </ul>


</body>

</html>