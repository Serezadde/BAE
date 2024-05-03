<!DOCTYPE html>
<html>
<?php
include "../../componentes/head.php";


// Verificar si el usuario ya está autenticado, si lo está, redirigirlo a la página de administración
// (Asegúrate de ajustar esta lógica según cómo manejes la autenticación en tu aplicación)
// Ejemplo:
// if (usuario_autenticado()) {
//     header("Location: vista/Administración/administración_menu.php");
//     exit();
// }
?>
<head>
    <title>Iniciar Administración</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container-fluid {
            text-align: center;
            margin-top: 50px;
        }
        .btn {
            font-size: 16px;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .label {
            font-size: 14px;
            color: #333;
        }
        .input-text {
            padding: 8px;
            margin: 5px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1>Iniciar Administración</h1>
        <?php
        // Si el usuario no está autenticado, mostrar el formulario de inicio de sesión
        include "../../controlador\Acceso\inicio_sesion.php"; 
        ?>
        <form id="inisioSesionForm" target="inisio_sesion.php" method="POST">
            <label class="label" for="usuario">Usuario:</label><br>
            <input type="text" class="input-text" name="usuario" id="usuario"><br>
            <label class="label" for="password">Password:</label><br>
            <input type="password" class="input-text" name="password" id="password"><br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </form>
        <a href="../../inicio.php" class="btn btn-primary">Cancelar</a>
    </div>
</body>
</html>
