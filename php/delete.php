<?php
include("../php/conexion.php");
$codigo=$_GET["codigo"];
$query="delete From zapatos where codigo=$codigo";
$resultado=mysqli_query($cnn,$query);
if ($resultado){$msg="Se elimino el Calzado";}
else {$msg="No se pudo eliminar";}
header("Location: ../php/indexzapatos.php?msg=$msg");

?>