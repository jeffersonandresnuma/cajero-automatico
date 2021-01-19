<?php 
$valor=$_POST['Valor'];
session_start();


$conexion=mysqli_connect('localhost','root','','bd');

$consulta=mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE 1");
while ($resultado=mysqli_fetch_array($consulta)) {

	$total=$resultado['valor']+$valor;
	

	$_UPDATE_SQL="UPDATE `usuarios` SET `valor`=$total WHERE id = 1004857965";
	mysqli_query($conexion,$_UPDATE_SQL);

}


header("location:saldo.php");

?>



 



 



 