<?php
require_once "bd.php";
require_once "conexion.php";
function obtenerIcono($valor) {
    switch ($valor) {
        case 'true':
            return '<i class="fa-solid fa-check"></i>'; // Icono de check
            break;
        case 'false':
            return '<i class="fa-solid fa-circle-xmark"></i>'; // Icono de uncheck
            break;
        default:
            return $valor;
            break;
    }
}
?>
