<?php 
	session_start();

    include "../../configuraciones/coneccion.php";

    $id = $_POST['id'];


    $sql = "UPDATE usuarios SET estado=2 WHERE id= \"$id\";";
    $query=mysqli_query($con, $sql);

    if($query)
    {
        header("location: ../../Vistas/Usuarios.php?updsuccess");
    }
    else
    {
        header("location: ../../Vistas/Usuarios.php?upderror");
    }
?>