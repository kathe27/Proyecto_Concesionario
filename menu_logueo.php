<?php session_start() ?>
<!DOCTYPE html>
<html>
<title>newcars</title>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="icon" href="imgs/ICONO.png">
<script src="js/menu.js"></script>
<script><!--Start of Zendesk Chat Script-->
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4fOyoZZHu93TUjaDk2hNlj106bgj7p16";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
<!--End of Zendesk Chat Script--></script>
</head>
<?php 
		$con = mysqli_connect('localhost','root','','proyecto_agil');
 ?>
<body>

<h1 class="titulo">DPK NEW-CARS</h1>
<img class="icono" src="imgs/ICONO.png" alt="">


<ul id="menu">
<li>
	<a href="menu.html"><span class="glyphicon glyphicon-home"></span><?php echo $_SESSION['nombre']; ?></a>
</li>
<li>
	<li><a href="galeria.html"><span class="glyphicon glyphicon-search"></span>Quienes Somos</a></li>
</li>
<li>
	<a href="#"><span class="glyphicon glyphicon-list-alt"></span>Catalogo</a>
	<ul>
		<li><a href="catalogo.html"><span class="glyphicon glyphicon-search"></span>Nuevos</a></li>
		<li><a href="catalogov.html"><span class="glyphicon glyphicon-file"></span>Antiguos</a></li>
	</ul>
</li>
<li>
	<li><a href="maps.html"><span class="glyphicon glyphicon-map-marker"></span>Ubicacion</a></li>
</li>
</ul>

</div>

</body>

<style type="text/css">
	#menu{
		border-style: solid;
		border-color: #C6BDBD;
		border-width: 1px;
		margin-top: 110px;
		margin-left: 5%;
		margin-right: 75%;
		background: rgba(20,20,20,0.5);

	}
	
</style>

<script type="text/javascript">
$(document).ready(function(){
    $("#menu").verticalmenu({
    	duration:200	//default : 200
    });
});
</script>

</html>