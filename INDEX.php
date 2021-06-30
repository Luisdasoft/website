<?php
		session_start();
		if (!isset($_SESSION['nombre'])) {
		  		header('Location: LOGIN.php');
		  } elseif (isset($_SESSION['nombre'])) {
		  		include 'model/CONEXION.php';
		  		$sentencia = $bd->query("SELECT * FROM paciente;");
		  		$paciente = $sentencia->fetchALL(PDO::FETCH_OBJ);
		  } else{
		  		echo "Error en el sistema";
		  }
		    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<h1>Bienvenido: <?php echo $_SESSION['nombre']?></h1>
		<a href="CERRAR.php">Cerrar Sesión</a>
		<h3>Lista de Citas</h3>
		<table>
			<tr>
				<td>Código</td>
				<td>Nombre Completo</td>
				<td>Fecha</td>
				<td>Hora</td>
				<td>Doctor</td>
				<td>Modificar</td>
				<td>Borrar</td>
			</tr>

			<?php
					foreach ($paciente as $dato) {
						?>
						<tr>
							<td><?php echo $dato->id_paciente; ?></td>
							<td><?php echo $dato->nombre_completo; ?></td>
							<td><?php echo $dato->fecha; ?></td>
							<td><?php echo $dato->hora; ?></td>
							<td><?php echo $dato->doctor; ?></td>
							<td><a href="MODIFICAR.php?id=<?php echo $dato->id_paciente; ?>">Modificar</a></td>
							<td><a href="BORRAR.php?id=<?php echo $dato->id_paciente; ?>">Borrar</a></td>
						</tr>
						<?php
					}
			?>
		</table>

		<! -- inicio insert -->
			<hr>
			<h3>Ingresar nueva cita:</h3>
			<form method="POST" action="CREAR.php">
				<table>
					<tr>
						<td>Nombre Completo: </td>
						<td><input type="text" name="txtNombre"></td>
					</tr>
					<tr>
						<td>Fecha: </td>
						<td><input type="date" name="txtFecha"></td>
					</tr>
					<tr>
						<td>Hora: </td>
						<td><input type="text" name="txtHora"></td>
					</tr>
					<tr>
						<td>Doctor: </td>
						<td><input type="text" name="txtDoctor"></td>
					</tr>
					<tr>
						<input type="hidden" name="oculto" value="1">
					</tr>
					<tr>
						<td><input type="reset" name=""></td>
						<td><input type="submit" value="REGISTRAR CITA"></td>
					</tr>
				</table>
			</form>
			<!-- fin insert -->

	</center>

</body>
</html>