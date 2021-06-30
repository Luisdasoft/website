<?php
		if(!isset($_POST['oculto'])){
			exit();
		}

		include 'model/CONEXION.php';
		$nombre = $_POST['txtNombre'];
		$fecha = $_POST['txtFecha'];
		$hora = $_POST['txtHora'];
		$doctor = $_POST['txtDoctor'];
		?>