<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Empleado</title>
	<link rel="icon" href="imgs/ICONO.png">
	<link rel="stylesheet" href="css/consultare.css">
	<link rel = "stylesheet" href = " https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<style>
		table {
			border-collapse: collapse;
			color: #777;
			font: 16px Arial;
			padding: 4px;
			width: 800px;
			margin: 200px auto;
		}
		table td, table th{
			border: 1px dotted #ccc;
			padding: 8px;
			background-color: #ddd;
		}
		table th{
			background-color: #6099AA;
			color: #fff;
		}
	</style>
</head>
<body>
<h1 class="titulo">DPK NEW-CARS</h1>
<a href="consultar_empleado.php"><img class="icono" src="imgs/ICONO.png" alt=""></a>
	<?php  
		if($_GET){
			$id=$_GET['id'];
			$con = mysqli_connect('localhost','root','','proyecto_agil');
			$sql = mysqli_query($con, "SELECT * FROM anadir_empleado WHERE id =$id");
			$row = mysqli_fetch_array($sql);
		}
?>
	<table border="1px">
		<tr>
			<th>Foto</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Tipo Documento</th>
			<th>Documento</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Contraseña</th>	
		</tr>
 		<tr>
 			<td><?php echo $row['foto']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['tipo_documento']; ?></td>
			<td><?php echo $row['documento']; ?></td>
			<td><?php echo $row['direccion']; ?></td>
			<td><?php echo $row['telefono']; ?></td>
			<td><?php echo $row['celular']; ?></td>
			<td><?php echo $row['correo']; ?></td>
			<td><?php echo $row['contrasena']; ?></td>
		</tr>
	</table>
</body>
</html>


