<?php 
require_once "../../../modelo/conexion.php";
require_once "../../../modelo/categoria.php";

$categoria = new Categoria($conexion); 
if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    if ($categoria->eliminarCategoria($id)) {
        echo '<div class="alert alert-success">Categoría eliminada</div>';
    } else {
        echo '<div class="alert alert-danger">Ocurrió un error</div>';
    }
}


