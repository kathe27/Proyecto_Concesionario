<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar</title>
	<link rel="icon" href="imgs/ICONO.png">
	<link rel = "stylesheet" href = " https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/consultar_empleado.css"> 
	<style>
		table {
			border-collapse: collapse;
			color: #777;
			font: 16px Arial;
			padding: 4px;
			margin: -250px auto;
			width: 800px;
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
	<form action="" method="get" id="consultar_empleado">
		<fieldset>
			<h1>CONSULTAR</h1>
			<a href="menu_logueo.php"><img src="imgs/cars.png" alt=""></a>
			<div>
				<input type="number" id="documento" name="documento" placeholder="Digitar Documento De Identidad" data-validation="length" data-validation-length="min9">
			</div>			
			<div>
			<br>
				<input type="submit" value="consultar" class="consultar">
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$.validate({ 
				form: '#consultar_empleado', 
				language: es 
			});
		});
	</script>
	<?php 
		$con = mysqli_connect('localhost','root','','proyecto_agil');
		if($_GET){
			$documento = $_GET["documento"];
			$sql = mysqli_query($con, "SELECT * FROM anadir_empleado WHERE documento=$documento");
			$row = mysqli_fetch_array($sql);
		if($row){
			echo "
				<table border='1px'>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>opciones</th>
					</tr>
					<tr>
						<td>".$row['nombre']."</td>
						<td>".$row['apellido']."</td>
						<td>
						<a href='modificar_empleado.php?id=".$row['id']."'><button class='glyphicon glyphicon-pencil'></button></a>
						<a href='consultare.php?id=".$row['id']."'><button class='glyphicon glyphicon-search'></button></a>
						<a href='eliminar_empleado.php?id=".$row['id']."'><button class='glyphicon glyphicon-trash'></button></a>
						</td>
					</tr>
					</tr>
												
				</table>
				
			";
		}
	}

	?>


</body>
</html>