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
		<div class="col-md-8">
			<form action="pasar2.php" method="POST">
	        <table class="table table-bordered table-hover" style="width:100%">
	        <h5>por favor llene todos los campos</h5>
	        <tr>
	        <th>identificacion</th>
	        <th>nombre</th>
	        <th>valor a pasar</th>
	        </tr>
	        <tr>
	        <td><input type="number"  class="form-control" name="id" required id="id" placeholder="Ej: 1234..."></td>
	        <td><input type="text"  class="form-control" name="nom" required id="nom" placeholder="Ej: juana..."></td>
	        <td><input type="number"  class="form-control" name="pasar" required id="pasar" placeholder="Ej: 1234..."></td>
	        </tr>
	        </table>
	        <center><button  class="btn btn-success" type="submit">Validar</button></center></form>
		</div>
	</div>

</body>
</html>