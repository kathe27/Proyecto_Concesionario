<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo</title>
	<link rel="stylesheet" href="css/añadir_catalogo.css">
	<link rel="icon" href="imgs/ICONO.png">
	<link rel="stylesheet" href="anadir_catalogo.php">
</head>
<body>
	<form action="" method="post" id="anadir_catalogo">
		<fieldset>
			<h1>AÑADIR</h1>
			<a href="menu_logueo.php"><img src="imgs/cars.png" alt=""></a>
			<div>
				<label>Ingresa el archivo:</label>
				<input name="imagen" type="file" >
			</div>
			<div>
				<input type="text" id="marcas" name="marcas" placeholder="Marca Del Auto" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" id="modelo" name="modelo" placeholder="Modelo De Referencia" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" id="color" name="color" placeholder="Color" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" id="precio" name="precio" placeholder="Precio" data-validation="length" data-validation-length="min3">
			</div>
			<div class="btn">
			<br>
				<input type="submit" value="Añadir" class="enviar">
			</div>

		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>
	<script>
		$(document).ready(function() {
			$.validate({ 
				form: '#anadir_catalogo', 
				language: es 
			});
		});
	</script>
	<?php 

		if($_POST){
			$marcas = $_POST["marcas"];
			$modelo = $_POST["modelo"];
			$color = $_POST["color"];
			$precio = $_POST["precio"];
			if($marcas!="" && $modelo!="" && $color!="" && $precio!=""){
				$con = mysqli_connect('localhost','root','','proyecto_agil');
				$sql = mysqli_query($con, "INSERT INTO anadir_catalogo VALUES (DEFAULT, '$marcas','$modelo','$color','$precio')");
				if($sql){
					echo "<script>alert('Automovil Registrado Satisfactoriamente')</script>";
				}
			}else{
				echo "<script>alert('El Automovil No Se Pudo Registrar')</script>";
			}
			

		}

	?>



</body>
</html>