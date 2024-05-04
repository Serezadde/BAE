<?php


require_once "conexion.php";
require_once "producto.php";


class Categoria{

    private $id;
    private $nombre;
    private $conexion;





    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    /*
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
    */


    public function crearCategoria($nombre) {
        
        $sql = $this->conexion->query("INSERT INTO categoria(nombre) VALUES ('$nombre')");
        if ($sql === TRUE) {
            $nuevo_id = $this->conexion->insert_id;
            return array('success' => true, 'mensaje' => 'Categoría creada correctamente, ID: ' . $nuevo_id);
        } else {
            return array('success' => false, 'mensaje' => 'Error al registrar: ' . $this->conexion->error);
        }
    }


    public function eliminarCategoria($id) {

        $sql = $this->conexion->query("DELETE FROM categoria WHERE id='$id'");
        if ($sql == 1) {
            return true; 
        } else {
            return false; 
        }
    }

    public function editarCategoria($id, $nombre) {
       

        $sql = $this->conexion->query("UPDATE categoria SET nombre='$nombre' WHERE id='$id'");
        if ($sql == 1) {
            return true; 
        } else {
            return false; 
        }
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
