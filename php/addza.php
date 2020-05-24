<?php
include("../php/conexion.php");
/*recibir los valores del formulario*/
$codigo=$_REQUEST['txtcodigo'];
$precio=$_REQUEST['txtprecio'];
$color=$_REQUEST['txtcolor'];
$estilo=$_REQUEST['txtestilo'];
$talla=$_REQUEST['txttalla'];
$cantidad=$_REQUEST['txtcantidad'];
/*Creamos la instruccion de sql para insertar*/
$query="Insert into zapatos values('$codigo','$precio','$color','$estilo',$talla,'$cantidad');";
$resultado=mysqli_query($cnn,$query);
if($resultado)
{ $msg="Calzado Agregado";}
else{
    $msg="No se pudo agregar";
}

header("Location: ../php/indexzapatos.php?msg=$msg");

?>  