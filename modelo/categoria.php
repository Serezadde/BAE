<?php

require_once "bd.php";
require_once "conexion.php";


class Categoria{
    private $db;
    private $id;
    private $nombre;






    function __construct()
    {
        $bd = new bd();
        $this->db = $bd->conectarBD();
    }

    function obtenerListadoCategoria()
    {
        try {
            $querySelect = "SELECT * FROM categoria";
            $instanciaDB = $this->db->prepare($querySelect);

            $instanciaDB->execute();

            if ($instanciaDB) {
                return $instanciaDB->fetchAll(PDO::FETCH_CLASS, "Categoria");
            } else {
                echo "Ocurrió un error inesperado al obtener el Listado de Biblioteca";
            }
        } catch (Exception $ex) {
            echo "Ocurrió un error: " . $ex->getMessage();
            return null;
        }
    }

    function crearCategoria()
    {

        try {

            $queryInsertar = "INSERT INTO categoria (id, nombre)
                                 VALUES ( :id, :nombre)";
            $instanciaDB = $this->db->prepare($queryInsertar);
            $instanciaDB->bindParam(":id", $this->id);
            $instanciaDB->bindParam(":nombre", $this->nombre);
           
            $instanciaDB->execute();

            if ($instanciaDB) {
                header("Location:categoria.php");
            } else {
                echo "Ocurrió un error inesperado";
            }
        } catch (Exception $ex) {
            echo "Ocurrió un error: " . $ex->getMessage();
            return null;
        }
    }


    function borrarCategoria()
    {
        $queryBorrar = "DELETE FROM categoria WHERE id = :idcategoria";
        $instanciaDB = $this->db->prepare($queryBorrar);
        $instanciaDB->bindParam(":idcategoria", $this->id);
        return $instanciaDB->execute();
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre 
     * @return self
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
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
