<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuario</title>
	<link rel="stylesheet" href="css/añadir_empleado.css">
	<link rel="stylesheet" href="añadir_empleado.php">
	<link rel="icon" href="imgs/ICONO.png">		
</head>
<body>
	

	<form action="" method="post" id="anadir_empleado">
		<fieldset>
			<h1>AÑADIR</h1>
			<a href="menu.html"><img src="imgs/cars.png" alt=""></a>
			<div>
				<input type="text" id="nombre" name="nombre" placeholder="Digitar Nombre(s)" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" id="apellido" name="apellido" placeholder="Digitar Apellido(s)" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="number" id="documento" name="documento" placeholder="Digitar Documento De Identidad" data-validation="length" data-validation-length="min9">
			</div>
			<div>
				<input type="text" id="direccion" name="direccion" placeholder="Digitar Direccion Residencial" data-validation="length" data-validation-length="min5">
			</div>
			<div>
				<input type="number" id="telefono" name="telefono" placeholder="Digite Numero Telefonico" data-validation="length" data-validation-length="min7">
			</div>
			<div>
				<input type="number" id="celular" name="celular" placeholder="Digite Numero Celular" data-validation="length" data-validation-length="min10">
			</div>
			<div>
				<label>Cuenta Con Licencia De Conduccion</label>
				<select>
					<option>Seleccione Una Opcion</option>
					<option>Si</option>
					<option>No</option>
				</select>
			</div>
			<div>
				<input type="number" id="licencia" name="licencia" placeholder="Digite Numero De Su Licencia De Conduccion" data-validation="length" data-validation-length="min9">
			</div>
			<div>
				<input type="email" id="correo" name="correo" placeholder="Digite Su Correo Electronico" data-validation="email">
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
				form: '#anadir_empleado', 
				language: es 
			});
		});
	</script>

	<?php 
	if($_POST){
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$documento = $_POST["documento"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];
		$celular = $_POST["celular"];
		$licencia = $_POST["licencia"];
		$correo = $_POST["correo"];
		if($nombre!="" && $apellido!="" && $documento!="" && $direccion!="" && $telefono!="" && $celular!="" && $licencia!="" && $correo!=""){
			$con = mysqli_connect('localhost','root','','proyecto_agil');
			$sql = mysqli_query($con, "INSERT INTO anadir_empleado VALUES('','$nombre','$apellido','$documento','$direccion','$telefono','$celular','$licencia','$correo')");
			if($sql){
				echo "<script>alert('Usuario Registrado Satisfactoriamente')</script>";
			}
		}else{
			echo "<script>alert('El Usuario No Se Pudo Registrar')</script>";
		}
		

	}

?>
</body>
</html>