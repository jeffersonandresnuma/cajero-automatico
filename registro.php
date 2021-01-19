<!DOCTYPE html>
<html>
<head>
	<title>registro cajero automatico</title>
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
	<center><h2>Bienvenido al registro</h2></center>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="registro2.php" method="POST">
	        <table class="table table-bordered table-hover" style="width:100%">
	        <br>
	        <h5>por favor llene todos los campos</h5>
	        <tr>
	        <th>identificacion</th>
	        <th>usuario</th>
	        <th>correo electronico</th>
	        <th>contraseña</th>
	        </tr>
	        <tr>
	        <td><input type="number"  class="form-control" name="id" required id="id" placeholder="Ej: 1234..."></td>
	        <td><input type="text"  class="form-control" name="nombre" required id="nombre" placeholder="Ej: juana..."></td>
	        <td><input type="email"  class="form-control" name="email" required id="email" placeholder="Ej: 1234..."></td>
	        <td><input type="text"  class="form-control" name="contr" required id="contr" placeholder="Ej: 1234..."></td>
	        </tr>
	        </table>
	        <br>
	        <center><button  class="btn btn-success" type="submit">Validar</button></center></form>
		</div>
	</div>

</body>
</html>