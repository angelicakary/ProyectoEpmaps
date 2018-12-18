<?php

	include "../../configuraciones/coneccion.php";//Contiene funcion que conecta a la base de datos

if(!empty($_POST)){

	$nombres 		= $_POST["nombre1"];
	$apellidos 		= $_POST["apellidos"];
	$cedula			= $_POST["cedula"];
	$telefono 		= $_POST["telefono"];
	$celular 		= $_POST["celular"];
	$direccion 		= $_POST["direccion"];
	$correo 		= $_POST["correo"];
	$rol 			= $_POST["rol"];
	$contrasena1 	= md5($_POST["contrasena1"]);
	$contrasena2 	= md5($_POST["contrasena2"]);
	$genero 		= $_POST["genero"];
	

	$file=mysqli_query($con, "SELECT * FROM usuarios WHERE correo=\"$correo\";");
	if(mysqli_num_rows($file) > 0)
	{
		header("location: ../../Vistas/Usuarios.php?nuevoerror");
	} else {
		if ($contrasena1==$contrasena2) {
			$sql = "INSERT INTO `usuarios` (`id`, `primer_apellido`, `segund_apellido`, `segund_nombre`, `primer_nombre`, `cedula`, `telefono`, `celular`, `direccion`, `correo`, `clave`, `rol`, `estado`, `imagen`, `genero`) VALUES (NULL, UPPER(\"$apellido1\"), UPPER(\"$apellido2\"), UPPER(\"$nombre2\"), UPPER(\"$nombre1\"), \"$cedula\", \"$telefono\", \"$celular\", \"$direccion\", \"$correo\", \"$contrasena1\", \"$rol\", '1', 'default.png', \"$genero\")";
			/*echo $sql;*/
			$query=mysqli_query($con, $sql);
			if ($query) 
			{
				header("location: ../../Vistas/Usuarios.php?addsuccess");
			}
			else
		    {
		        header("location: ../../Vistas/Usuarios.php?adderror");
		    }
		}else{
			header("location: ../../Vistas/Usuarios.php?claveserror");
		}
	}
	
}


?>