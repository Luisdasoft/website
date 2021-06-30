<?php 
		session_start();
		if (isset($_SESSION['nombre'])) {
			header('Location: INDEX.php');
			}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INICIAR SESION</title>
</head>
<body>
	<center>
		<form method="POST" action="LOGINPROCESO.php">
				<label>Usuario: </label>
				<input type="text" name="txtUsu">
				<br>
				<br>
				<label>Password: </label>
				<input type="Password" name="txtPass">
				<br>
				<br>
				<input type="submit" value=" Iniciar sesión">
		</form>		
	</center>
</body>
</html>