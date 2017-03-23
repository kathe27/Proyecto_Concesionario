<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Empleado</title>
	<link rel="stylesheet" href="css/modificar_empleado.css">
	<link rel="icon" href="imgs/ICONO.png">
	
</head>
<body>

	<?php 
		$con = mysqli_connect('localhost','root','','proyecto_agil');
		if (mysqli_connect_errno()) {
			echo "No se pudo conectar a la BD".mysqli_error();
		}

		$id=$_GET['id'];
			
		$query = mysqli_query($con, "SELECT * FROM anadir_empleado WHERE id = '$id'");
		$row=mysqli_fetch_array($query);
 	?>
	<form action="" method="post" id="modificar_empleado">
		<fieldset>
			<h1>MODIFICAR</h1>
			<a href="menu.html"><img src="imgs/cars.png" alt=""></a>
			<div>
				<input type="text" value="<?php echo $row['nombre'] ?>" id="nombre" name="nombre" placeholder="Digitar Nombre(s)" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" value="<?php echo $row['apellido'] ?>" id="apellido" name="apellido" placeholder="Digitar Apellido(s)" data-validation="length" data-validation-length="min4">
			</div>
			<div>
				<input type="number" value="<?php echo $row['documento'] ?>" id="documento" name="documento" placeholder="Digitar Documento De Identidad" data-validation="length" data-validation-length="min9">
			</div>			
			<div>
				<input type="number" value="<?php echo $row['licencia'] ?>" id="licencia" name="licencia" placeholder="Digite Numero De Su Licencia De Conduccion" data-validation="length" data-validation-length="min9">
			</div>			
			<div class="btn">
			<br>
				<input type="submit" value="Modificar" class="enviar">
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>
	<script>
		$(document).ready(function() {
			$.validate({ 
				form: '#modificar_empleado', 
				language: es 
			});
		});
	</script>

	<?php 
		if($_POST){
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$documento = $_POST['documento'];
			$licencia = $_POST['licencia'];
			$con = mysqli_connect('localhost','root','','proyecto_agil');
			$query = "UPDATE anadir_empleado SET nombre='$nombre', apellido='$apellido',documento='$documento',licencia='$licencia' WHERE id = $id";

			if($row = mysqli_query($con, $query)){
				echo 'Datos modificados';
			}else{
				echo "No se pudo actualizar";
			}
		}

	 ?>
</body>
</html>