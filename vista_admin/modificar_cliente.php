<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cliente</title>
	<link rel="stylesheet" href="css/modificar_cliente.css">
	<link rel="icon" href="imgs/ICONO.png">
	
</head>
<body>

	<?php 
		$con = mysqli_connect('localhost','root','','proyecto_agil');
		if (mysqli_connect_errno()) {
			echo "No se pudo conectar a la BD".mysqli_error();
		}

		$id=$_GET['id'];
			
		$query = mysqli_query($con, "SELECT * FROM registro WHERE id = '$id'");
		$row=mysqli_fetch_array($query);
 	?>
	<form action="" method="post" id="modificar_cliente">
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
				<label>Tipo Documento</label><br>
				<select name="tipo_documento">
					<option>Seleccione una opcion</option>
					<option <?php if ($row['tipo_documento']=='Cedula Ciudadania')echo 'selected'?>>Cedula Ciudadania</option>
					<option <?php if ($row['tipo_documento']=='Cedula Extranjera')echo 'selected'?>>Cedula Extranjera</option>
				</select>
			</div>
			<div>
				<input id="user" type="number" value="<?php echo $row['documento'] ?>" name="documento" placeholder="Ingrese Documento" data-validation="length" data-validation-length="min9">
			</div>
			<div>
				<input id="user" type="text" value="<?php echo $row['celular'] ?>" name="celular" placeholder="Ingrese Celular" data-validation="length" data-validation-length="min9">
			</div>
			<div>
				<input id="user" type="text" value="<?php echo $row['direccion'] ?>" name="direccion" placeholder="Ingrese Direccion" data-validation="length" data-validation-length="min10">
			</div>
			<div>
				<input id="user" type="text" value="<?php echo $row['ciudad'] ?>" name="ciudad" placeholder="Ingrese Ciudad" data-validation="length" data-validation-length="min8">
			</div>
			<div>
				<input id="user" type="email" value="<?php echo $row['email'] ?>" name="email" placeholder="Ingrese Email" data-validation="length" data-validation-length="min10">
			</div>
			<div>
				<label>Tiene Licencia</label><br>
				<select name="tipo_licencia">
					<option>Seleccione Opcion</option>
					<option <?php if ($row['tipo_licencia']=='Si')echo 'selected'?>>Si</option>
					<option <?php if ($row['tipo_licencia']=='No')echo 'selected'?>>No</option>
				</select>
			</div>
			<div>
				<input id="user" type="text" value="<?php echo $row['numero_licencia'] ?>" name="numero_licencia" placeholder="Ingrese Número Licencia" data-validation="length" data-validation-length="min9">
			</div>
			<div>
				<input id="user" type="text" value="<?php echo $row['nit'] ?>" name="nit" placeholder="Ingrese NIT" data-validation="length" data-validation-length="min9">
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
				form: '#modificar_cliente', 
				language: es 
			});
		});
	</script>

	<?php 
		if($_POST){
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$tipo_documento = $_POST['tipo_documento'];
			$documento = $_POST['documento'];
			$celular = $_POST['celular'];
			$direccion = $_POST['direccion'];
			$ciudad = $_POST['ciudad'];
			$email = $_POST['email'];
			$tipo_licencia = $_POST['tipo_licencia'];
			$numero_licencia = $_POST['numero_licencia'];
			$nit = $_POST['nit'];
			$con = mysqli_connect('localhost','root','','proyecto_agil');
			$query = "UPDATE registro SET nombre='$nombre', apellido='$apellido',tipo_documento='$tipo_documento',
			documento='$documento',celular='$celular',direccion='$direccion',ciudad='$ciudad',email='$email',
			tipo_licencia='$tipo_licencia',numero_licencia='$numero_licencia',nit='$nit' WHERE id = $id";

			if($row = mysqli_query($con, $query)){
				echo "<script>alert('Datos modificados')</script>";
			}else{
				echo "<script>alert('No se pudo actualizar')</script>";
			}
		}

	 ?>
</body>
</html>