<?php 

	$conexion=mysqli_connect('localhost','root','','almacen');

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Admin - Almacen Veicor </title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estylus.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Nombre</td>
			<td>Correo</td>
			<td>usuario</td>
			<td>contraseña</td>
			<td>descripcion</td>	
		</tr>

		<?php 
        include("conexion.php");
		$sql="SELECT * from usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Correo'] ?></td>
			<td><?php echo $mostrar['Usuario'] ?></td>
			<td><?php echo $mostrar['Contraseña'] ?></td>
			<td><?php echo $mostrar['Descripcion'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>