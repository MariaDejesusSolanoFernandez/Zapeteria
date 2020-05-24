<?php
include("../php/conexion.php");
$codigo=$_REQUEST['txtcodigo'];
$precio=$_REQUEST['txtprecio'];
$color=$_REQUEST['txtcolor'];
$estilo=$_REQUEST['txtestilo'];
$talla=$_REQUEST['txttalla'];
$cantidad=$_REQUEST['txtcantidad'];
$query="Update zapatos set precio='$precio',color='$color',estilo='$estilo',talla='$talla',cantidad='$cantidad' where codigo=$codigo";
$resultado=mysqli_query($cnn,$query);
if ($resultado){$msg="Se actualizo";}
else{$msg="Error!";}
header("Location: ../php/indexzapatos.php?msg=$msg");

?>