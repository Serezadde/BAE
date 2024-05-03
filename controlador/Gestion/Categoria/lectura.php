<?php
require "../../modelo/categoria.php";

$categoria = new Categoria();

$listadocategoria = $categoria->obtenerListadoCategoria();

foreach ($listadocategoria as $categoria) {
    echo "<tr>
    <th>" . $categoria->getId() . "</th>
    <th>" . $categoria->getNombre() . "</th>

    </tr>";
}
