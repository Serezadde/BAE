<?php 


if(!empty($_POST["btneditar"])){
if(!empty($_POST["nombre"])){
$id=$_POST["id"];    
$nombre= $_POST["nombre"];

$sql=$conexion->query("UPDATE mesa SET nombre='$nombre' WHERE id= '$id'");

if($sql==1){
header("location:mesas2.php");

}else{
    echo "<div class= 'alert alert-danger'>Ocurrio Error/div>";
}


}else{
    echo "<div class= 'alert alert-warning'>Campo vacio</div>";
}

}
