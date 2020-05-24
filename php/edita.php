<?php
include("../php/conexion.php");
$codigo=$_GET['codigo'];
$query="Select * From zapatos where codigo=$codigo";
$resultado=mysqli_query($cnn,$query);
if ($reg=mysqli_fetch_array($resultado))
{
$precio=$reg["precio"];
$color=$reg["color"];
$estilo=$reg["estilo"];
$talla=$reg["talla"];
$cantidad=$reg["cantidad"];
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Calzado</title>
    <link rel="stylesheet" href="../css/frm.css">
</head>
<body>
<div class="contenedor">
<Div class="tituloo">
<h1>Edita Calzado</h1>
</div>
<hr>
<form method="post" action="updatez.php">
<label>Codigo</label>
<input type="text" name="txtcodigo" placeholder="codigo"  class="input__text"
value=<?php echo("$codigo"); ?> readonly />
<br>
<label>Precio: </label>
<input type="text" name="txtprecio" placeholder="precio"  class="input__text"
 value="<?php echo("$precio"); ?>" />
<br>
<label>Color: </label>
<input type="text" name="txtcolor" placeholder="color "  class="input__text"
 value="<?php echo("$color"); ?>" />
<br>
<label>Estilo: </label>
<input type="text" name="txtestilo" placeholder="estilo"  class="input__text"
 value="<?php echo("$estilo"); ?>" />
<br>
<label>Talla: </label>
<input type="text" name="txttalla" placeholder="talla"  class="input__text"
 value="<?php echo("$talla"); ?>" />
<br>
<label>Cantidad: </label>
<input type="text" name="txtcantidad" placeholder="cantidad"  class="input__text"
 value="<?php echo("$cantidad"); ?>" />
<br>
<img style="float:right; margin=-10px; margin-top:-450px; " src="../imagenes/hispana_naranja.png" width="300px" height="300px"> 


<div class="btn__group"> 
<input type="submit" value="Editar" class="btn btn__primary" />
<input type="reset" value="Cancelar" class="btn btn__danger" />
</div>
</form>
</div>
</body>
</html>