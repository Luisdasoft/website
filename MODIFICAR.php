<?php 
		session_start();
		if (!isset($_GET['id'])) {
			header('Location: INDEX.php');
		}

		if (!isset($_SESSION['nombre'])) {
			header('Location: LOGIN.php');
		}elseif (iseet($_SESSION['nombre'])) {
			include 'model/CONEXION.php';
			$id = $_GET['id'];

			$senencia = $bd->prepare("SELECT * FROM paciente WHERE id_paciente = ?;");
			$sentencia->execute([$id]);
			$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		}else{
			echo "Error en el sistema!";
		}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>MODIFICAR CITA</title>
 </head>
 <body>
 	<center>
 		<h3>Modificar paciente(cita):</h3>
			<form method="POST" action="MODIFICARPROCESO.php">
				<table>
					<tr>
						<td>Nombre Completo: </td>
						<td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombre_completo ?>"></td>
					</tr>
					<tr>
						<td>Fecha: </td>
						<td><input type="date" name="txt2Fecha" value="<?php echo $persona->fecha ?>"></td>

					</tr>
					<tr>
						<td>Hora: </td>
						<td><input type="text" name="txt2Hora" value="<?php echo $persona->hora ?>"></td>

					</tr>
					<tr>
						<td>Doctor: </td>
						<td><input type="text" name="txt2Doctor" value="<?php echo $persona->doctor ?>"></td>

					</tr>
					<tr>
						<input type="hidden" name="oculto" value="1">
					</tr>
					<tr>
						<input type="hidden" name="oculto">
						<input type="hidden" name="id2" value="<?php echo $persona->id_paciente; ?>">
						<td colspan="2"><input type="submit" value="MODIFICAR"></td>
					</tr>
				</table>
			</form>
 	</center>
 
 </body>
 </html>