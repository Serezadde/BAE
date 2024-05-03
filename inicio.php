<!DOCTYPE html>
<html>
<?php
include "componentes/head.php";
include "modelo/usuario.php";

?>

<head>
    <title>RESTAURANTE VILLA DE AGÜIMES</title>
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
            color: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .label {
            font-size: 14px;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="jumbotron">

            <h1>RESTAURANTE VILLA DE AGÜIMES</h1>

            <a href="inicio.php"><button button class="btn btn-primary">Sistema de Pedidos</button></a>
            <a href="vista/Acceso/inicio_sesion.php"><button button class="btn btn-primary">Administración</button></a>
            <br>
            <div class="label">Christian José Quintana Perera, Fernando Zerpa Niño y Moises Pestano</div>
            <br>
            <div class="label">Curso: 1º</div>
            <br>
            <div class="label">Ciclo: DAW</div>
        </div>
    </div>
</body>

</html>