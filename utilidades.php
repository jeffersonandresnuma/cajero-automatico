<?php 
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];

session_start();
$_SESSION['Usuario']=$Usuario;

$conexion=mysqli_connect('localhost','root','','bd');

$consulta1="SELECT * FROM `admin` WHERE usuario = '$Usuario' and contraseña = '$Contraseña'";
$resultado1=mysqli_query($conexion,$consulta1);
$filas1=mysqli_num_rows($resultado1);

if ($filas1){
	header("admin.php");
	include("admin.php");
	mysqli_free_result($resultado1);
}

else
{

$consulta="SELECT * FROM `usuarios` WHERE usuario = '$Usuario' and contraseña = '$Contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:home.php");
}
else{
	?>
	<?php
	include("index.php");
	?>
	<div class="alert alert-danger">
  <strong>Error!</strong> credenciales invalidas o usuario no registrado.
</div>

	<?php
	mysqli_free_result($resultado);
}
}


mysqli_close($conexion);

