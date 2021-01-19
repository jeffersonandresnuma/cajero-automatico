<?php 
$id=$_POST['id'];
$Usuario=$_POST['nombre'];
$email=$_POST['email'];
$contraseña=$_POST['contr'];

session_start();


$conexion=mysqli_connect('localhost','root','','bd');


mysqli_query($conexion,"INSERT INTO `usuarios`(`id`, `usuario`, `contraseña`, `correo`, `valor`, `estado`) VALUES ('$id','$Usuario','$contraseña','$email',0,'activo')");



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>registro</title>
 	<script src="js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css">
<script>
	alert("se registro exitosamente");
</script>
 </head>
 <body>
 	<br>
 	<center><form action="index.php"><button  class="btn btn-primary">Inicio</button></form></center>
 </body>
 </html>