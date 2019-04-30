<?php include('validarRegistro.php'); 

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Ejercicio4
	</title>
</head>
<body>

	<form method="post">
	<div>
		<label>Usuario: </label>
		<input type="text"  name="user" required="required">
	</div>
	<div>
		<label> Confirmar Usuario: </label>
		<input type="text"  name="user2" required="required">
	</div>
	<div>
		<label>Password: </label>
		<input type="password" name="pass" required="required">
	</div>
	<div>
		<label> Confirmar Pass: </label>
		<input type="password" name="pass2" required="required">
	</div>

	<button name="guardar">Guardar</button>
</form>

</body>
</html>