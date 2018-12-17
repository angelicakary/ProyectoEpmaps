<?php
include "../../configuraciones/coneccion.php";//Contiene funcion que conecta a la base de datos

if(!empty($_POST)){

	$id=$_POST["id"];

	$contra1= md5($_POST["contra1"]);
	$contra2= md5($_POST["contra2"]);
	
	if ($contra1==$contra2) 
	{
		$sql = "UPDATE usuarios SET password='$contra2' WHERE id='$id'";
		$update=mysqli_query($con, $sql);
	}

	if ($update) {
		// echo "actualizado con exito";
		header("location: ../../examples/contrauser.php?id=".$id."&contra");
	} else {
		// echo "hubo un error al actualizar los datos";
		header("location: ../../examples/contrauser.php?id=".$id."&error");
	}
}

?>