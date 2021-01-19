<!DOCTYPE html>
<html>
<head>
	<title>Cajero automatico</title>
<script src="js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<br>
	<br>
	<h1><center>Su saldo es de </center></h1>
	<br>
	

</body>
</html>
<?php 

session_start();


$conexion=mysqli_connect('localhost','root','','bd');

$consulta=mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE id = 1004857965");
while ($resultado=mysqli_fetch_array($consulta)) {

	echo "<h1>$".$resultado['valor']."</h1>";
	
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	
 </head>
 <body>
 	<form action="index.php" ><button class="btn btn-primary">Aceptar</button></form>
 
 </body>
 </html>