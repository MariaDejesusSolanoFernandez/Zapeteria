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
<hr>
<form method="post" action="addza.php">
    
<div class="contenedor">
    <div class="tituloo">
<h1>Agregar Un Calzado</h1>
</div>
<form method="post" action="addza.php">

<div class="form-group">
<input type="text" name="txtcodigo" placeholder="codigo"  class="input__text"/>
</div>
<div class="form-group">

<input type="text" name="txtprecio" placeholder="precio"  class="input__text" />
</div>

<div class="form-group">
<input type="text" name="txtcolor" placeholder="color"  class="input__text" />
</div>
<div class="form-group">
<input type="text" name="txtestilo" placeholder="estilo"  class="input__text" />
</div>
<div class="form-group">
<input type="number" name="txttalla" placeholder="talla"  class="input__text" />
</div>
<div class="form-group">
<input type="text" name="txtcantidad" placeholder="cantidad"  class="input__text" />
</div>
<img style="float:right; margin=-10px; margin-top:-350px; " src="../imagenes/hispana_naranja.png" width="300px" height="300px"> 

<div class="btn__group"> 
<input type="submit" value="Agregar" class="btn btn__primary" />
<input type="reset" value="Cancelar" class="btn btn__danger" />
</div>

</form>
</body>
</html>



