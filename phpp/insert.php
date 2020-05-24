<?php
include('../phpp/db.php');
include('../phpp/function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO productos (codigo, precio, descripcion, talla, estilo, cantidad, image) 
			VALUES (:codigo, :precio, :descripcion, :talla, :estilo, :cantidad, :image)
		");
		$result = $statement->execute(
			array(
				':codigo'	=>	$_POST["codigo"],
				':precio'	=>	$_POST["precio"],
				':descripcion'	=>	$_POST["descripcion"],
				':talla'	=>	$_POST["talla"],
				':estilo'	=>	$_POST["estilo"],
				':cantidad'	=>	$_POST["cantidad"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Producto Agregado';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE productos
			SET codigo = :codigo, precio = :precio, descripcion = :descripcion, talla = :talla, estilo = :estilo, cantidad = :cantidad, image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':codigo'	=>	$_POST["codigo"],
				':precio'	=>	$_POST["precio"],
				':descripcion'	=>	$_POST["descripcion"],
				':talla'	=>	$_POST["talla"],
				':estilo'	=>	$_POST["estilo"],
				':cantidad'	=>	$_POST["cantidad"],

				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Se actualizo';
		}
	}
}

?>