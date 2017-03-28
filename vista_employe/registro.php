<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="css/registro.css">
	<link rel="icon" href="imgs/ICONO.png">
	
</head>
<body>
	<form action="" method="post" id="registro">
		<fieldset>
			<h1>REGISTRO</h1>
			<a href="menu.html"><img src="imgs/cars.png" alt=""></a>
			<div>
				<input id="user" type="text" name="nombre" placeholder="Ingrese Nombre" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input id="user" type="text" name="apellido" placeholder="Ingrese Apellidos" data-validation="length" data-validation-length="min4">
			</div>
			<div>
				<label>Tipo Documento</label><br>
				<select name="tipo_documento">
					<option>Seleccione una opcion</option>
					<option>Cedula Ciudadania</option>
					<option>Cedula Extranjera</option>
				</select>
			</div>
			<div>
				<input id="user" type="number" name="documento" placeholder="Ingrese Documento" data-validation="length" data-validation-length="min9">
			</div>
			<div>
				<input id="user" type="text" name="celular" placeholder="Ingrese Celular" data-validation="length" data-validation-length="min9">
			</div>	
			<div>
				<input id="user" type="text" name="direccion" placeholder="Ingrese Direccion" data-validation="length" data-validation-length="min9">
			</div>	
			<div>
				<input id="user" type="email" name="email" placeholder="Ingrese Email" data-validation="length" data-validation-length="min10">
			</div>
			<div>
				<input id="user" type="password" name="contrasena" placeholder="Ingrese Contraseña" data-validation="length" data-validation-length="min10">
			</div>
			<div class="btn">
			<br>
				<input type="submit" value="Enviar" class="enviar">
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>
	<script>
		$(document).ready(function() {
			$.validate({ 
				form: '#registro', 
				language: es 
			});
		});
	</script>

	<?php 

		if($_POST){
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			$tipo_documento = $_POST["tipo_documento"];
			$documento = $_POST["documento"];
			$celular = $_POST["celular"];
			$direccion = $_POST["direccion"];
			$email = $_POST["email"];
			$contrasena = $_POST["contrasena"];
			if($nombre!="" && $apellido!="" && $tipo_documento!="" && $documento!="" && $celular!="" && $direccion!="" && $email!="" && $contrasena!="" ){
				$con = mysqli_connect('localhost','root','','proyecto_agil');
				$sql = mysqli_query($con, "INSERT INTO empleados VALUES 
					(DEFAULT, '$nombre','$apellido','$tipo_documento','$documento','$celular','$direccion','$email','$contrasena')");
				if($sql){
					echo "<script>alert('Registrado Satisfactoriamente')</script>";
				}
			}else{
				echo "<script>alert('No Se Pudo Registrar')</script>";
			}
			

		}

	?>

</body>
</html>