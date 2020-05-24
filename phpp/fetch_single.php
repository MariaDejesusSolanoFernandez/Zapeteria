<?php
include('../phpp/db.php');
include('../phpp/function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM productos
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["codigo"] = $row["codigo"];
		$output["precio"] = $row["precio"];
		$output["descripcion"] = $row["descripcion"];
		$output["talla"] = $row["talla"];
		$output["estilo"] = $row["estilo"];
		$output["cantidad"] = $row["cantidad"];
	
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>