<html>
	<head>
		<title>HISPANA</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/data.css" />
		<link rel="stylesheet" href="../css/table.css" />

		


		<style>
		
		</style>
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
                <li><a href="http://localhost/zapateria/php/indexzapatos.php">ZONA RESTRINGIDA</a></li>
              
            </ul>
		</nav>
		</div>
   
   <script src="../java/popper.min.js"></script>
   <script>
	   var referencia = document.getElementById("referencia");
	   var popper = document.getElementById("popper");
	   new Popper(referencia, popper, {
		   placement: 'bottom-start'
	   });
   </script>







	
		<div class="container box">
		<center>
<img src="../imagenes2/lul.jpeg" alt="">
</center>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">AÑADIR PRODUCTO</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr class="color">
							<th width="10%">IMAGEN</th>
							<th width="35%">CODIGO</th>
							<th width="35%">PRECIO</th>
							<th width="35%">DESCRIPCION</th>
							<th width="35%">TALLA</th>
							<th width="35%">ESTILO</th>
							<th width="35%">CANTIDAD</th>
							<th width="10%">EDITAR</th>
							<th width="10%">ELIMINAR</th>
							
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
<div class="titulo">
				<center>	<h2> PRODUCTOS</h2></center>
					</div>
				</div>
				<div class="modal-body imageen">
				<center>
				<div class="tituloo">
					
					<label> Codigo:</label>
					</div>

					<input type="text" name="codigo" id="codigo"  class="diseño"/>
					<br />

					<div class="tituloo">
				
				
					<label>Precio:</label>
				
					</div>
					<input type="text" name="precio" id="precio"   class="diseño" />
					<br />
					<div class="tituloo">
		
					<label> Descripcion:</label>
				
					</div>
					<input type="text" name="descripcion" id="descripcion"  class="diseño" />
					<br />
					<div class="tituloo">
			
					<label>Talla:</label>
				
					</div>
					<input type="text" name="talla" id="talla"  class="diseño" />
					<br />
					<div class="tituloo">
				

					<label>Estilo:</label>

	</div>
					<input type="text" name="estilo" id="estilo"  class="diseño"/>
					<br />
					<div class="tituloo">
					
					<label>Cantidad:</label>
	
</div>
					<input type="text" name="cantidad" id="cantidad"  class="diseño" />
					<br />
	</center>
					<label>Seleccionar Imagen</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				

				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</form>
	</div>
</div>


<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],
		"responsive":true,
		"language":{


			url: 'js.json'
		}

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var firstName = $('#codigo').val();
		var firstName = $('#precio').val();
		var firstName = $('#descripcion').val();
		var firstName = $('#talla').val();
		var firstName = $('#estilo').val();

		var lastName = $('#cantidad').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}	
		if(codigo != '' && precio != '' && descripcion != ''  && talla != '' && estilo != '' && cantidad!= '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#codigo').val(data.codigo);
				$('#precio').val(data.precio);
				$('#descripcion').val(data.descripcion);
				$('#talla').val(data.talla);
				$('#estilo').val(data.estilo);
				$('#cantidad').val(data.cantidad);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Seguro que desea eliminar?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>



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

