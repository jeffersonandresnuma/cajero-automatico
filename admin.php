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
<center>
		<div class="col-md-9">
			
	        <table class="table table-bordered table-hover" style="width:100%">
	        <tr>
	        <th>identificacion</th>
	        <th>usuario</th>
	        <th>contraseña</th>
	        <th>correo</th>
	        <th>saldo</th>
	        <th>estado</th>
	        </tr>

	        <?php 
	       


$conexion=mysqli_connect('localhost','root','','bd');

$consulta="SELECT * FROM `usuarios` WHERE 1";
$result=mysqli_query($conexion,$consulta);

while ($mostrar=mysqli_fetch_array($result)) {
	




	         ?>

	
	        <tr>
	        <td><?php echo $mostrar['id']?></td>
	        <td><?php echo $mostrar['usuario']?></td>
	       <td><?php echo $mostrar['contraseña']?></td>
	       <td><?php echo $mostrar['correo']?></td>
	        <td><?php echo $mostrar['valor']?></td>
	        <td><?php echo $mostrar['estado']?></td>
	        

	        
	        </tr>
	        <?php 

}

	         ?>

	        </table>
		</div>
	</center>
	<center>
	<div class="col-md-3">
			
	        <table class="table table-bordered table-hover" style="width:100%">
	        	<tr>
	        		<center>
	<td><form action="index.php"><button  class="btn btn-danger">inicio</button></form></td> <td><form action="activo.php"><button  class="btn btn-primary">habilitar</button></form></td> <td><form action="inactivo.php"><button  class="btn btn-warning">inhabilitar</button></form></td></tr></table></div></center></center>

	

</body>
</html>

	        