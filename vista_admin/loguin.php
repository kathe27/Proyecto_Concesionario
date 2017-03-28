<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="css/loguin.css">
	<link rel="icon" href="imgs/ICONO.png">
	
</head>
<body>
	<form action="" method="post" id="loguin">
		<fieldset>
		<h1>INGRESAR</h1>
			<a href="menu.html"><img src="imgs/cars.png" alt=""></a>
			<a href="https://accounts.google.com"><img class="gmail" src="imgs/gmail.png" alt=""></a>
			<a href="https://facebook.com"><img class="facebook" src="imgs/facebook.png" alt=""></a>
			<div>
				<input id="user" name="email" type="text" placeholder="Correo electronico" data-validation="email">
			</div>
			<div>
				<input id="password" name="contrasena" type="password" placeholder="Contraseña" data-validation="length" data-validation-length="min7">
			</div>
			<div>

				<a class="registre" href="registro.php">Registrate aqui!</a>
				<br>
				<br>
				<input type="submit" value="Iniciar Sesion" class="enviar">
			</div>
		</fieldset>
	</form>

	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>
	<script>
		$(document).ready(function() {
			$.validate({ 
				form: '#loguin', 
				language: es 
			});
		});
	</script>	

	<?php 
		if ($_POST) {
				$email = $_POST['email'];
				$contrasena = $_POST['contrasena'];
				$con = mysqli_connect('localhost','root','','proyecto_agil');
  				$sql = "SELECT email, apellido FROM admin WHERE email = '$email' AND contrasena = '$contrasena'";
				$query = mysqli_query($con, $sql);
  				if(mysqli_num_rows($query) > 0){
  				$row = mysqli_fetch_array($query);
  				$_SESSION['nombre'] = $row['nombre']." ".$row['apellido'];
  				header("location: menu_logueo.php");
  				}else {
  				echo "<script>
  				alert('Email o Contraseña Incorrectos');
  				</script>";
	}
		}
 ?>
	
</body>
</html>