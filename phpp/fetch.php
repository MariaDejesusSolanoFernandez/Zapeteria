<?php
include('../phpp/db.php');
include('../phpp/function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM productos ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE codigo LIKE "%'.$_POST["search"]["value"].'%" ';

}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
		$image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
	}
	else
	{
		$image = '';
	}
	$sub_array = array();
	$sub_array[] = $image;
	$sub_array[] = $row["codigo"];
	$sub_array[] = $row["precio"];

	$sub_array[] = $row["descripcion"];
	$sub_array[] = $row["talla"];
	$sub_array[] = $row["estilo"];
	$sub_array[] = $row["cantidad"];

	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btnn  update">EDITAR</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btnnn delete">ELIMINAR</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>