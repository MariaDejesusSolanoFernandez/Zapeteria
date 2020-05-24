<?php
include("conexion.php");
$query="Select * From zapatos";
$resultado=mysqli_query($cnn,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/frm.css">
    <link rel="stylesheet" href="../css/frm.css">

    <title>Document</title>
</head>
<body>



<center>
        <img src="../imagenes/hispana_naranja.png" alt="">
    </center>
<header>

    </header>

   
    <div id="contenedor">
        <nav>
            <ul>
                <li><a href="http://localhost/zapateria/html/index.html">INICIO</a></li>
               
                <li>
                    <a href="http://localhost/zapateria/html/somos.html" id="referencia">¿QUIENES SOMOS?</a>
                    <ul id="popper">
                        <li><a href="http://localhost/zapateria/html/mivi.html">MISION Y VISION</a></li>
                     
                        <li><a href="http://localhost/zapateria/html/historia.html">HISTORIA</a></li>
                       
                    </ul>
                </li>
                <li><a href="http://localhost/zapateria/html/productos.html">NUESTROS PRODUCTOS</a></li>
                <li><a href="http://localhost/zapateria/html/login">ZONA RESTRINGIDA</a></li>
              
            </ul>
        </nav>

        
        <?php
        session_start();
if(isset($_SESSION["nombre"]))
{
    echo("Bienvenido $_SESSION[nombre]");
    
    echo("<a href=logout.php>Salir</a>");
    
}
else
{
    $smg="De sus credenciales para continuar";
    header("Location: ../html/login.html?msg=$msg");
}
?>
     
    </div>
  
    <script src="../java/popper.min.js"></script>
    <script>
        var referencia = document.getElementById("referencia");
        var popper = document.getElementById("popper");
        new Popper(referencia, popper, {
            placement: 'bottom-start'
        });
    </script>


<div class="contenedor-d">
    <CEnter>
        <Div class="titulo">
    <h1>CALZADO HISPANA</h1>
    <a class="boton" href="../phpp/index.php">Datatable</a>


<style type="text/css">


 .boton {
	border: 0px solid #ccc8c4; /*anchura, estilo y color borde*/
	padding: 15px; /*espacio alrededor texto*/
	background-color: #df5c3b; /*color botón*/
	color: #ffffff; /*color texto*/
	text-decoration: none; /*decoración texto*/
	text-transform: uppercase; /*capitalización texto*/
	font-family: 'Helvetica', sans-serif; /*tipografía texto*/
	border-radius: 25px; /*bordes redondos*/
	float: right;
	margin-top: 20px;
    margin: 20px;
    font-size:15px;
	
	}
</style>
    </div>
    </CEnter>
<div class="barra-buscador">
<form action="" class="formulario" method="post">  
<a href="../php/frmza.php" class="btn btn__nuevo">Agregar Calzado</a>
</div> 

<table>
<thead class="head">
<th>Codigo</th>
<th>Precio</th>
<th>Color</th>
<th>Estilo</th>
<th>Talla</th>
<th>Cantidad</th>
<td colspan="2">Acción</td>

</thead> 
<tbody>
    
<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['codigo']; ?></td>
					<td><?php echo $fila['precio']; ?></td>
					<td><?php echo $fila['color']; ?></td>
					<td><?php echo $fila['estilo']; ?></td>
					<td><?php echo $fila['talla']; ?></td>
                    <td><?php echo $fila['cantidad']; ?></td>
                    
					<td><a href="edita.php?codigo=<?php echo $fila['codigo']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?codigo=<?php echo $fila['codigo']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>
</tbody>
</table>
</div>
<hr size="2" width="100%" color="red" />




<footer class="footer-distributed">

    <div class="footer-left">

        <h3>CALZADO<span>HISPANA</span></h3>

        <p class="footer-links">
            <a href="http://localhost/zapateria/html/index.html">INICIO</a>
            ·
            <a href="http://localhost/zapateria/html/somos.html"> ¿QUIENES SOMOS?</a>
            ·
            <a href="http://localhost/zapateria/html/productos.html"> NUESTROS PRODUCTOS</a>
            
        
        </p>

        <p class="footer-company-name">Copyright © 2018 Hispana. Todos los derechos reservados. Desarrollado por MARIA DE JESUS SOLANO FERNANDEZ™</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Tierra Blanca 220, León, Gto. C.P. 37390</span> LEON GUANAJUATO</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>01 800 3156026</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="http://tiendaenlinea@hispana.mx/?">tiendaenlinea@hispana.mx</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span> CONECTAR</span>
            
        </p>

        <div class="footer-icons">

            <a href="https://www.facebook.com/CalzadoHispana"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/CalzadoHispana?lang=es"><i class="fa fa-twitter"></i></a>
            <a href="https://www.pinterest.es/calzadohispana/"><i class="fa fa-pinterest"></i></a>
            <a href="https://www.instagram.com/calzadohispana/"><i class="fa fa-instagram"></i></a>

        </div>

    </div>

</footer> 




</body>
</html>