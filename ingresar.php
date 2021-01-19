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
	<center><h2>Bienvenido al cajero automatico</h2></center>
	<br>
	<br>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<form action="recibir.php" method="POST">
	        <table class="table table-bordered table-hover" style="width:100%">
	        <h6>por favor ingrese el valor que desea ingresar</h6>
	        <tr>
	        <th>Monto</th>
	        </tr>
	        <tr>
	        <td><input type="number"  class="form-control" name="Valor" required id="Valor" placeholder="Ej: 1234..."></td>
	        </tr>
	        </table>
	        <center><button  class="btn btn-success" type="submit">Validar</button></center></form>
		</div>
	</div>

</body>
</html>