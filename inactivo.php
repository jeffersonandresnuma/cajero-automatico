<?php 
session_start();


$conexion=mysqli_connect('localhost','root','','bd');
$_UPDATE_SQL="UPDATE `usuarios` SET `estado`='inactivo' WHERE 1";
mysqli_query($conexion,$_UPDATE_SQL);
header("location:admin.php");


 ?>