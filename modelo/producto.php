<?php

require_once "bd.php";


class Producto
{
    private $db;
    private $id;
    private $nombre;
    private $precio;
    private $id_categoria;








function obtenerListadoCategoria(){
    
}

public function getId()
{
    return $this->id;
}

/**
 * @param mixed $id 
 * @return self
 */
public function setId($id): self
{
    $this->id = $id;
    return $this;
}

}