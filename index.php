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
	<center>
		<br>

		<center><h2>Bienvenido al cajero automatico</h2></center>
	<br>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<form action="utilidades.php" action="saldo.php" method="POST">
	        <table class="table table-bordered table-hover" style="width:100%">
	        <h6>por favor ingrese sus datos</h6>
	        <tr>
	        <th>Usuario</th>
	        </tr>
	        <tr>
	        <td><input type="text"  class="form-control" name="Usuario" required id="Usuario" placeholder="Ej: 1234..."></td>
	        </tr>
	         <tr>
	        <th>Contraseña</th>
	        </tr>
	        <tr>
	        <td><input type="password" class="form-control" name="Contraseña" required id="Contraseña" placeholder="Ej: 1234..."></td>
	        </tr>
	        </table>
	        <center><button  class="btn btn-success" type="submit">Iniciar Sesion</button> </center></form>
		</div>
	</div>
	<form action="registro.php"> <button class="btn btn-warning">Registrarse</button>
		
	</center>
	




</body>


</html>

