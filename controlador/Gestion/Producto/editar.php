<?php

if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["id"]) && !empty($_POST["nombre"]) && !empty($_POST["precio"]) && !empty($_POST["seleccionCat"])) {
        include "../../../modelo/conexion.php";
        $id = $_POST["id"];  
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $selCat = $_POST["seleccionCat"];


        $sql = $conexion->query("UPDATE producto SET nombre='$nombre', precio='$precio', id_categoria='$selCat' WHERE id='$id'");
        if ($sql === TRUE) {
            header("Location:producto2.php");
            exit; // Importante para detener la ejecución del script después de redirigir
        } else {
            echo "<div class='alert alert-danger'>Ocurrió un error al actualizar el producto: " . $conexion->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Todos los campos son obligatorios</div>";
    }
}
?>
