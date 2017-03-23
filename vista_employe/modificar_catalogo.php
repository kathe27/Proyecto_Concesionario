<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo</title>
	<link rel="stylesheet" href="css/modificar_catalogo.css">
	<link rel="icon" href="imgs/ICONO.png">
	
</head>
<body>

	<?php 
		$con = mysqli_connect('localhost','root','','proyecto_agil');
		if (mysqli_connect_errno()) {
			echo "No se pudo conectar a la BD".mysqli_error();
			}

		$id=$_GET['id'];
				
		$query = mysqli_query($con, "SELECT * FROM anadir_catalogo WHERE id = '$id'");
		$row=mysqli_fetch_array($query);
	?>
	<form action="" method="post" id="modificar_catalogo">
		<fieldset>
			<h1>MODIFICAR</h1>
			<a href="menu.html"><img src="imgs/cars.png" alt=""></a>
			<div>
				<input type="text" value="<?php echo $row['marcas'] ?>" id="marcas" name="marcas" placeholder="Digitar Marca Del Auto" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" value="<?php echo $row['modelo'] ?>" id="modelo" name="modelo" placeholder="Digitar Modelo De Referencia" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="text" value="<?php echo $row['color'] ?>" id="color" name="color" placeholder="Digite El Color" data-validation="length" data-validation-length="min3">
			</div>
			<div>
				<input type="number" value="<?php echo $row['precio'] ?>" id="precio" name="precio" placeholder="Digite El Precio" data-validation="length" data-validation-length="min4">
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
				form: '#modificar_catalogo', 
				language: es 
			});
		});
	</script>
	<?php 
		if($_POST){
			$marcas = $_POST['marcas'];
			$modelo = $_POST['modelo'];
			$color = $_POST['color'];
			$precio = $_POST['precio'];
			$con = mysqli_connect('localhost','root','','proyecto_agil');
			$sql = "UPDATE anadir_catalogo SET marcas='$marcas', modelo='$modelo',color='$color',precio='$precio' WHERE id = $id";

			if($row = mysqli_query($con, $sql)){
				echo 'Datos modificados';
			}else{
				echo "No se pudo actualizar";
			}
		}

	?>
	

</body>
</html>