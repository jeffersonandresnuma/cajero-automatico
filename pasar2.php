<?php 

$id=$_POST['id'];
$nombre=$_POST['nom'];
$pasar=$_POST['pasar'];


session_start();


$conexion=mysqli_connect('localhost','root','','bd');

$consulta=mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE 1");
while ($resultado=mysqli_fetch_array($consulta)) {

	$total=$resultado['valor']-$pasar;


	if ($total<1) {
		echo "saldo insuficiente";
	}
	else
	{
		$_UPDATE_SQL="UPDATE `usuarios` SET `valor`=$total WHERE id = 1004857965";
	mysqli_query($conexion,$_UPDATE_SQL);

	header("location:saldo.php");
	}

	

}







 ?>