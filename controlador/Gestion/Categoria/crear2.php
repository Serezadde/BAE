<?php

if (!empty($_POST["btncrear"])) {
    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];

        $sql = $conexion->query("INSERT INTO categoria(nombre) VALUES ('$nombre')");
        if ($sql === TRUE) {
            $nuevo_id = $conexion->insert_id;
            echo '<div class="alert alert-success">Categoria creada correctamente, ID: '.$nuevo_id.'</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar: '.$conexion->error.'</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campo vacio</div>';
    }
}
