<<?php 
		if (!isset($_GET['id'])) {
			exit();
		}

		$codigo = $_GET['id'];
		include 'model/CONEXION.php';
		$sentencia = $bd->prepare("DELETE FROM paciente WHERE id_paciente = ?;");
		$resultado = $sentencia->execute([$codigo]);

		if ($resultado === TRUE) {
			header('Location: INDEX.php');
		} else {
			echo "Error";
		}
		
 ?>