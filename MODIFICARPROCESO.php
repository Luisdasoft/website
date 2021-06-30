<?php 
		if (!isset($_POST['oculto'])) {
			header('Location: INDEX.php');
		}

		include 'model/CONEXION.php';
		$id2 = $_POST['id2'];
		$nombre = $_POST['txtNombre'];
		$fecha = $_POST['txtFecha'];
		$hora = $_POST['txtHora'];
		$doctor = $_POST['txtDoctor'];

		$sentecia = $bd->prepare("UPDATE paciente SET nombre_completo = ?, fecha = ?, hora = ?, doctor = ?, WHERE id_paciente = ?; ");

		$resultado = $sentencia->execute([$nombre2,$fecha2,$hora2,$doctor2,$id2]);

		if ($resultado === TRUE) {
			header('Location: INDEX.php');
		} else {
			echo "Error";
		}
		
?>