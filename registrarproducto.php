<?php

include("conexion.php");

$proveedor = $_POST["tipo"];
$nombre = $_POST["nombrepro"];
$precio   = $_POST["precio"];



//Registrar Producto
if(isset($_POST["btnregisterprod"]))
{
	$sqlgrabar = "INSERT INTO producto(Proveedor,Nombre,Precio) values ('$proveedor','$nombre','$precio')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Producto registrado con exito: $nombre'); window.location='Registroproductosadmin.HTML' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}
?>
