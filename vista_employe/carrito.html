<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar & Eliminar Elementos jQuery</title>
	<link rel="stylesheet" href="css/carrito.css">
	<link rel="icon" type="text/css" href="imgs/ICONO.png">
</head>
<body>
	<h1 class="titulo">DPK NEW-CARS</h1>
	<a href="menu_logueo.php"><img class="icono" src="imgs/ICONO.png" alt=""></a>
	<section id="app">
		<article id="productos">
			<input type="text" id="nproducto" placeholder="Nombre Producto">
			<input type="number" id="valor" placeholder="Valor Unidad">
			<input type="number" id="cantidad" placeholder="Cantidad">
			<button id="adicionar">Adicionar</button>
		</article>
		<article id="carrito">
			<table class="table">
				<tr>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Eliminar</th>
				</tr>	
			</table>
			<h2 class="total"></h2>
		</article>
	</section>

	<script src="js/jquery-1.11.2.min.js"></script>
	<script>
	$(document).ready(function() {


		$('#adicionar').click(function() {

			$nproducto = $('#nproducto').val();
			$valor     = parseInt($('#valor').val());
			$cantidad  = parseInt($('#cantidad').val());

			if($nproducto != '' && $valor != '' && $cantidad != '') {

				$('#carrito table').append('<tr><td>'+$nproducto+'</td><td>'+$cantidad+'</td><td class="subtotal">'+$valor*$cantidad+'</td><td><button class="eliminar">X</button></td></tr>');
				$('input').val('');
			}

			$('table tr:even').css('background-color', '#dbdbea');
			totalizar();

			if($('tr').length > 9) {
				$('#carrito').css('height', 'auto');
			}

		});

		$('body').on('click', 'button.eliminar', function() {
			$(this).parent().parent().remove();
			totalizar();
		});

	});

	function totalizar() {

		$total = 0;

		$('.subtotal').each(function() {
			$total += parseInt($(this).text());
		});
		
		$('h2').html("Total: <span>"+$total+"</span>");
	}

	</script>
</body>
</html>