<?php 
if(!empty($_GET["id"])){

$id=$_GET["id"];    

$sql=$conexion->query("DELETE FROM mesa WHERE id= '$id'");

if($sql==1){
    echo "<div class= 'alert alert-success'>Categoria eliminada</div>";

}else{
    echo "<div class= 'alert alert-danger'>Ocurrio Error</div>";
}

}

