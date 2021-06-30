<?php 
		session_start();
		include_once 'model/CONEXION.php';
		$usuarios = $_POST['txtUsu'];
		$contraseñas = $_POST['txtPass'];
		$sentencia = $bd->prepare('select * from t_usuario where
									 usuario = ? and contraseña = ?;');
		$sentencia->execute([$usuario, $contraseña]);
		$datos = $sentencia->fetch(PDO::FETCH_OBJ);
		//pint_r($datos);

		if($datos === FALSE){
			header('Location: LOGIN.php');
		}elseif ($sentencia->rowCount() == 1 ) {
			$_SESSION['nombre'] = $datos->usuario;
			header('Location: INDEX.php');
		}
?>		