<?php

	include "../../configuraciones/coneccion.php";//Contiene funcion que conecta a la base de datos

if(!empty($_POST)){

	$id=$_POST["id"];
	$nombre1 		= $_POST["nombre1"];
	$nombre2 		= $_POST["nombre2"];
	$apellido1 		= $_POST["apellido1"];
	$apellido2 		= $_POST["apellido2"];
	$cedula			= $_POST["cedula"];
	$telefono 		= $_POST["telefono"];
	$celular 		= $_POST["celular"];
	$direccion 		= $_POST["direccion"];
	$correo 		= $_POST["correo"];
	$rol 			= $_POST["rol"];
	$genero 		= $_POST["genero"];
	$estado 		= $_POST["estado"];
	
	$sql = "UPDATE usuarios SET `primer_apellido`=UPPER(\"$apellido1\"), `segund_apellido`=UPPER(\"$apellido2\"), `segund_nombre`=UPPER(\"$nombre2\"), `primer_nombre`=UPPER(\"$nombre1\"), `cedula`=\"$cedula\", `telefono`=\"$telefono\", `celular`=\"$celular\", `direccion`=\"$direccion\", `correo`=\"$correo\", `rol`=\"$rol\", `estado`=\"$estado\", `genero`=\"$genero\" WHERE id= \"$id\";";
	$query=mysqli_query($con, $sql);
	if($query)
    {
        header("location: ../../Vistas/Usuarios.php?updsuccess");
    }
    else
    {
        header("location: ../../Vistas/Usuarios.php?upderror");
    }

}


?>