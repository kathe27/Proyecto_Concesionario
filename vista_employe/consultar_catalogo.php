<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar</title>
	<link rel="icon" href="imgs/ICONO.png">	
	<link rel = "stylesheet" href = " https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/consultar_catalogo.css">
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
	<form action="" method="get" id="consultar_catalogo">
		<fieldset>
			<h1>CONSULTAR</h1>
			<a href="menu_logueo.php"><img src="imgs/cars.png" alt=""></a>
			<div>
				<input type="text" id="marcas" name="marcas" placeholder="Digite Marca De Carro" data-validation="length" data-validation-length="min3">
			</div>
			<div>
			<br>
				<input type="submit" value="Consultar" class="consultar">
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
				form: '#consultar_catalogo', 
				language: es 
			});
		});
	</script>
	<?php 
		$con = mysqli_connect('localhost','root','','proyecto_agil');
		if($_GET){
			$marcas = $_GET["marcas"];
			$sql = mysqli_query($con, "SELECT * FROM anadir_catalogo WHERE marcas= '$marcas'");
			$row = mysqli_fetch_array($sql);
		if($row){
			echo "
				<table border='1px'>
					<tr>
						<th>Foto</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Color</th>
						<th>Precio</th>
						<th>opciones</th>
					</tr>
					<tr>
						<td>".$row['foto']."</td>
						<td>".$row['marcas']."</td>
						<td>".$row['modelo']."</td>
						<td>".$row['color']."</td>
						<td>".$row['precio']."</td>
						<td>
						<a href='modificar_catalogo.php?id=".$row['id']."'><button class='glyphicon glyphicon-pencil'></button></a>
						<a href='eliminar_catalogo.php?id=".$row['id']."'><button class='glyphicon glyphicon-trash'></button></a>
					</tr>
					</tr>
												
				</table>
				
			";

		}
	}

	?>
</body>
</html>