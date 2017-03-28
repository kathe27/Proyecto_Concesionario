<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cliente</title>
	<link rel="stylesheet" href="css/eliminar_empleado.css">
	<link rel="icon" href="imgs/ICONO.png">
	
</head>
<body>
	<?php 
		if($_GET){
			$id = $_GET["id"];
			$con = mysqli_connect('localhost','root','','proyecto_agil');
			$sql = mysqli_query($con, "DELETE FROM registro WHERE id=$id");
			if($sql){
				echo "<script>alert('usuario eliminado')</script>";
			}else{
				echo "<script>alert('usuario no eliminado')</script>";
			}
		}

	 ?>
</body>
</html>